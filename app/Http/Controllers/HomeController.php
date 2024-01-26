<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\activities;
use App\Models\innovations;
use App\Models\partners;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $activities = activities::all();
        return view('home')->with('activities',$activities);
    }
    public function about()
    {    
         return view('about');
    }
      public function innovation()
    {      $innovations = innovations::all();
         return view('innovation')->with('innovations',$innovations);
    }
      public function request(Request $request)
    {    
     $req = new partners();
        
        $req->name = $request->name;
        $req->email = $request->email;
        $req->phone = $request->phone;
        $req->company = $request->company;
        $req->about = $request->about;
        
        $req->image = request('image')->store('uploads','public');
        $req->save();
            
         return redirect()->back();
    }
}