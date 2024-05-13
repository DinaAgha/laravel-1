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
      <a class="navbar-brand" href="#">Clients</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ route('addClient')}}">Add</a></li>
          <li><a href="{{route('clients')}}">Clients</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
  <!--End Nav bar-->
<div class="container">
    <form action="{{ route('insertClient') }}" method="POST">
        @csrf
    <label for="clientName">clientName:</label><br>
    <input type="text" id="clientName" name="clientName" value="client"><br>
    <label for="phone">phone:</label><br>
    <input type="text" id="phone" name="phone" value="phone"><br><br>
    <label for="email">email:</label><br>
    <input type="text" id="email" name="email" value="email"><br><br>
    <label for="website">website:</label><br>
    <input type="text" id="website" name="website" value="website"><br><br>
    <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
