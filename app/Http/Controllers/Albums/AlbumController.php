<?php

namespace App\Http\Controllers\Albums;
//require_once 'vendor/autoload.php';


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;


class AlbumController extends Controller
{
    
    
    /***public function __construct()
    {
        //$this->middleware('guest')->except('destroy');
    }*/

	public function getAlbum($name)
    {
		$name = trim($name, "{}");
		$album = DB::table('albums')
		                  ->select('name', 'release', 'artist', 'songs', 'links') 
						  ->where('name', '=', $name)
						  ->get();
						  
		$songs = explode(", ", $album[0]->songs);
		//$artists = get_object_vars($artists);
		/***foreach ($artists as $artist) {
            $artist = $artist->name;
        }*/
        
        return view('albums.album', 
		        ['name' => $name, 
				 'album' => json_encode($album),
                 'release' => $album[0]->release,
                 'artist' => $album[0]->artist,
                 'link' => $album[0]->links,				 
				 'songs' => $songs ]);
        
         //return redirect('/');
        
    }
	
}
