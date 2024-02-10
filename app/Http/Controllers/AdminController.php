<?php

namespace App\Http\Controllers;

use App\Models\activities;
use App\Models\innovations;
use Illuminate\Http\Request; 


class AdminController extends Controller
{
      public function __construct()
    {
       $this->middleware('auth');
      // $this->middleware('verified');
    }
    public function index()
    {   $innovations = innovations::all();
         $activities = activities::all();
        return view('admin.home')->with('innovations',$innovations)->with('activities',$activities);
    }
    public function innovPosts()
    {   $innovations = innovations::all();
        return view('admin.innovPosts')->with('innovations',$innovations);
    }
    public function activPosts()
    {
         $activities = activities::all();
        return view('admin.activPosts')->with('activities',$activities);
    }

    public function activity()
    {     
         return view('admin.addActiv');
    }
    
    public function activAdd(Request $request)
    {
         
          $activity = new activities();
        
        $activity->title = $request->title;
        $activity->caption = $request->caption;
        $activity->description = $request->description;
        $activity->image = request('image')->store('uploads','public');
        $activity->save();
        
        
        return redirect()->back();
        
        
         
        
    }
     public function activityDel($id)
    {
        $post = activities::find($id);
        if(isset($post->path)){
            File::delete($post->path);
        }
        $post->delete();
        return redirect()->back();
                
        
    }
     public function innovDel($id)
    {
        $post = innovations::find($id);
        if(isset($post->path)){
            File::delete($post->path);
        }
        $post->delete();
        return redirect()->back();
                
        
    }
    
    public function innovAdd(Request $request)
    {

       $innov = new innovations();
        
    
        $innov->image = request('image')->store('uploads','public');
        $innov->innovator = $request->innovator;
      
        $innov->save();
        
        
        return redirect()->back();
    }
    
    public function innovation()
    {
        return view('admin.addInnov');
    }
    public function help()
    {
        return view('admin.help');
    }
    public function partners()
    {
        return view('admin.partners');
    }
    
   
}