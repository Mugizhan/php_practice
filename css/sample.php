<?php
$name=$_POST['name'];
$name=$_POST['phno'];
$name=$_POST['email'];
$name=$_POST['user'];
$name=$_POST['pass'];
$con=mysqli_connect("localhost","root","","sample");
$fetch="SELECT * from user where name='mugi'OR name='siva'";
$siva=mysqli_query($con,$fetch);

  echo '<table border="1" class="issued">';
         echo '<tr>';
         echo '<th>name</th>';
         echo '<th>phno</th>';
         echo '<th>email</th>';
         echo '<th>user</th>';
         echo '<th>pass</th>';
         echo '</tr>';


while($row=mysqli_fetch_assoc($siva))
{
 
 echo '<tr>';
 echo '<td>'.$row['name'].'</td>';
 echo '<td>'.$row['phno'].'</td>';
 echo '<td>'.$row['email'].'</td>';
 echo '<td>'.$row['user'].'</td>';
 echo '<td>'.$row['pass'].'</td>';

 echo "</tr>";

}
echo "<table>";


?>