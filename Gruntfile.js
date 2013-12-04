module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        uglify: {
            options: {
                banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
            },
            build: {
                src: 'src/<%= pkg.name %>.js',
                dest: 'build/<%= pkg.name %>.min.js'
            }
        },
        less: {
            development: {
                options: {
                    paths: ['assets/css']
                },
                files: {
                    "assets/css/core.css": "assets/css/less/core.less",
                    "assets/css/core-responsive.css": "assets/css/less/core-responsive.less",
                    "assets/css/prototype.css": "assets/css/less/prototype.less"
                }
            },
//            production: {
//                options: {
//                    paths: ['assets/css'],
//                    compress: true
//                },
//                files: {
//                    "assets/css/core.min.css": "assets/css/less/core.less",
//                    "assets/css/core-responsive.min.css": "assets/css/less/core-responsive.less",
//                    "assets/css/prototype.min.css": "assets/css/less/prototype.less"
//                }
//            }
        },
        watch: {
            less: {
                files: ['assets/css/less/**/*.less'],
                tasks: ['less']
            }
        }
    });

    // Load the plugins.
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Default task(s).
    grunt.registerTask('default', ['uglify', 'less', 'watch']);

};