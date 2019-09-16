<?php

namespace App\Http\Controllers\Artists;
//require_once 'vendor/autoload.php';


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;


class ArtistsController extends Controller
{
    
    
    /***public function __construct()
    {
        //$this->middleware('guest')->except('destroy');
    }*/

	public function getArtists()
    {
		$songs = [];
		$artists = [];
		$data = DB::table('artists')->select('name', 'songs')->get();
		
		foreach ($data as $artist) {
			$song = explode(", ", $artist->songs);
            array_push($songs, $song[0]);
			array_push($artists, $artist->name);
        }
		
		

        return view('artists.artists', ['artists' => $artists, 'songs' => $songs ]);      
        
    }
	
	public function searchArtists($str)
    {
		
		$songs = [];
		$artists = [];
		$str = trim($str, "{}");
		
		$data = DB::table('artists')->select('name', 'songs')->get();

		foreach ($data as $artist) {
			if ( strpos(strtolower($artist->name), strtolower($str)) !== false ) {
			    $song = explode(", ", $artist->songs);
                array_push($songs, $song[0]);
			    array_push($artists, $artist->name);
			}
        }
		
        return view('artists.artists', [ 'artists' => $artists, 'songs' => $songs ]);
        
    }
	
}
