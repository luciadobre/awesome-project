<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {

        Task::create($request->all());

        return redirect()->route('welcome');
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {

        $task->update($request->all());

        return redirect()->route('welcome');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('welcome');
    }
}
