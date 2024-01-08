<html>
    <head>
        <title>CS LIB</title>
        <link rel="stylesheet" href="../user/css/search.css">
    </head>
    <body>
        &nbsp;&nbsp;<img src="../image/department.png" height="70" width="70">
        <font class="heading"><span>CS </span>LIB</font>
        <h3 class="sub">Department of Computer Science</h3>
        <a href="../user/user.php"><img src="" width="13" height="13"> HOME</a>
        <a href="../user/book.php"><img src="" width="13" height="13"> BOOKS</a>
        <a href="#"><img src="" width="13" height="13"> SEARCH</a>
        <a href="#"><img src="" width="13" height="13"> MAGAZINE</a>
        <a href="#"><img src="" width="13" height="13"> ABOUT</a>
        <a href="../index.html" class="logout"><img src="" width="13" height="13"> LOGOUT</a>
        <form method="post" action="#" class="form">
        <input type="text" placeholder="     Search for book,author,accno" name="search" class="search"><br><br>
        <input type="submit" value="GO" name="submit" class="button">
        </form>
        <form method="post" action="bookentry.php" class="report">
            <font>BOOKS REGISTER</font><br><br>
        <label class="regl">REG NO     :</label><input type="text" placeholder=" Enter your register number" name="regno" class="reg"><br><br>
        <label class="regl">ACCNO      :</label><input type="text" placeholder=" Enter Book access number" name="accno" class="acc"><br><br>
        <label class="regl">ISSUE DATE :</label><input type="date" placeholder=" Enter Book issue date" name="issue" class="issue"><br><br>
        <label class="regl">RETURN DATE:</label><input type="date" placeholder=" Enter Book return date" value="yyyy-mm-dd" name="bookreturn" class="ret"><br><br>
        <input type="submit" name="submit" value="Request" class="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
$search=$_POST['search'];
$link=mysqli_connect('localhost','root','','library');
$query="SELECT * FROM books WHERE book='$search' OR author='$search' OR accno='$search'";
$result=mysqli_query($link,$query);
$numrow=mysqli_num_rows($result);
if($numrow>0)
{

echo '<table border="1" class="geting ">';
echo '<tr>';
echo '<th>Sno</th>';
echo '<th>Accno</th>';
echo '<th>Book</th>';
echo '<th>Author</th>';
echo '<th>RS</th>';
echo '<th>Status</th>';
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
}
?>
