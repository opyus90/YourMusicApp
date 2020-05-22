<?php

namespace App\Http\Controllers\Newsletters;

use App\Http\Controllers\Controller;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use \Swift_SmtpTransport,\Swift_Mailer,\Swift_Message;

class NewslettersController extends Controller
{
   

    /**
     * Where to redirect after subscribing.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
       
    }*/
    
	
	/*** Send confirmation subscribing */
	public function getNewsletters()
    {
        //$data = $request->all();
		// Create the Transport
        $transport = (new Swift_SmtpTransport('ssl://smtp.gmail.com', 465))
                   ->setUsername('yourmusic.service@gmail.com')
                   ->setPassword('')
        ;

        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);
		
		
		if ( isset($_POST["email"]) && !empty($_POST["email"]) ? $_POST["email"] : false ) {
        //if ( false ) {    
            $email = $_POST["email"];	
            $created = date("Y-m-d H:i:s");
			$updated = date("Y-m-d H:i:s");
			
            DB::table('newsletters')->insert([
                  ['email' => $email, 'created_at' => $created, 'updated_at' => $updated]
            ]);			
			// Create a message
            $message = (new Swift_Message('Subscription to Your Music Newsletters'))
                     ->setFrom(['yourmusic.service@gmail.com' => 'Your Music'])
                     ->setTo([$email])
                     ->setBody('<p>Welcome to Your Music!</p></br><p>You are subscribed to the newsletters with this email: <strong>'.$email.'</strong></p>', 'text/html')
            ;

            // Send the message
            $result = $mailer->send($message);
			
			return redirect($this->redirectTo);
		} else {
			return view('errors.min_500');
			
		}
    }
}
