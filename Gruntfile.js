module.exports = function(grunt){
	require('load-grunt-tasks')(grunt);

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		php: {
			watch: {
				options: {
					open: true,
					hostname: '0.0.0.0'		
				}
			}
		},
		watch: {
			files: ['**/**/*'],
			options: {
				livereload: true
			}
		}
	});

	grunt.registerTask('phpwatch', ['php:watch', 'watch']);
	grunt.registerTask('default', ['phpwatch']);
};
