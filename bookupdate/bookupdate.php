
<?php
 $accno=$_POST['accno'];
 $book=$_POST['book'];
 $author=$_POST['author'];
 $rs=$_POST['rs'];
$con=mysqli_connect("localhost","root","","library");
$sql="INSERT INTO books(accno,book,author,rs) values('$accno','$book','$author','$rs')";
$result=mysqli_query($con,$sql);
 if($result)
 {
   echo "<script>alert('book updated successfully');</script>";
    echo "<script> location.href='../bookupdate/bookupdate.HTML';</script>";
    exit;
    
 }
 else
 {
   echo "<script>alert('incorrect');</script>";
   echo "<script> location.href='../bookupdate/bookupdate.HTML';</script>";
 }
?>
