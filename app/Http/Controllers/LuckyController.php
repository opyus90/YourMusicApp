<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
//use Symfony\Component\HttpFoundation\Cookie;

class LuckyController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function show()
    {
		$request = new Request();
		/*if (View::exists('lucky.lucky')) {
            return view('lucky.lucky', ['name' => 'Osfaldo']);
		}*/
		$fg = array('slot' => 'Osfaldo', 'slon'=> 'Gregory');
		return view('child', ['slot' => 'Munich', 'fg'=> $fg, 'records' => 2]);
    }
}
