var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass(
	    	[
	    		'app.scss',
	    		'sweetalert2.scss'
	    	]
		  )
      .styles(
       		[
	       		'resources/assets/css/bootstrap.css',
            'resources/assets/css/font-awesome.css',
            'resources/assets/css/metisMenu.css',
            'resources/assets/css/sb-admin-2.css',
            'resources/assets/css/timeline.css',
	       		'public/css/app.css'
	       	],
       		'public/css/all.css', 
       		'./'
   		)
      .scripts(
       		[
            'jquery-1.12.0.js',
            'jquery-ui.js',
       			'bootstrap.js',
            'sweetalert2.js',
            'metisMenu.js',
            'sb-admin-2.js',
       			'main.js'
   			]
		  )
      .version(
       			[
       				'css/all.css',
       				'js/all.js'
   				]
			)
      .browserSync({
       		proxy: 'intranet.app',
       		open: 'external'
      });
});
