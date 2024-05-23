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
          <li><a href="{{route('client')}}">Clients</a></li>
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
    <form action="{{ route('insertClient') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <label for="clientName">clientName:</label><br>
    <p style="color:red">
    @error('clientName')
    {{$message}}
    @enderror
  </p>
    <input type="text" id="clientName" name="clientName"class="form-control"value="{{old('clientName')}}" ><br>
    
    <label for="phone">phone:</label><br>
    <p style="color:red">
    @error('phone')
    {{$message}}
    @enderror
  </p>

    <input type="text" id="phone" name="phone" class="form-control"value="{{old('phone')}}" ><br><br>

    <label for="email">E_mail:</label><br>
    <P style="color:red">
    @error('email')
    {{$message}}
    @enderror
    </P>
    <input type="text" id="email" name="email" class="form-control"value="{{old('email')}}" ><br><br>

    <label for="website">website:</label><br>
    <P style="color:red">
    @error('website')
    {{$message}}
    @enderror
    </P>
    <input type="text" id="website" name="website" class="form-control"value="{{old('website')}}" ><br><br>
    <label for="city">City:</label><br>
    <select name="city" id="city" class="form-control">
      <option value="">Please Select City</option>
      <option value="Cairo">Cairo</option>
      <option value="Giza">Giza</option>
      <option value="Alex">Alex</option>
    </select>
    <br><br>

    <label for="image">Image:</label><br>
    <input type="file" id="image" name="image" class="form-control"><br><br>

    <label for="active">Active:</label><br>
    <input type="checkbox" id="active" name="active" class="form-control"><br><br>

    <input type="submit" value="Submit">

    </form>
</div>

</body>
</html>
