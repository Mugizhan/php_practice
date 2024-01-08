<?php
$con=mysqli_connect("localhost","root","","library");
if(!isset($_POST['submit']))
{
  $username=$_POST['username'];
  $password=$_POST['password'];
  if(($username=='admin')&&($password=='admin'))
  {
    echo "<script> location.href='../php_practice/main.html';</script>";
  }

  else{
  $sql="SELECT * from userlogin WHERE regno='$username' AND password='$password'";
  $result=mysqli_query($con,$sql);
  $resultcheck=mysqli_num_rows($result);
  $error='login.html';
  if($resultcheck>0)
  {
    echo "<script> location.href='../php_practice/user/user.php';</script>";
  }
  else{
    echo "<script>alert('incorrect');</script>";
    echo "<script> location.href='login.php';</script>";
  }
}
}

?>
