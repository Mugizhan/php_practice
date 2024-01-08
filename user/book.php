<html>
<head>
    <link rel="stylesheet" href="../user/css/book.css">
</head>   
<body>
&nbsp;&nbsp;<img src="../image/department.png" height="70" width="70">
        <font class="heading"><span>CS </span>LIB</font>
        <h3 class="sub">Department of Computer Science</h3>
        <a href="../user/user.php"><img src="" width="13" height="13"> HOME</a>
        <a href="../user/book.php"><img src="" width="13" height="13"> BOOKS</a>
        <a href="../user/search.php"><img src="" width="13" height="13"> SEARCH</a>
        <a href="#"><img src="" width="13" height="13"> MAGAZINE</a>
        <a href="#"><img src="" width="13" height="13"> ABOUT</a>
        <a href="../index.html" class="logout"><img src="" width="13" height="13"> LOGOUT</a>
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
         echo '</tr>';
         while($row=mysqli_fetch_assoc($result))
         {
             echo '<tr>';
             echo '<td>'.$row['sno'].'</td>';
             echo '<td>'.$row['accno'].'</td>';
             echo '<td>'.$row['book'].'</td>';
             echo '<td>'.$row['author'].'</td>';
             echo '<td>'.$row['rs'].'</td>';

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