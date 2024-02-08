<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\activities;
use App\Models\innovations;
use App\Models\partners;
use App\Models\feedbackModell;
use App\Models\customerOrders;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeUnit\FunctionUnit;

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
      public function gallery()
    {      $innovations = innovations::all();
         return view('gallery')->with('innovations',$innovations);
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
    public function getOrders()
    {
     $orders = customerOrders::all()->where('user_id',Auth::id());
     return view('Orders')->with('orders',$orders) ;
    }
    public Function storeOrder(Request $request)
    {
     
     
       $req = new customerOrders();
        
        $req->user_id = Auth::id();
        $req->pine = $request->pine;
        $req->blue = $request->blue;
        $req->phone1 = $request->airtel;
        $req->phone2 = $request->tnm;
        $req->price = ($request->pine + $request->blue) *185;
         
        
        $req->payment = 'none';
        $req->district = $request->district;
        $req->place = $request->place;
        $req->status = 'Pending review';
        $req->save();
        
        return(redirect()->back());
     
     
       
    
    }
    public function feebackStore(Request $request){
      $req = new feedbackModell();
      $req->name = $request->name;
      $req->message = $request->feedback;
      $req->save();
      return (redirect()->back());
       
      
      
    }
}