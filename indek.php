<?php
  include'koneksi.php';
?>
<form method="POST">
  <center>
    <h2><b> LOGIN </b></h2>
  <div class="form-group">
    <label>Username</label>
    <input type="email" name="username"><br>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div><br>
  <button type="submit" class="btn btn-primary">Submit</button><br><br>
  <button><a href="register.php">Create Account!</a></button>
</center>
</form>
<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $Password = md5($_POST['password']);
    $sql = "INSERT INTO user(username, password) VALUES ('$username','$password')";
    mysqli_query($koneksi,$sql);
  }
?>