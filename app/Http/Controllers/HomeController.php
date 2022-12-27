<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\RequestData;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function helpAdminHome()
    {
        return view('helpadmin.home');
    }

    public function schoolAdminHome()
    {
        if(!empty(request('detail'))) {
            $detail = RequestData::findOrfail(request('detail'));
            $offer = $detail->offer()->get();
            return view('administrator.ajax.table-offer', compact('offer','detail'));
        }
        if(!empty(request('review-offer'))) {
            $detail = Offer::findOrfail(request('review-offer'));
            return view('administrator.ajax.detail-offer', compact('detail'));
        }
        if(!empty(request('offer_status')) && !empty(request('offer_id'))) {
            $offer = Offer::findOrfail(request('offer_id'));
            $offer->status = request('offer_status');
            $offer->save();
            return redirect()->route('school_admin_home')->with('success','Offer Has Been Successfully Updated');
        }
        if(!empty(request('cancel_request'))) {
            $request_data = RequestData::findOrfail(request('cancel_request'));
            $request_data->status = 'CLOSED';
            $request_data->save();
            return redirect()->route('school_admin_home')->with('success','Request Has Been Successfully Canceled');
        }
        return view('administrator.home');
    }
    public function volunteerHome()
    {
        return view('volunteer.home');
    }


}
