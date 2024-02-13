<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PDF</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h1>Book Details</h1>
    <div class="d-flex flex-row-reverse bd-highlight">
      <a href="<?php echo base_url('Home/htmlToPDF') ?>" class="btn btn-primary">
        Download PDF
      </a>
    </div>
    <table id="example" class="table table-striped table-bordered" style="width:100%">

<thead class="table-active text-center">
    <tr>
        <th class="text-center">Book ID</th>
        <th class="text-center">Book Name</th>
        <th class="text-center">Book Author</th>
        <th class="text-center">Book Count</th>
        <th class="text-center">Book Reserved</th>
        
    </tr>
</thead>
<tbody>

<?php

foreach($user_info as $row)
{


echo '<tr><td>'.$row['book_id'].'</td><td>'.$row['book_name'].'</td><td>'.$row['book_author'].'</td><td>'.$row['book_count'].'</td><td>'.$row['book_reserved'].'</td></tr>';


}

?>

</tbody>
</table>
  </div>
</body>
</html>