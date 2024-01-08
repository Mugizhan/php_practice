<?php
       $search=$_POST["search"];
       $link=mysqli_connect('localhost','root','','library');
       if(!$link){
        die('conection error'.mysqli_connect_error());
       }
       $query="SELECT * FROM books WHERE book='$search' OR author='$search' OR accno='$search'";
       $result=mysqli_query($link,$query);
       $numrow=mysqli_num_rows($result);
       if($numrow>0)
       {
        
        echo '<table border="1" class="fetch">';
        echo '<tr>';
        echo '<th>Sno</th>';
        echo '<th>Accno</th>';
        echo '<th>Book</th>';
        echo '<th>Author</th>';
        echo '<th>RS</th>';
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