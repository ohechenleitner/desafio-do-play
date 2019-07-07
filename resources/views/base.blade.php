
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>{{ @$title }} Doplay Task App</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .tasks-results {width: 100%;}

    .panel-view {
            border-radius: 5px;
          }
          .panel-view-title {
            background: #666;
            color:#fff;
            padding: 4px;
            text-align: center;
          }

          .panel-view-items {
            padding: 10px;
          }
          .task-item {
           border:1px solid #ccc;
           border-radius: 5px;
           margin-bottom: 10px;
           padding: 10px;
          }
          .task-footer a{
          margin: 5px;
          }
    </style>
    <link href="navbar-top-fixed.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Doplay Task App</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/')  }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/tasks')  }}">Tareas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Categorías</a>
      </li>
    </ul>
  </div>
</nav>
<hr>
<div role="main" class="container">
  <div class="row">
  @yield('main')
  </div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
