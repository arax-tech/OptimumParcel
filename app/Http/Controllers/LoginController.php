<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\User;
use Auth;

class LoginController extends Controller
{
    public function index(Request $request)
    {
    	if ($request->isMethod("POST"))
    	{
    		// dd($request->all());
            
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => "Admin"]))
            {
                return redirect('/admin/dashboard');
            }
            elseif (Auth::attempt(['email'=>$request->email,'password'=>$request->password,'role'=>'User','is_verified'=>'0']))
            {
                Auth::logout();
                return redirect()->back()->with('flash_message_error','Please Verifiy Your Email Address & Try again...');
            }
            else if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => "User", 'is_verified'=>'1']))
            {
                return redirect('/user/dashboard');
            }

            else
            {
                return redirect()->back()->with('flash_message_error', 'Invalid Email OR Password, Please try Again...');
            }    		
    	}

        

    	return view('login');
    }

    public function register(Request $request)
    {
        if ($request->isMethod('post'))
        {
            // dd($request->all());

            /*Check Email*/
            $user_count = User::where('email',$request->email)->count();
            if ($user_count>0)
            {
                return redirect()->back()->with('flash_message_error','Email is Already Taken Please Use Another Email...');
            }

            $user = New User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role = 'User';
            $user->verification_code = sha1(time());
            $user->is_verified = 0;
            $user->save();
            auth::logout();
            // Auth::Login($user, true);
            $details = [
                    'VerificationCode' => $user->verification_code,
                ];
               
            Mail::to($user->email)->send(new \App\Mail\VerficationEmail($details));
            return redirect('/login')->with('flash_message_success','Registration successful  verify your email  to unlock your account...');
            // return redirect('/login')->with('flash_message_success','Registration Successful');
        }
        return view('register');
    }  



    public function VerifyUser (Request $request)
    {
        $verification_code = $request->code;
        $user = User::where(['verification_code' => $verification_code])->first();
        if ($user != null)
        {
            $user->email_verified_at = time();
            $user->is_verified = 1;
            $user->save();
            auth::login($user, true);
            return redirect('user/dashboard')->with('flash_message_success','Email Verified Successfully');
        }
        else
        {
        return redirect('/register')->with('flash_message_error','Invalid Verification Code');

        }

    }

    
}
