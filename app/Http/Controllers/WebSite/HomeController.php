<?php

namespace App\Http\Controllers\WebSite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Shipping;
use App\Review;

class HomeController extends Controller
{
    public function home()
    {
    	return view('front.home');
    }

    public function about()
    {
    	return view('front.about');
    }

    public function tracking()
    {
    	return view('front.tracking');
    }

    public function contact()
    {
    	return view('front.contact');
    }

    public function track(Request $request)
    {
        
        $search = Shipping::query();

        if ($request->tracking_id)
        {
            $search->where('trcaking_id', $request->tracking_id);
        }

        if ($request->Goods)
        {
            $search->where('track_your_goods', $request->Goods);
        }

        if ($request->Transfer)
        {
            $search->where('track_your_transfer', $request->Transfer);
        }

        if ($request->Region)
        {
            $search->where('track_your_transfer_by_region_lock_code', $request->Region);
        }

        $search = $search->get();

        return view('front.track', compact('search'));
    }

    public function review(Request $request)
    {
        $review = new Review;
        $review->name = $request->name;
        $review->email = $request->email;
        $review->comment = $request->reviews;
        $review->ratings = $request->ratings;
        $review->save();
        return redirect()->back()->with('flash_message_success','Thank you for review us');
    }
}
