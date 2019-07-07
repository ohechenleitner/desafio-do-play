@extends('base')

@section('main')
  <div class="col-sm-12">
    <h1> Listado de tareas
    <a href="{{ url('/tasks/new')  }}" class="btn btn-primary float-right">Crear tarea</a>
    </h1>
  </div>
    <div class="tasks-results">
        <div class="row">
          @foreach($categories as $category)
            <div class="col-sm-4 col-xs-12">
                <div class="panel-view">
                    <div class="panel-view-title">
                    <h2> {{$category->name}} </h2>
                    </div>
                    <div class="panel-view-items">
                      @foreach($category->tasks()->where('isArchived','=','0')->get() as $task)
                        <div class="task-item">
                            <div class="task-body">
                                <h3> {{$task->name}} </h3>
                                @if(isset($task->category->id))
                                <b>#{{$task->category->name}}</b>
                                @endif
                            </div>
                        <div class="task-footer">
                            <span class="task-date">{{$task->createdAt->format('d-m-Y')}}</span>
                            <a href="{{ url('/tasks/archived?task_id='.$task->id) }}" class="float-right"><i class="fa fa-archive"></i></a>
                            <a href="{{ url('/tasks/edit?task_id='.$task->id) }}" class="float-right"><i class="fa fa-pencil"></i></a>
                        </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach

    </div>

@endsection
