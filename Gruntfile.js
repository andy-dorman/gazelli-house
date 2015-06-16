module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		compass: {
			dist: {
				options: {
					sassDir: 'sass',
					cssDir: 'stylesheets',
            environment: 'production'
				}
			}
		},
		watch: {
			css: {
				files: '**/*.scss',
				tasks: ['compass']
			},
      js: {
          files: 'javascripts/**/*.js',
          tasks: 'uglify'
      }
		},
        uglify: {
            all: {
                files: {
                    'javascripts/gazelli-house.min.js': [
                        'bower_components/jquery/dist/jquery.min.js',
                        'bower_components/bootstrap/dist/js/bootstrap.min.js',
                        'bower_components/bootstrap-select/dist/js/bootstrap-select.js',
                        'js/jquery.fancybox.pack.js',
                        'js/jquery.form.js',
                        'js/gazelli-house.js'
                    ]
                }
            }
        }
	});
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.registerTask('default',['compass:dist', 'uglify', 'watch' ]);
}
