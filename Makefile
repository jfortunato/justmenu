SASS=./node_modules/node-sass/bin/node-sass
SASSFLAGS=--output-style compressed --source-comments map

UGLIFYJS=./node_modules/uglify-js/bin/uglifyjs
UGLIFYJSFLAGS=

JSHINT=./node_modules/jshint/bin/jshint
JSHINTFLAGS=

all: sass uglifyjs

sass: frontend/sass/main.scss
	$(SASS) $(SASSFLAGS) frontend/sass/main.scss public/assets/compiled/justmenu.min.css

js_files=$(shell find ./public/assets/angular -name '*.js')
uglifyjs: $(js_files)
	$(UGLIFYJS) $(UGLIFYJSFLAGS) $? > public/assets/compiled/justmenu.min.js

jshint: $(js_files)
	$(JSHINT) $(JSHINTFLAGS) $?

watch:
	watch -n 0.5 make
