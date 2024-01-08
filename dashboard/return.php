<html>
<head>
    <link rel="stylesheet" href="../css/return.css">
</head>
<body>
    <div class="header">
<img src="../image/main_header.png" class="mh">
<font class="head">CS LIB</font>
<a href="../index.html" class="logout"><img src="../image/icons/logout.png" width="40" heigth="40"></a>
</div>
<img SRC="../image/icons/dumbsup.png" width="55" height="66" class="home"><h1 class="home1">RETURN</h1>
<li>
    <img src="../image/icons/admin.png" width="60" height="70" class="loginpng">
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

    <form method="post" action="returnentry.php" class="report">
        <font>BOOKS REGISTER</font><br><br>
    <label class="regl">REG NO     :</label><input type="text" placeholder="register number" name="regno" class="reg"><br><br>
    <label class="regl">ACC NO     :</label><input type="text" placeholder="accno number" name="accno" class="accno"><br><br>
    <label class="regl">RETURN DATE:</label><input type="date" format="yyyy-mm-dd" placeholder="returned date" name="bookreturn" class="ret"><br><br>
    <input type="submit" name="submit" value="ENTER" class="submit">
</form>
</body>
</html>