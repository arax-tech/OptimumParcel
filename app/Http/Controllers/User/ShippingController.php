<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Shipping;
use App\User;
use Auth;


class ShippingController extends Controller
{
    public function index()
    {
    	$shippings = Shipping::where('user_id', auth::user()->id)->orderBy('id', 'DESC')->get();
    	return view('user.shipping.index', compact('shippings'));
    }

    public function store(Request $request)
    {
    	// dd($request->all());
    	$shipping = new Shipping();
    	$shipping->user_id = auth::user()->id;
    	$shipping->name = $request->name;
    	$shipping->email = $request->email;
    	$shipping->phone = $request->phone;
    	$shipping->height = $request->height;
    	$shipping->width = $request->width;
    	$shipping->depth = $request->depth;
    	$shipping->weight = $request->weight;
    	$shipping->from_location = $request->from_location;
    	$shipping->to_location = $request->to_location;
    	$shipping->status = 'Pending';
    	$shipping->save();
    	return redirect()->back()->with('flash_message_success', 'Shipping Created Successfully');

    }

    public function update(Request $request, $id)
    {
    	// dd($request->all());
    	$shipping = Shipping::find($id);
    	$shipping->name = $request->name;
    	$shipping->email = $request->email;
    	$shipping->phone = $request->phone;
    	$shipping->height = $request->height;
    	$shipping->width = $request->width;
    	$shipping->depth = $request->depth;
    	$shipping->weight = $request->weight;
    	$shipping->from_location = $request->from_location;
    	$shipping->to_location = $request->to_location;
    	$shipping->save();
    	return redirect()->back()->with('flash_message_success', 'Shipping Update Successfully');

    }

    public function delete($id)
    {
    	// dd($request->all());
    	$shipping = Shipping::find($id)->delete();
    	return redirect()->back()->with('flash_message_error', 'Shipping Delete Successfully');

    }


}
