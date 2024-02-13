<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
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
                            <h2 class="text-center">Register</h2><br>
                            <form action="<?php echo base_url('registeruser');  ?>" method="post" target="_top" autocomplete="on">
                                
                            <label for="uename" class="form-label">Username</label><br>
                                <input type="text" id="uename" class="form-control" name="uename"><br>
                                <label for="eid" class="form-label">Email Id</label><br>
                                <input type="email" id="eid" class="form-control" name="eid"><br>
                                <label for="pno" class="form-label">Phone No</label><br>
                                <input type="text" id="pno" class="form-control" name="pno"><br>
                                <label for="pas" class="form-label">Password</label><br>
                                <input type="password" id="pas" class="form-control" name="pas"><br>
                                <label for="role" class="form-label">Role </label>
                                <select id="role" name="role">
                                <option value="Student">Student</option>
                                <option value="Librarian">Librarian</option>
                                </select>
                                <input type="submit" class="btn btn-outline-primary w-100" value="Register"><br><br>
                                <h6>Already have an account  <a href="<?php echo base_url('loginuser');?>">Login</a></h6>
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