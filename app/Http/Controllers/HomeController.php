<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Goutte\Client;

use Symfony\Component\DomCrawler\Crawler;
use Exception;

class HomeController extends Controller
{
	private $client;
	public $images = [];
	public $dates = [];
	public $titles = [];
	public $descriptions = [];
	public $urls = [];
	public $count = 15;
	
    public function __construct()
    {

    }
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function getHome()
    {
		
		
		$client = $client2 = new Client([
                   'timeout'   => 10,
                   'verify'    => false
                  ]);
		
        $crawler = $client->request('GET', 'https://www.billboard.com/news');
		
		$album = DB::table('albums')
		                  ->select('name', 'songs') 
						  ->get();
						  
		$songs = explode(", ", $album[0]->songs);

		$crawler->filter('.channel-article .image-container img, 
		                  .channel-article .post-info .post-date,
		                  .channel-article .content-container .content-title a')->each(function ($node) {
          		  
		  if( $this->count == 0) return;
		  else {
		    if( $node->attr('src') ) {
				array_push($this->images, $node->attr('src'));
		    } else if ( $node->attr('class') == "post-date" ) {
				$date=date_create($node->text());
				array_push($this->dates, date_format($date, "M d, Y"));
		    } 
			else {

				 $client2 = new Client([
                   'timeout'   => 10,
                   'verify'    => false
                 ]);
                 $crawler2 = $client2->request('GET', "https://www.billboard.com".$node->attr('href'));
				 if ( !empty($crawler2) ) {
				   $node2 = $crawler2->filter('.article__body p');
				   array_push($this->descriptions, substr($node2->text(), 0, 225). '...');
                 }
				 array_push($this->titles, $node->text());
				 array_push($this->urls, $node->attr('href'));

			}
			$this->count--;
		  }
        });
		
		return view('welcome', ['album' => json_encode($album),
		                        'songs' => $songs,
		                        'images' => $this->images, 
		                        'dates' => $this->dates, 
								'descriptions' => $this->descriptions, 
								'titles' => $this->titles, 
								'urls' => $this->urls ]);
    }
}
