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
    @include('includes.nav2')

<div class="container">
    <form action="{{ route('insertStudent') }}" method="POST">
        @csrf
    <label for="name">StudentName:</label><br>
    <input type="text" id="name" name="name" value="{{ $student->name }}"><br>
    <label for="studnet_id">Student_id:</label><br>
    <input type="text" id="student_id'" name="student_id" value="{{ $student->student_id }}"><br><br>
    <label for="age">Age:</label><br>
    <input type="text" id="age" name="age" value="{{ $student->age }}"><br><br>
    <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
