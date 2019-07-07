<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Category;
use DateTime;

class TaskController extends Controller {

    public function index()
    {
        $categories = Category::orderBy('id')->get();
        return view('tasks_index',[
          'title' => 'Listado de tareas',
          'categories' => $categories
        ]);
    }

    public function formNew()
    {
         $categories = Category::all();
        return view('form_task',[
          'title' => 'Listado de tareas',
          'categories' => $categories
        ]);
    }

    public function save()
    {
        if (isset(request()->task_id)) {
          $task = Task::findOrFail(request()->task_id);

        }
        else {
          $task = new Task();
          $task->createdAt = new DateTime();
        }
        $task->name = request()->name;
        $task->owner = request()->owner;
        $task->category = request()->category;
        $task->isArchived = 0;
        $task->save();
        return redirect('/tasks');
    }

    public function formEdit()
    {
        $task = Task::findOrFail(request()->task_id);
        $categories = Category::all();
        return view('form_task',[
          'title' => 'Listado de tareas',
          'task'=> $task,
          'categories' => $categories
        ]);
    }

    public function archived()
    {
        if (isset(request()->task_id)) {
          $task = Task::findOrFail(request()->task_id);
          $task->isArchived = 1;
          $task->save();
        }
        return redirect('/tasks');
    }
}
