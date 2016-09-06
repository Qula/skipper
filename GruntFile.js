module.exports = function(grunt){
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks("grunt-contrib-uglify");
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    grunt.initConfig({
        jshint: {
            all: ['Gruntfile.js', 'js/ajax-mail.js', 'js/gallery.js', 'js/kasy.js', 'js/script.js', 'js/view.js']
        },
        concat: {
            options: {
                separator: ';'
            },
            bootstrap: {
                src: ['bootstrap336/js/jquery-1.12.2.min.js', 'bootstrap336/js/bootstrap.min.js', 'bootstrap336/js/jquery-ui.min.js'],
                dest: 'js/bootstrap.js'
            },
            sklep: {
                src: ['js/jquery.scrollTo.min.js', 'js/jquery.flip.min.js', 'js/view.js', 'js/ajax-mail.js' ],
                dest: 'js/sklep.js'
            },
            zagle: {
                src: ['js/script.js', 'js/jquery.magnific-popup.min.js', 'js/gallery.js'],
                dest: 'js/zagle.js'
            }
        },
        uglify: {
            sklep: {
                files:{
                    "js/sklep.min.js":"js/sklep.js"
                }
            },
            kasy: {
                files:{
                    "js/kasy.min.js":"js/kasy.js"
                }
            },
            zagle: {
                files:{
                    "js/zagle.min.js":"js/zagle.js"
                }
            },
            bootstrap: {
                files:{
                    "js/bootstrap.min.js":"js/bootstrap.js"
                }
            }
        },
        cssmin: {
            target: {
                files: {
                    'css/styles.min.css': ['css/magnific-popup.css', 'css/navbar.css', 'css/stylesheet.css','trumbowyg/trumbowyg.min.css']
                }
            }
        }
    });

    grunt.registerTask("default", function(){
        console.log("hello");
    });
};