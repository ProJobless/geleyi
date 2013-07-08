/*jshint camelcase: false */
/*global module:false */
module.exports = function (grunt) {

    grunt.initConfig({

        neuter: {
            options: {
                includeSourceURL: false
            },
            'public/build/application.js': 'public/app/app.js'
        },

        /**
         * compass to compile css files
         */

        compass:{
          dist:{
              options:{
                  config: 'public/dependencies/config.rb',
                  sassDir: 'public/dependencies/sass',
                  imagesDir: 'public/build/images',
                  fontsDir: 'public/build/fonts',
                  cssDir: 'public/build/css',
                  environment: 'production' //obviously change in production
              }
          }
        },

        /*
         Watch files for changes.

         Changes in dependencies/ember.js or application javascript
         will trigger the neuter task.

         Changes to any templates will trigger the ember_templates
         task (which writes a new compiled file into dependencies/)
         and then neuter all the files again.
         */
        watch: {
            application_code: {
                files: ['public/dependencies/ember.js','public/app/**/*.js'],
                tasks: ['neuter']
            },
            handlebars_templates: {
                files: ['public/app/**/*.hbs'],
                tasks: ['ember_templates', 'neuter']
            },
            style:{
                files: ['public/dependencies/sass/**/*.scss'],
                tasks:['compass']
            }
        },

        /*
         Runs all .html files found in the test/ directory through PhantomJS.
         Prints the report in your terminal.
         */
        qunit: {
            all: ['public/test/**/*.html']
        },

        /*
         Reads the projects .jshintrc file and applies coding
         standards. Doesn't lint the dependencies or test
         support files.
         */
        jshint: {
            all: ['Gruntfile.js', 'public/app/**/*.js', 'public/test/**/*.js', '!public/dependencies/*.*', '!public/test/support/*.*'],
            options: {
                jshintrc: '.jshintrc'
            }
        },

        /*
         Finds Handlebars templates and precompiles them into functions.
         The provides two benefits:

         1. Templates render much faster
         2. We only need to include the handlebars-runtime microlib
         and not the entire Handlebars parser.

         Files will be written out to dependencies/compiled/templates.js
         which is required within the project files so will end up
         as part of our application.

         The compiled result will be stored in
         Ember.TEMPLATES keyed on their file path (with the 'app/templates' stripped)
         */
        emberTemplates: {
            options: {
                templateName: function (sourceFile) {
                    return sourceFile.replace(/public\/app\/templates\//, '');
                }
            },
            'public/dependencies/compiled/templates.js': ["public/app/templates/*.hbs"]
        },

        /*
         Find all the <whatever>_test.js files in the test folder.
         These will get loaded via script tags when the task is run.
         This gets run as part of the larger 'test' task registered
         below.
         */
        build_test_runner_file: {
            all: ['test/**/*_test.js']
        }
    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-compass');


    /*
     Default task. Compiles templates, neuters application code, and begins
     watching for changes.
     */
    grunt.registerTask('default', ['compass','emberTemplates', 'neuter', 'watch']);
};