<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Import Excel File</title>
</head>

<body>
<a href="<?php echo base_url('home');?>"><button type="button" class="btn btn-primary">Back</button></a>
    <h1>Book Details</h1>

    <a href="<?= site_url("download") ?>" class="btn btn-sm  btn-success">Export Data</a>
    <a href="<?= site_url("upload") ?>" class="btn btn-sm  btn-success">Import Data</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">book_id</th>
                <th scope="col">book_name</th>
                <th scope="col">book_author</th>
                <th scope="col">book_reserved</th>
                
            </tr>
        </thead>
        <tbody>
            <?php

            if (!empty($tableData)) {
                $i = 1;
                foreach ($tableData as $row) {
            ?>


                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $row->book_name ?></td>
                        <td><?= $row->book_author ?></td>
                        <td><?= $row->book_count ?></td>
                        <td><?= $row->book_reserved ?></td>
                        
                    </tr>

            <?php
                    $i++;
                }
            }
            ?>


        </tbody>
    </table>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>