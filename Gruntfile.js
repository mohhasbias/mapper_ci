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
			files: [
				'application/views/*',
				'application/models/*',
				'application/controllers/*',
				'assets/js',
				'assets/css'],
			options: {
				livereload: true
			}
		}
	});

	grunt.registerTask('phpwatch', ['php:watch', 'watch']);
	grunt.registerTask('default', ['phpwatch']);
};
