<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use \Swift_SmtpTransport,\Swift_Mailer,\Swift_Message;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
	
	

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function createUser(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
	
	/*** Register a User */
	public function register(Request $request)
    {
        $data = $request->all();
		// Create the Transport
        $transport = (new Swift_SmtpTransport('ssl://smtp.gmail.com', 465))
                   ->setUsername('yourmusic.service@gmail.com')
                   ->setPassword('')
        ;

        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);
		
		if( $this->validator($data) ){
			$user = $this->createUser($data);
			auth()->login($user);
			
			// Create a message
            $message = (new Swift_Message('Registration to Your Music'))
                     ->setFrom(['yourmusic.service@gmail.com' => 'Your Music'])
                     ->setTo([$data['email']])
                     ->setBody('<p>Welcome to Your Music!</p></br><p>Your account username is: <strong>'.$data['email'].'</strong></p>', 'text/html')
            ;

            // Send the message
            $result = $mailer->send($message);
			
			return redirect($this->redirectTo);
		}
    }
}
