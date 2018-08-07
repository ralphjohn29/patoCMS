<?php

namespace App\Http\Controllers;
use App\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(){
        $tasks = Tasks::all();
        return view('tasks.index', compact('tasks'));
    }

    public function show(Tasks $tasks){
        //$tasks = Tasks::find($id);
        return $tasks;
        return view('tasks.show', compact('tasks'));
    }
}
