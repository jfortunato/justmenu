SHELL := /bin/bash

NODE_BIN=node_modules/.bin

SASS=$(NODE_BIN)/node-sass
SASSFLAGS=--output-style compressed --source-comments map
SASS_DIR=frontend/sass

UGLIFYJS=$(NODE_BIN)/uglifyjs
UGLIFYJSFLAGS=

JSHINT=$(NODE_BIN)/jshint
JSHINTFLAGS=

COMPILED_DIR=public/assets/compiled

all: sass uglifyjs reload

sass: $(SASS_DIR)/main.scss
	$(SASS) $(SASSFLAGS) $? $(COMPILED_DIR)/justmenu.min.css

js_files=$(shell find public/assets/angular -name '*.js')
uglifyjs: $(js_files)
	$(UGLIFYJS) $(UGLIFYJSFLAGS) $? > public/assets/compiled/justmenu.min.js

jshint: $(js_files)
	$(JSHINT) $(JSHINTFLAGS) $?

# include the livereload targets
include node_modules/tiny-lr/tasks/*.mk

$(COMPILED_DIR): $(shell find $(SASS_DIR) -name '*.scss') $(js_files)
	@echo CSS files changed: $?
	@touch $@
	curl -X POST http://localhost:35729/changed -d '{ "files": "$?" }'

reload: livereload $(COMPILED_DIR)

watch: all
	watch -n 0.5 make

.PHONY: reload sass uglifyjs jshint watch
