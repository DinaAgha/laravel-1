<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="{{route('client')}}">Clients Homepage</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ route('addClient')}}">Add</a></li>
          <li><a href="{{route('client')}}">Clients</a></li>
          <li><a href="{{route('trashClient')}}">trash</a></li>
          <li><a href="{{route('insertClient')}}">Insert Client</a></li>

          @yield('menu')
          @stack('submenu')
    </ul>
  </div>
</nav>