<?php
  include'koneksi.php';
?>
<form method="POST">
  <center>
    <h2><b> REGISTRASI </b></h2>
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="email" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"><br>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name = "password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="password" name="email"class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Retry Password</label>
    <input type="password" name="password"class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div><br>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button><br><br>
</center>
</form>
<?php
if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
}
?>
