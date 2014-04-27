SHELL := /bin/bash

NODE_BIN=node_modules/.bin

COMPILED_DIR=public/assets/compiled

SASS=$(NODE_BIN)/node-sass
SASSFLAGS=--output-style compressed --source-comments map
SASS_DIR=frontend/sass
SASS_FILES=$(shell find $(SASS_DIR) -name '*.scss')
SASS_COMPILED=$(COMPILED_DIR)/justmenu.min.css
SASS_MAIN=$(SASS_DIR)/main.scss

UGLIFYJS=$(NODE_BIN)/uglifyjs
UGLIFYJSFLAGS=
JS_DIR=public/assets/angular
JS_FILES=$(shell find $(JS_DIR) -name '*.js')
JS_COMPILED=$(COMPILED_DIR)/justmenu.min.js

JSHINT=$(NODE_BIN)/jshint
JSHINTFLAGS=--exclude public/assets/angular/**/*.min.js


.PHONY: all
all: sass uglifyjs

# alias
.PHONY: sass
sass: $(SASS_COMPILED)

$(SASS_COMPILED): $(SASS_FILES)
	$(SASS) $(SASSFLAGS) $(SASS_MAIN) $@
	:
# alias
.PHONY: uglifyjs
uglifyjs: $(JS_COMPILED)

$(JS_COMPILED): $(JS_FILES)
	$(UGLIFYJS) $(UGLIFYJSFLAGS) $(JS_FILES) > $@

.PHONY: jshint
jshint: $(JS_DIR)
	$(JSHINT) $(JSHINTFLAGS) $?

# include the livereload targets
include node_modules/tiny-lr/tasks/*.mk

$(COMPILED_DIR): $(SASS_COMPILED) $(JS_COMPILED)
	@echo CSS files changed: $?
	@touch $@
	curl -X POST http://localhost:35729/changed -d '{ "files": "$?" }'

.PHONY: reload
reload: livereload $(COMPILED_DIR)

.PHONY: watch
watch:
	while true; do make -s reload; sleep 0.5; done 

.PHONY: clean
clean:
	rm -rf $(SASS_COMPILED) $(JS_COMPILED)
