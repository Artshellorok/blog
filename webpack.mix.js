const mix = require('laravel-mix');
/* const glob = require("glob");
class CompileJs{
    webpackPlugins(){
        return new class {
            apply(compiler)
            {  
                compiler.plugin("done", () => {
                    glob("resources\js\**\*.js", function (er, files) {
                        files.forEach((file) =>{
                            console.log(file);
                        });
                    });
                });
            }
        }()
    }
}

mix.extend('compilejs', new CompileJs());
*/
//console.log(mix.esketit);
mix.sass('resources/sass/app.scss', 'public/css')
    .js('resources/js/app.js', 'public/js')
    .js('resources/js/index.js', 'public/js')
    .js('resources/js/admin.add.js', 'public/js/admin.add.js')
    .sass('resources/sass/admin.scss', 'public/css');
    
    