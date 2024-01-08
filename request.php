<html>
    <head><title>home</title></head>
    <link rel="icon" type="image/icon" href="untitled.png">
    <link rel="stylesheet" type="text/css" href="./css/adlopage.css">
    <body>
        <div class="cldash">
            <ul>
                <a href="#">School list</a><a href="#">Request</a><a href="adlogin.html">Logout</a>
            </ul>
        </div>

        

        <?php
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $databasename = "register";
  
  // CREATE CONNECTION
  $conn = new mysqli($servername,
    $username, $password, $databasename);
  
  // GET CONNECTION ERRORS
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  
  // SQL QUERY
  $query = "SELECT * FROM `register`;";
  
  // FETCHING DATA FROM DATABASE
  $result = $conn->query($query);
  
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
            echo "username: " .
                $row["u"]. " - Name: " ."<br>";

        }
    } 
    else {
        echo "0 results";
    }
  
   $conn->close();
  
?>







<?php
 
// Username is root
$user = 'root';
$password = '';
 
// Database name is geeksforgeeks
$database = 'sportify';
 
// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
                $password, $database);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database
$sql = " SELECT * FROM register ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
      <table>
            <tr>
                <th>School name</th>
                <th>Username</th>
                <th>Password</th>
                <th>Mobile no</th>
                <th>Gmail</th>
                <th>Address</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['n'];?></td>
                <td><?php echo $rows['ul'];?></td>
                <td><?php echo $rows['p'];?></td>
                <td><?php echo $rows['m'];?></td>
                <td><?php echo $rows['g'];?></td>
                <td><?php echo $rows['a'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>