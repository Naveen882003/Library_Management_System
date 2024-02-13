<!DOCTYPE html>
<html>

<head>
    <title>My Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script >$(document).ready(function () {
    $('#example').DataTable();
});</script>
</head>

<body>
    <div class="container-fluid">
    <a href="<?php echo base_url('home');?>"><button type="button" class="btn btn-primary">Back</button></a>
        <h1 class=" text-center" style="font-size: 150%; padding-bottom: 20px;padding-top: 10px;">Book Approval
        </h1>
        <table id="example" class="table table-striped table-bordered" style="width:100%">

            <thead class="table-active text-center">
                <tr>
                    <th class="text-center">Book ID</th>
                    <th class="text-center">User ID</th>
                    <th class="text-center">Book Name</th>
                    <th class="text-center">Author</th>
                    <th class="text-center">Taken Date</th>
                    <th class="text-center">Due Date</th>
                    
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php

foreach($user_info as $row)
{


echo '<tr><td>'.$row['book_id'].'</td><td>'.$row['user_id'].'</td><td>'.$row['book_name'].'</td><td>'.$row['book_author'].'</td><td>'.$row['taken_date'].'</td><td>'.$row['due_date'].'</td> <td class="text-center">
<a href=" ' . base_url().'approve/'. $row["book_id"].$row["user_id"] . '"><input  style="margin-right: 10px;"
type="button" id="res" name="res" value="Approve" class="btn btn-success"></a><a href=" ' . base_url().'cancel/'. $row["book_id"]. $row["user_id"]. '"><input type="button"
 id="del" name="del" value="Cancel" class="btn btn-danger"></a></td></tr>';



}



?>
            
            
            </tbody>
        </table>
        <!-- <button type="button" class="btn btn-primary">Add Books</button> -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>