<!DOCTYPE html>
<html>

<head>
    <title>login</title>
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
                        <a href="<?php echo base_url('loginback');?>"><button type="button" class="btn btn-primary">Back</button></a>
                            <h2 class="text-center">Login</h2><br>
                            <form action="<?php echo base_url('loginuser');  ?>" method="post" target="_top" autocomplete="on">
                                
                            <label for="uename" class="form-label">Username / Email / Phone No</label><br>
                                <input type="text" id="uename" class="form-control" name="uename">
                                <label for="pas" class="form-label">Password</label><br>
                                <input type="password" id="pas" class="form-control" name="pas"><br><br>
                                <input type="submit" class="btn btn-outline-primary w-100" value="Login"
                                    ><br>
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