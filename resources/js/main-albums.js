/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


const $ = require('jquery');

import 'jquery/dist/jquery.min.js';

import '../styles/bootstrap-4.1.2x/popper.js';
import '../styles/bootstrap-4.1.2x/bootstrap.min.js';
import '../plugins/greensock/TweenMax.min.js';
import '../plugins/greensock/TimelineMax.min.js';
import '../plugins/greensock/ScrollToPlugin.min.js';
import '../plugins/progressbar/progressbar.min.js';
import '../plugins/parallax-js-master/parallax.min.js';
import '../plugins/scrollTo/jquery.scrollTo.min.js';
import './artists.js';


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/***const app = new Vue({
    el: '#app',
});*/

//var albums = JSON.parse( $(".artists_container").attr("data-albums") );


/***
function allAlbums(){	
    var count = 0;
    $.each(albums, function(key, value) {  //
	        console.log(JSON.stringify(albums));
	        count++;
			$(".artist"+count+" .artist_image").replaceWith('<div class="artist_image"><img src="images/albums/'+String(value["name"])+'.jpg" alt=""></div>');
	        $(".artist"+count+" .artist_name").replaceWith('<div class="artist_name"><h1><a href="/album_{'+String(value["name"])+'}">'+String(value["name"])+'</a></h1></div>');
							 
							 
					         	
    });
}*/

$(document).ready(function() {
	
	console.log("hello albums");
	
	$(".letters a").on('click',function(e) {
		e.preventDefault();
        var val = $('.search-title').val();
		var letter = $(this).text();
		$('.search-title').val(val+letter);
    });
	
	$(".search-title").on('keypress',function(e) {
        if( (e.which == 13) && ($('.search-title').val().length > 0) ) {
		   var val = $('.search-title').val();
		   e.preventDefault();
		   $('.search-title').val('');  
		   window.location.href = "/albums_search_"+val;
        }
    });
	
	$(".search_button").on('click',function(e) {
        if(  $('.search-title').val().length > 0  ) {
		   var val = $('.search-title').val();
		   e.preventDefault();
		   $('.search-title').val('');  
		   window.location.href = "/albums_search_"+val;
        }
    });
	
	//allAlbums();
	/***setTimeout(function(){ $('.jp-seek-bar').attr('style', 'width: 100%');}, 3000);
	$(".jp-play").click(function(){
		$('.jp-play').attr('st', 'he');
        setTimeout(function(){ $('.jp-seek-bar').attr('style', 'width: 100%');}, 2000);
		$('.jp-seek-bar').attr('style', 'width: 100%');
    });*/
	
	//$('.jp-seek-bar').attr('st', 'hello');
	
	
	 
	 
});