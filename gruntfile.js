module.exports = function (grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON("package.json"),

    // jshint: {
    //   options: {
    //     curly: true,
    //     eqnull: true,
    //     eqeqeq: true,
    //     undef: true,
    //     globals: {
    //       jQuery: true,
    //     },
    //   },
    //   dist: {
    //     app: ["app/**/*.js"],
    //     dest: "dist/<%= pkg.name %>.js",
    //   },
    // },

  // compass - первая задача - собираем стили.
    compass: {
        dev: {
            options: {
                outputStyle:'compressed',
                cssDir: 'css',
                // watch : true,
                watch : false,
            }
        }
    },
  // concat – вторая задача. Собираем скрипты в один файл 
    concat: {
      options: {
        separator: ';'
      }
    },
  //и сливает в один файл app.js
    all: {
      dest: 'js/app.js',
      src: [
        'js/**/*.js'
      ],
    },
  //uglify – третья задача. Минификация файла app.js.
    uglify: {
      my_target: {
        files: { 'js/app.min.js': ['js/app.js'] } 
      }
    }    
  });

  //Загрузка модулей
  grunt.loadNpmTasks('grunt-contrib-compass'); 
  grunt.loadNpmTasks('grunt-contrib-concat'); 
  grunt.loadNpmTasks('grunt-contrib-uglify');
 // Завершаем всё
  grunt.registerTask('default', ['jshint', 'concat', 'uglify']);
};
