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
<div class="container">
    <form action="{{ route('insertClient') }}" method="POST">
        @csrf
        <label for="name">Client Name:</label><br>
      
    <input type="text" id="clientName" name="clientName" value="{{ $client->clientName }}"><br>
    <label for="phone">phone:</label><br>
    <input type="text" id="phone" name="phone" value="{{ $client->phone }}"><br><br>
    <label for="email">email:</label><br>
    <input type="text" id="email" name="email" value="{{ $client->email }}"><br><br>
    <label for="website">website:</label><br>
    <input type="text" id="website" name="website" value="{{ $client->website }}"><br><br>
    <input type="submit" value="Submit">
    </form>

</div>
</body>
</html>