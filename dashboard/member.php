<html>
<head>
    <link rel="stylesheet" href="../css/member.css">
</head>
<body>
    <div class="header">
<img src="../image/main_header.png" class="mh">
<font class="head">CS LIB</font>
<a href="../index.html" class="logout"><img src="../image/icons/logout.png" width="40" heigth="40"></a>
</div>
<img SRC="../image/icons/member.png" width="55" height="66" class="home"><h1 class="home1">MEMBERS</h1>
<li>
    <img src="../image/icons/admin.png" width="70" height="70" class="loginpng">
    <font class="admin"><b>ADMIN&nbsp; </b><img src="../image/online.png" width="15" height="15"><span>Online</span></font>
    <hr color="black">
        <ol><a href="../main.html"><img src="../image/icons/dashboard.png" width="22" height="22">Dashboard</a></ol>
        <ol><a href="../dashboard/member.php"><img src="../image/icons/member.png" width="23" height="23"> Members      </a></ol>
        <ol><a href="../dashboard/book.php"><img src="../image/icons/book.png" width="23" height="23"> Books   </a></ol>
        <ol><a href="../dashboard/magazine.php"><img src="../image/icons/magazine.png" width="20" height="20"> Magazine </a></ol>
        <ol><a href="../dashboard/issued.php"><img src="../image/icons/rocket.png" width="20" height="20"> Issued     </a></ol>
        <ol><a href="../dashboard/return.php"><img src="../image/icons/dumbsup.png" width="13" height="13"> Returned</a></ol>
        <ol><a href="../dashboard/notreturned.php"><img src="../image/icons/thumbsdown.png" width="13" height="13"> Not Return</a></ol>
        <ol><a href="../dashboard/fine.php"><img src="./image/icons/thumbsdown.png" width="13" height="13"> Fine</a></ol>
        <ol><a href="../dashboard/report.php"><img src="./image/icons/thumbsdown.png" width="13" height="13"> Report</a></ol>    
    </li>

        <h1 class="thirdyear">III YEAR</h1>
        <?php
        $link=mysqli_connect('localhost','root','','library');
        if(!$link){
         die('conection error'.mysqli_connect_error());
        }
        $query="SELECT * FROM userlogin";
        $result=mysqli_query($link,$query);
        $numrow=mysqli_num_rows($result);
        if($numrow>0)
        {
         echo '<table border="1" class="fet">';
         echo '<tr>';
         echo '<th>Name</th>';
         echo '<th>Regno</th>';
         echo '<th>password</th>';
         echo '</tr>';
         while($row=mysqli_fetch_assoc($result))
         {
             echo '<tr>';
             echo '<td>'.$row['name'].'</td>';
             echo '<td>'.$row['regno'].'</td>';
             echo '<td>'.$row['password'].'</td>';
             echo '</tr>';
           
         }
         echo '</table>';
     
        }
        else{
         echo 'record not found';
        }
       ?>
    </div>
</body>
</html>