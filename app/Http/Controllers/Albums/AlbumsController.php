<?php

namespace App\Http\Controllers\Albums;
//require_once 'vendor/autoload.php';


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;


class AlbumsController extends Controller
{
    
    
    /***public function __construct()
    {
        //$this->middleware('guest')->except('destroy');
    }*/

	public function getAlbums()
    {
		$songs = [];
		$artists = [];
		$albums = [];
		$data = DB::table('albums')->select('name','songs', 'artist')->get();
		//$artists = get_object_vars($artists);
		foreach ($data as $album) {
			$song = explode(", ", $album->songs);
            array_push($songs, $song[0]);
			array_push($artists, $album->artist);
			array_push($albums, $album->name);
        }
		
		

        return view('albums.albums', ['albums' => $albums, 'songs' => $songs, 'artists' => $artists ]);
        
    }
	
	public function searchAlbums($str)
    {
		
		$songs = [];
		$artists = [];
		$albums = [];
		$str = trim($str, "{}");
		
		$data = DB::table('albums')->select('name', 'songs', 'artist')->get();
		
		foreach ($data as $album) {
			if ( strpos(strtolower($album->name), strtolower($str)) !== false ) {
			    $song = explode(", ", $album->songs);
                array_push($songs, $song[0]);
			    array_push($artists, $album->artist);
			    array_push($albums, $album->name);
			}
        }
		
        return view('albums.albums', ['albums' => $albums, 'songs' => $songs, 'artists' => $artists ]);
        
    }
	
}
