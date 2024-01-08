<?php
$regno=$_POST['regno'];
$accno=$_POST['accno'];
$returndate=$_POST['bookreturn'];
$con=mysqli_connect("localhost","root","","library");
$sql="UPDATE report SET report.delay_date='$returndate' where report.regno='$regno'";
$result=mysqli_query($con,$sql);
$ret="UPDATE books SET books.status='Available' where books.accno='$accno'";
$result=mysqli_query($con,$ret);
$retre="UPDATE report SET report.status='returned' where report.accno='$accno'";
$result=mysqli_query($con,$retre);
$ard=mysqli_query($con,"SELECT return_date from report where regno='$regno'");
$resultcheck=mysqli_num_rows($ard);

  if($resultcheck>0)
  {
    while($row=mysqli_fetch_assoc($ard))
   {
        $date=strtotime($row['return_date']);
    		$date1=strtotime($returndate);
        $dif=$date1-$date;
		    $delay_days=floor($dif/(60*60*24));
	}
	$fine=0;
		for($i=1;$i<=$delay_days;$i++)
		{
			$fine=$fine+10;
      $latefine=$fine;
		}
  
    $retre="UPDATE report SET report.fine='$latefine' where report.accno='$accno'";
    $result=mysqli_query($con,$retre);
    echo "<script> location.href='../dashboard/return.php';</script>";	 
  }

  else{
    echo "<script>alert('user or accno not found');</script>";
 
  }
 $sho=mysqli_query($con,"SELECT return_date from report where regno='$regno'");
$resu=mysqli_num_rows($sho);
    while($row=mysqli_fetch_assoc($sho))
         {
             echo '<tr>';
             echo '<td>'.$row['accno'].'</td>';
			      echo '<td>'.$row['regno'].'</td>';
             echo '<td>'.$row['issue_date'].'</td>';
             echo '<td>'.$row['return_date'].'</td>';
             echo '<td>'.$row['status'].'</td>';
             echo '<td>'.$row['fine'].'</td>';
		 }
?>