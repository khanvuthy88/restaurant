module.exports = function(grunt) {

  grunt.initConfig({
    jshint: {
      files: ['Gruntfile.js', 'src/**/*.js', 'test/**/*.js'],
      options: {
        globals: {
          jQuery: true
        }
      }
    },
    watch: {
      files: ['<%= jshint.files %>'],
      tasks: ['jshint']
    },
    sass: {
      dist: {
        files: {
          'assets/css/app.css': 'sass/style.scss',
        }
      }
    },
    cssmin: {
      minify: {
        src: 'assets/css/app.css',
        dest: 'assets/css/app.min.css'
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  grunt.registerTask('default', ['jshint','watch','sass','cssmin']);

};