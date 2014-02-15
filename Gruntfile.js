module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
	uglify: {
		dev: {
			options: {
				sourceMap: 'public/assets/compiled/<%= pkg.name %>.min.map.js',
				sourceMappingURL: '<%= pkg.name %>.min.map.js',
			},
			files: {
				'public/assets/compiled/<%= pkg.name %>.min.js': ['frontend/js/helpers.js', 'frontend/js/optionbox.js', 'frontend/js/storage.js', 'frontend/js/cart.js', 'frontend/js/template.js', 'frontend/js/view.js', 'frontend/js/controller.js', 'frontend/js/app.js']
			}
		}
	},
	sass: {
		dev: {
			options: {
				sourcemap: true,
				style: 'compressed',
			},
			files: {
				'public/assets/compiled/justmenu.min.css': 'frontend/sass/main.scss'
			}
		}
	},
	jshint: {
        options: {
            laxbreak: true,
        },
		beforeconcat: ['frontend/js/**/*.js'],
	},
	watch: {
		options: {
			livereload: true,
		},
		js: {
			files: ['frontend/js/**/*.js'],
			tasks: ['jshint', 'uglify:dev']
		},
		sass: {
			files: ['frontend/sass/**/*.scss'],
			tasks: ['sass:dev']
		}
	}
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['uglify:dev', 'sass:dev']);

};
