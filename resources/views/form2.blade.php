<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{ route('insertClientForm2') }}" method="POST">
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



</body>
</html>