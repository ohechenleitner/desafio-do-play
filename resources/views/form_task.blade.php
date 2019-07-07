@extends('base')

@section('main')
    <div class="col-sm-12">
    <h1> @if(isset($task))
      Editar tarea
      @else
      Nueva tarea
      @endif
      <a href="{{ url('/tasks')  }}" class="btn btn-primary float-right"> Volver </a>
    </h1>
    </div>
    <form class="col-sm-6" action="{{ url('/tasks/save') }}" method="post">
      <div class="form-group">
        <label>Usuario</label>
        <input type="text" name="owner" class="form-control" value="{{@$task->owner}}" placeholder="" maxlength="20">
      </div>
      <div class="form-group">
        <label>Nombre de la tarea</label>
        <input type="text" name="name" class="form-control" value="{{@$task->name}}" placeholder="" maxlength="150">
      </div>
          <div class="form-group">
          <label>Categoria</label>
          <select class="form-control" name="category">
            @foreach($categories as $cat)
            <option value="{{$cat->id}}" @if(@$task->category==$cat->id) selected @endif>{{$cat->name}}</option>
            @endforeach
          </select>
        </div>
        <button type="submit" name="button" class="button btn-success"> Guardar </button>
        {{ csrf_field() }}
        <input type="hidden" name="task_id" value="{{@$task->id}}">
      </form>
@endsection
