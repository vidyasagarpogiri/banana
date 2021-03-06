<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Event;
use App\Todo;

class EventController extends Controller
{
    public function index(){
        $events = Event:: all();
        $colors = ['blue', 'orange', 'green', 'red', 'purple', 'default'];
        return view('admin.events.index', ['events'=>$events, 'colors'=>$colors]);
    }

    public function json(){
        $all = Event:: all();
        return response()->json($all);
    }

    public function delete(Request $request){
        $event = Event::find($request->get('id'));
        $event->delete();
        return redirect('/events');
    }

    public function add(){
        return view('admin.events.add');
    }

    public function update($title){
        $event = Event::where('title', str_replace('-', ' ', $title))->first();
        return view('admin.events.edit', ['event'=> $event]);
    }

    public function addPost(Request $request){
        $event = new Event;
        $event->title = $request->get('title');
        $event->description = $request->get('description');
        $event->date = $request->get('date');
        $event->time = $request->get('time');
        $event->location = $request->get('location');
        $event->organizer = Auth::user()->id;
        $event->organizer_name = Auth::user()->name;
        $event->type = $request->get('type');
        $event->count = 0;
        if($request->get('secret') == 'on'){ $event->secret = true;}
        else {$event->secret = false;}
        $event->save();

        return redirect('/events');
    }

    public function updatePost(Request $request){
        $event = Event::find($request->get('id'));
        $event->title = $request->get('title');
        $event->description = $request->get('description');
        $event->date = $request->get('date');
        $event->time = $request->get('time');
        $event->location = $request->get('location');
        $event->type = $request->get('type');
        if($request->get('secret') == 'on'){ $event->secret = true;}
        else {$event->secret = false;}
        $event->save();
        $title = str_replace(' ', '-', $event->title);
        return redirect('/events/'.$title);
    }

    public function view($title){
        $event = Event::where('title', str_replace('-', ' ', $title))->first();
        if($event->todo){$todos = Todo::find($event->todo);}
        else{$todos = Todo::where('user', Auth::user()->email)->get();}
        return view('admin.events.view', ['event'=> $event, 'todos'=>$todos]);
    }

    public function todo(Request $request){
        $event = Event::find($request->get('id'));
        $event->todo = $request->get('todo');
        $event->save();
        $todo = Todo::find($request->get('todo'));
        $todo->event = $request->get('id');
        $todo->save();
        $title = str_replace(' ', '-', $event->title);
        return redirect('/events/'.$title);
    }

    public function unlink(Request $request){
      $event = Event::find($request->get('id'));
      $event->todo = 0;
      $event->save();
      $todo = Todo::find($request->get('todo'));
      $todo->event = 0;
      $todo->save();
      $title = str_replace(' ', '-', $event->title);
      return redirect('/events/'.$title);
    }

    public function comments(Request $request){
      $event = Event::find($request->get('id'));
      $array = $event->comments;
      $comment = [
        'body'=> $request->get('comment'),
        'user'=> Auth::user()->id,
        'name'=> Auth::user()->name,
        'datetime'=> date('Y-m-d H:i:s'),
      ];
      array_unshift($array, $comment);
      $event->comments = $array;
      $event->save();
      $title = str_replace(' ', '-', $event->title);
      return redirect('/events/'.$title);
    }

}
