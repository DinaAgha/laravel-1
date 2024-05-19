<!DOCTYPE html>
<html lang="en">
<head>
  <title>Students</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('includes.nav2')

<div class="container">
  <h2>Students Data</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Student Name</th>
        <th>ID</th>
        <th>Age</th>
        <th>Edit</th>
        <th>show</th>
        <th>Delete</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($student as $student )
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->student_id}}</td>
            <td>{{$student->age}}</td>
            <td><a href="{{Route('editStudent',$student->id)}}">Edit</a></td>
            <td><a href="{{Route('showStuent',$student->id)}}">Show</a></td>
         
            <td>
              <form action="{{route('delStudent')}}" method="POST">
              @csrf
              @method('DELETE')
                <input type="hidden" value="{{$stuent->id}}" name="id"> 
                <input type="submit" value="Delete">
            </form>
          </td> 
        </tr>
        @endforeach
      
    </tbody>
  </table>
</div>

</body>
</html>


