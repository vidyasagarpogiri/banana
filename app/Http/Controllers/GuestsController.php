<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;

class GuestsController extends Controller
{
    public function index()
    {
        return view('admin.guests');
    }
    
    public function add()
    {
        return view('admin.guests_add');
    }
    
    public function addPost(Request $request)
    {
        $email = $request->get("email");
        
        if(!$ex = Guest::where('email', $email)->first()) {
            
            //ADD PLUS ONE FIRST 
            if($request->get("plus_one") == "on"){
                $plus_one = new Guest();
                $plus_one->name = $request->get("name") . "'s Plus One";
                $plus_one->email = $request->get("email");
                $plus_one->cell = $request->get("cell");
                if($request->get("rsvp") == "on"){$plus_one->invited = "1";$plus_one->rsvp = "yes";}
                $plus_one->save();
            }
            
            $admin = new Guest();
            $admin->name = $request->get("name");
            $admin->surname = $request->get("surname");
            $admin->cell = $request->get("cell");
            $admin->email = $request->get("email");
            if($request->get("plus_one") == "on"){$admin->plus_one = "yes";}
            $admin->plus_one_id = $plus_one->id;
            if($request->get("rsvp") == "on"){$admin->invited = "1";$admin->rsvp = "yes";}
            $admin->accommodation = "";
            $admin->dietary = "";
            $admin->save();
            
            
        } else {
            return redirect('/guests_add')->with(['error' => 'Guest could not be added. The email you entered already exists in your guest list. You may already have invited this person.']);
        }
        
        return redirect('/guests_invited');
    }
    
    public function addPostCouple(Request $request)
    {
        $email = $request->get("email");
        
        if(!$ex = Guest::where('email', $email)->first()) {
            
            //ADD PLUS ONE FIRST 
            $plus_one = new Guest();
            $plus_one->name = $request->get("name")[0];
            $plus_one->surname = $request->get("surname")[0];
            $plus_one->cell = $request->get("cell");
            $plus_one->email = $request->get("email");
            if($request->get("rsvp") == "on"){$plus_one->invited = "1";$plus_one->rsvp = "yes";}
            $plus_one->plus_one = "no";
            $plus_one->save();
            
            $admin = new Guest();
            $admin->name = $request->get("name")[1];
            $admin->surname = $request->get("surname")[1];
            $admin->cell = $request->get("cell");
            $admin->email = $request->get("email");
            $admin->plus_one = "no";
            $admin->plus_one_id = $plus_one->id;
            if($request->get("rsvp") == "on"){$admin->invited = "1";$admin->rsvp = "yes";}
            $admin->accommodation = "";
            $admin->dietary = "";
            $admin->save();
            
        } else {
            return redirect('/guests_add')->with(['error' => 'Guest could not be added. The email you entered already exists in your guest list. You may already have invited this person.']);
        }
        
        return redirect('/guests_invited');
    }
    
    public function all()
    {
        return view('admin.guests_all');
    }
    
    public function allJSON()
    {
        $all = Guest::all();
        return response()->json($all);
    }
    
    public function invited()
    {
        return view('admin.guests_invited');
    }
    
    public function invitedJSON()
    {
        $all = Guest::where('invited', '0')->orderBy('created_at', 'DESC')->get();
        return response()->json($all);
    }
    
    public function rsvp()
    {
        return view('admin.guests_rsvp');
    }
    
    public function rsvpJSON()
    {
        $all = Guest::where('invited', '1')->where('rsvp', 'yes')->get();
        return response()->json($all);
    }
    
    public function pending()
    {
        return view('admin.guests_pending');
    }
    
    public function pendingJSON()
    {
        $all = Guest::where('invited', '1')->where('rsvp', 'no')->orderBy('created_at', 'DESC')->get();
        return response()->json($all);
    }
    
    public function guestsSend(Request $request)
    {
        //SEND INVITED EMAIL
        $email = $request->get("email");
        
        //COUPLE
        $find = Guest::where('email', $email)->whereNotNull('plus_one_id')->where('plus_one', 'no')->first();
        
        //GUEST + PLUS ONE
        $find = Guest::where('email', $email)->whereNotNull('plus_one_id')->where('plus_one', 'yes')->first();
        
        //GUEST no PLUS ONE
        $find = Guest::where('email', $email)->whereNull('plus_one_id')->where('plus_one', 'no')->first();
        
        var_dump($request->get('email'));exit;
    }
}
