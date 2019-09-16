<?php

namespace App\Http\Controllers\Artists;
//require_once 'vendor/autoload.php';


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;


class ArtistController extends Controller
{
    
    
    /***public function __construct()
    {
        //$this->middleware('guest')->except('destroy');
    }*/

	public function getArtist($name)
    {
		$name = trim($name, "{}");
		$artist = DB::table('artists')
		                  ->select('name', 'types', 'borns', 'firstrelease', 'firstalbum', 'albums', 'songs', 'links') 
						  ->where('name', '=', $name)
						  ->get();
						  
		$songs = explode(", ", $artist[0]->songs);
		//$artists = get_object_vars($artists);
		/***foreach ($artists as $artist) {
            $artist = $artist->name;
        }*/
        
        return view('artists.artist', 
		        ['name' => $name, 
				 'artist' => json_encode($artist),
                 'type' => $artist[0]->types,
                 'album' => $artist[0]->albums,				 
				 'song1' => $songs[0], 
				 'song2' => $songs[1], 
				 'song3' => $songs[2], 
				 'link' => $artist[0]->links ]);
        
         //return redirect('/');
        
    }
	
}
