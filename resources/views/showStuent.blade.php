<!DOCTYPE html>
<html lang="en">
<head>
  <title>Clients</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Show Client Data</title>
  <title>{{$student->name}}</title>
</head>
<body>
      <h1><strong>Student: </strong>{{ $student->name }}</h1>
      <hr>
      <h1><strong>Student: </strong>{{ $student->student_id }}</h1>
      <hr>
      <h1><strong>Student: </strong>{{ $student->age }}</h1>
      <hr>
   

</body>