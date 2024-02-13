<!DOCTYPE html>
<html>
    <head>
        <title>Add Books</title>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>

    <section class="vh-100 text-bg-info ">
        <div class="container h-100 ">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                        <a href="<?php echo base_url('home');?>"><button type="button" class="btn btn-primary">Back</button></a>
                            <h2 class="text-center">Add Books</h2><br>
        <form action="<?php echo base_url('add'); ?>" method="post" autocomplete="on">
            <label for="bname" class="form-label">Book Name : </label><br>
            <input type="text" class="form-control" id="bname" name="bname"><br> 
            <label for="bauthor" class="form-label">Book Author : </label><br>
            <input type="text" class="form-control" id="bauthor" name="bauthor"><br> 
            <label for="bcount" class="form-label">Book Count : </label><br>
            <input type="text" class="form-control" id="bcount" name="bcount"><br> 
            <label for="breserved" class="form-label">Book Reserved: </label><br>
            <input type="text" class="form-control" id="breserved" name="breserved"><br><br>
            <input type="submit" class="btn btn-outline-primary w-100" name="submit" value="Add book"><br>
        </form>
        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>