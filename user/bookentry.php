<?php
 $regno=$_POST['regno'];
 $accno=$_POST['accno'];
 $bookreturn=$_POST['bookreturn'];
 $issue=$_POST['issue'];
$con=mysqli_connect("localhost","root","","library");
$sql="INSERT INTO report(accno,regno,issue_date,return_date) values('$accno','$regno','$issue','$bookreturn')";
$result=mysqli_query($con,$sql);
$ret="UPDATE books SET books.status='not available' where books.accno='$accno'";
$result=mysqli_query($con,$ret);
$retre="UPDATE report SET report.status='not returned' where report.accno='$accno'";
$result=mysqli_query($con,$retre);


 if($result)
 {
   echo "<script>alert('BOOK REGISTERED SUCCESSFULLY');</script>";
   echo "<script> location.href='../user/user.php';</script>";
    
 }
 else
 {
   echo "<script>alert('incorrect');</script>";
   echo "<script> location.href='../user/search.php';</script>";
 }
?>
