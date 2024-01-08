<html>
<head>
    <link rel="stylesheet" href="../css/book.css">
</head>
<body>
<img src=   "../image/main_header.png" class="mh">
<a href="../index.html" class="logout"><img src="../image/icons/logout.png" width="40" heigth="40"></a>
<font class="head">CS LIB</font>
<a href="../bookupdate/bookupdate.HTML"><img src="../image/icons/add.png" width=1.5% height:1.5% class="add"></a>
<img SRC="../image/icons/book.png" width="58" height="60" class="home"><h1 class="home1">BOOKS</h1>
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
        <form method="post" action="booksearch.php">
            <img src="../image/icons/search.png" width=30 height=30 class="searchlogo">
        <input type="text" placeholder="Search for book,author,accno" name="search">
        <button class="button">GO</button>
</form>
<?php
        $link=mysqli_connect('localhost','root','','library');
        if(!$link){
         die('conection error'.mysqli_connect_error());
        }
        $query="SELECT * FROM books";
        $result=mysqli_query($link,$query);
        $numrow=mysqli_num_rows($result);
        if($numrow>0)
        {
         echo '<table border="1" class="fetch">';
         echo '<tr>';
         echo '<th>Sno</th>';
         echo '<th>accno</th>';
         echo '<th>book</th>';
         echo '<th>author</th>';
         echo '<th>rs</th>';
         echo '<th>status</th>';
         echo '</tr>';
         while($row=mysqli_fetch_assoc($result))
         {
             echo '<tr>';
             echo '<td>'.$row['sno'].'</td>';
             echo '<td>'.$row['accno'].'</td>';
             echo '<td>'.$row['book'].'</td>';
             echo '<td>'.$row['author'].'</td>';
             echo '<td>'.$row['rs'].'</td>';
             echo '<td>'.$row['status'].'</td>';

             echo '</tr>';
           
         }
         echo '</table>';
     
        }
        else{
         echo 'record not found';
        }
       ?>
    </div>
    <div class="header">


</div>
</body>
</html>