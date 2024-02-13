<table border=1px>
                    <th >Book ID</th>
                    <th >Book Name</th>
                    <th >Book Author</th>
                    <th >Book Count</th>
                    <th >Book Reserved</th>
                    
</table>
<?php 
foreach($user_info as $row){
    echo '<table><tr><td>'.$row['book_id'].'</td><td>'.$row['book_name'].'</td><td>'.$row['book_author'].'</td><td>'.$row['book_count'].'</td><td>'.$row['book_reserved'].'</td></tr></table>';
}
?>