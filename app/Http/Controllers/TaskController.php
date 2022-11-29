<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
 
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
      //  $tasks = Task::where('user_id', auth()->id() )->get();
        $tasks = Task::all() ;
        return  view('tasks.index' , ['tasks' => $tasks]) ;
    }

    public function create(){
        return view('tasks.create') ;
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|string' ,
            'body' => 'string' ,
        ]);
        $data['user_id'] = auth()->user()->id ;
        Task::create($data) ;
        return redirect()->route('tasks.index')->with('status' , 'task created successfully') ;
    }

    public function destroy(Task $task){
        $this->authorize('destroy' , $task) ;
        $task->delete() ;
        return redirect()->route('tasks.index')->with('status' , 'Task Deleted') ;
    }
    
}
