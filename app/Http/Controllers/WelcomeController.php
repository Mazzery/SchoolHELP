<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use App\Models\RequestData;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {

        // cancel action

        // if(request('cancel')) {
        //     Offer::find(request('cancel'))->update(['status' => 'canceled']);
        // }

        // submit form offer
        if(request()->isMethod('POST')) {
            $request_data = RequestData::find(session('offer'));
            if(!$request_data) return redirect()->back()->with('error','No request found');

            request()->validate([
                'remarks' => 'required'
            ]);

            $request_data->offer()->create([
                'user_id' => auth()->id(),
                'remarks' => request('remarks'),
                'status' => 'pending'
            ]);
            session()->forget('offer');
            return redirect()->route('welcome')->with('success','Offer sent successfully');
        }

        $request = RequestData::with('school')->get();

        // sort by school city , school name , date posted
        if(!empty(request('order_by'))) {
            $request = RequestData::all()->map(function($item) {
                $item->school_city = $item->school->school_city;
                $item->school_name = $item->school->school_name;
                return $item;
            })->sortBy(request('order_by'));
            $request = $request->values()->all();
            return view('request-card',compact('request'));
        }

        // clear session offer
        if(request('clear_offer')) {
            session()->forget('offer');
        }

        // make offer clicked
        if(!empty(request('offer'))) {
            session()->put('offer',request('offer'));
            if(!auth()->check())
                return redirect()->route('login');

        }

        if(request('id'))
            return view('request-form',['data' => RequestData::findOrFail(request('id'))]);

        // order by school city , school name , date posted
        $sort_list = [
            'school_city' => 'School City',
            'school_name' => 'School Name',
            'created_at' => 'Date Posted'
        ];
        return view('welcome', compact('request','sort_list'));
    }
}