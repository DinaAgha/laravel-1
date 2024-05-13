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
    <form action="{{ route('insertStudent') }}" method="POST">
        @csrf
    <label for="name">studentName:</label><br>
    <input type="text" id="name" name="name" value="name"><br>
    <label for="id">Student ID</label><br>
    <input type="text" id="id" name="id" value="id"><br><br>
    <label for="age">AGE:</label><br>
    <input type="text" id="age" name="age" value="age"><br><br>
 
 
    <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
