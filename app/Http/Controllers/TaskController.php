<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks=Task::all();
        $tasks=Auth::user()->tasks;

        return view('tasks.index')->with(['tasks'=>$tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        $new_task = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'priority'=>'required',
            'deadline'=>'required'

        ]);
        $new_task['notes'] = $request->notes;
        $new_task['user_id'] = Auth::user()->id;
        Task::create($new_task);
        return redirect(route("tasks.index"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
       return view('tasks.show')->with(['task'=>$task]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('tasks.create')->with(['task'=>$task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        $task_update = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'priority'=>'required',
            'deadline'=>'required'
        ]);
        $task_update['notes'] = $request->notes;
        $task->update($task_update);
        return redirect(route("tasks.show",$task));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->back();
    }
}
