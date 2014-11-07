module.exports = function(grunt) {

    // 1. All configuration goes here 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
		
		uglify: {
			options: {
				sourceMap: true
			},
			build: {
				files: {
					'js/production.min.js': ['js/vendor/*.js', 'js/main.js'],
				}
			}
		},
		cssmin: {
			options: {
				sourceMap: true
			},
			build: {
				files: {
					'css/min.css': ['css/dev/*.css'],
				}
			}
		},
    });

    // 3. Where we tell Grunt we plan to use this plug-in.
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-cssmin');

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['uglify', 'cssmin']);

};