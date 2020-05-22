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
import './custom.js';


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

//var album = JSON.parse( $(".featured").attr("data-album") );

/*function getAlbums(){
	var songs = album[0]["songs"].split(", ");
	$(".featured_list .jp_container_2 .featured_image").replaceWith('<div class="featured_image"><img src="images/albums/'+album[0]["name"]+'.jpg" alt=""></div>');
	//$(".artist_info_list").replaceWith('<div class="artist_info_list"><ul><li>Release: <span>'+album[0]["release"]+'</span></li></ul></div>');
}*/



$(document).ready(function() {
	
	console.log("hello");
	//getAlbums();
	
	
	
	/***$(".search-title").on('keypress',function(ek) {
        if( (ek.which == 13) && ($('.search-title').val().length > 0) ) {
		   var val = $('.search-title').val();
		   var urlt = $('.dropdown li a').eq(0).attr('href');
		   urlt = urlt.replace('All', 'search-'+val);
		   ek.preventDefault();
		   $('.search-title').val('');  
		   $('.search-wrap').removeClass('active');
		   window.location.href = urlt;
        }
    });*/
	
	
	 
	 
});