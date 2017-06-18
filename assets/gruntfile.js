module.exports = function( grunt ) {
  'use strict';

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    watch: {
      sass: {
        files: ['./css/scss/*.scss', './css/scss/*/*.scss'],
        tasks: ['sass:dev', 'autoprefixer:dev'],
      },
      js: {
        files: ['./js/*/*.js'],
        tasks: ['uglify'],
      }
    },

    sass: {
      dev: {
        options: {
          outputStyle: 'expanded',
          sourceMap: true
        },
        files: {
          './css/style.css': './css/scss/style.scss'
        }
      },
      dist: {
        options: {
          outputStyle: 'compressed',
          sourceMap: false
        },
        files: {
          './css/style.min.css': './css/scss/style.scss'
        }
      }
    },

    uglify: {
      lib: {
        files: [{
          cwd: './',
          src: [
            'js/lib/*.js',
            '!js/lib/modernizr-3.5.0.min.js'
          ],
          dest: './js/lib/built/lib.min.js'
        }],
        options: {
          sourceMap: true
        }
      },
      app: {
        files: [{
          cwd: './',
          src: 'js/app/_*.js',
          dest: './js/app/built/app.min.js'
        }],
        options: {
          sourceMap: true
        }
      }
    },

    autoprefixer: {
      dev: {
        options: {
          map: true,
          browsers: ['ie >= 7', '> 0.1%']
        },
        src: './css/style.css',
        dest: './css/style.css'
      },
      dist: {
        options: {
          map: false,
          browsers: ['ie >= 7', '> 0.1%']
        },
        src: './css/style.min.css',
        dest: './css/style.min.css'
      }
    },

    browserSync: {
      bsFiles: {
        src: [
          './css/style.css',
          './js/*/*/*.js'
        ]
      },
      options: {
        watchTask: true,
        proxy: 'http://prjctrse.dev',
        open: false
      }
    }

  });

  grunt.loadNpmTasks( 'grunt-contrib-watch' );
  grunt.loadNpmTasks( 'grunt-sass' );
  grunt.loadNpmTasks( 'grunt-autoprefixer' );
  grunt.loadNpmTasks( 'grunt-browser-sync' );
  grunt.loadNpmTasks( 'grunt-contrib-uglify' );

  grunt.registerTask( 'default', [
    'browserSync', 'watch'
  ]);

  grunt.registerTask( 'build', [
    'sass:dist', 
    'autoprefixer:dist', 
    'uglify'
  ]);
}