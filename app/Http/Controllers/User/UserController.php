<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Shipping;
use App\User;
use Auth;
class UserController extends Controller
{
    public function dashboard()
    {
    	$shipping = Shipping::where('user_id', auth::user()->id)->count();
    	return view('user.dashboard', compact('shipping'));
    }

    public function profile(Request $request)
    {
    	if ($request->isMethod('POST'))
    	{

            // dd($request->all());
    		$id = Auth::User()->id;

    		$user = User::find($id);
            $user->name = $request->name;
    		$user->email = $request->email;

            


            if (!empty($request->password))
            {
                $user->password = Hash::make($request->password);
            }

     


            if ($request->hasFile('profile')) 
            {
                $file1 = $request->profile->getClientOriginalName();
                $request->profile->storeAs('/user/profile/', $file1, 'my_files');
                $user->image = $file1;
            }
            else
            {
                $user->image = $user->image;
            }


    		
    		$user->save();
    		return redirect()->back()->with('flash_message_success', 'Profile Update Successfully');

    	}
    	return view('user.profile');
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/login')->with('flash_message_success', 'Logout Successfully...');
    }
}
