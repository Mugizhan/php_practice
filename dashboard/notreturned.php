<html>
<head>
    <link rel="stylesheet" href="../css/issued.css">
</head>
<body>
    <div class="header">
<img src="../image/main_header.png" class="mh">
<font class="head">CS LIB</font>
<a href="../index.html" class="logout"><img src="../image/icons/logout.png" width="40" heigth="40"></a>
</div>
<img SRC="../image/icons/thumbsdown.png" width="60" height="45" class="home"><h1 class="home1">NOT RETURNED</h1>
<li>
    <img src="../image/icons/admin.png" width="100" height="70" class="loginpng">
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

    </div>
    <?php
        $link=mysqli_connect('localhost','root','','library');
        if(!$link){
         die('conection error'.mysqli_connect_error());
        }
        $query="SELECT * FROM report,books where report.accno=books.accno AND report.status='not returned'";
        $result=mysqli_query($link,$query);
        $numrow=mysqli_num_rows($result);
        if($numrow>0)
        {
         echo '<table border="1" class="issued">';
         echo '<tr>';
         echo '<th>accno</th>';
         echo '<th>regno</th>';
         echo '<th>book</th>';
         echo '<th>issue date</th>';
         echo '<th>return date</th>';
         echo '</tr>';
         while($row=mysqli_fetch_assoc($result))
         {
             echo '<tr>';
             echo '<td>'.$row['accno'].'</td>';
             echo '<td>'.$row['regno'].'</td>';
             echo '<td>'.$row['book'].'</td>';
             echo '<td>'.$row['issue_date'].'</td>';
             echo '<td>'.$row['return_date'].'</td>';
             echo '</tr>';
           
         }
         echo '</table>';
     
        }
        else{
         echo 'record not found';
        }
       ?>
</body>
</html>