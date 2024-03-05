<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Shipping;
use App\User;
use Auth;


class ShippingController extends Controller
{
    public function index()
    {
    	$shippings = Shipping::orderBy('id', 'DESC')->get();
    	return view('admin.shipping.index', compact('shippings'));
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
        $shipping->trcaking_id = $request->trcaking_id;
        $shipping->track_your_goods = $request->track_your_goods;
        $shipping->track_your_transfer = $request->track_your_transfer;
        $shipping->track_your_transfer_by_region_lock_code = $request->track_your_transfer_by_region_lock_code;
        $shipping->shipping_charges = $request->shipping_charges;
        $shipping->status = $request->status;
    	$shipping->position = $request->position;
    	$shipping->save();

        $userInfo = User::find($shipping->user_id);
        $details = [
                'status' => $request->status
            ];
           
        // Mail::to('arhamkhaninnocent@gmail.com')->send(new \App\Mail\StatusUpdate($details));
        Mail::to($userInfo->email)->send(new \App\Mail\StatusUpdate($details));
    	return redirect()->back()->with('flash_message_success', 'Shipping Update Successfully');

    }

    public function delete($id)
    {
    	// dd($request->all());
    	$shipping = Shipping::find($id)->delete();
    	return redirect()->back()->with('flash_message_error', 'Shipping Delete Successfully');

    }


}
