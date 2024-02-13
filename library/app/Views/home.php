<!DOCTYPE html>
<html lang="en">

<head>
<link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<?php 

               if($user_info[0]['role'] == 1 ){
          ?>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
         <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav">

                <li class="nav-item">
                    <a class="nav-link sidefrst" href="<?php echo base_url('books');?>">
                        <span class="textside">  Book Request</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link sidesecnd" href="<?php echo base_url('user');?>">
                        <span class="textside">  My Books</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidesthrd" href="<?php echo base_url('return_books');?>">
                        <span class="textside">  History</span>
                    </a>
                </li>

            </ul>

            <ul class="navbar-nav2 ml-auto">
                <li class="dropdown">
                    <a href="<?php echo base_url('logout');?>">Log out</a>
                </li>
            </ul>

        </div>
    </nav>

    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">


                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                    <div class="inforide">
                        <a href="<?php echo base_url('books');?>">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone">
                                    <img
                                        src="https://cdn2.iconfinder.com/data/icons/objects-23/50/1F4DA-books--512.png">
                                </div>
                                <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                                    <h4>Book Request</h4>

                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                    <div class="inforide">
                        <a href="<?php echo base_url('user');?>">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-4 col-4 ridetwo">
                                    <img
                                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png">
                                </div>
                                <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                                    <h4>My Books</h4>

                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                    <div class="inforide">

                        <a href="<?php echo base_url('return_books');?>">

                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-4 col-4 ridethree">
                                    <img
                                        src="https://www.library.sydney.edu.au/study/images/gettingstarted/return-icon.png">
                                </div>
                                <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                                    <h4>History</h4>

                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
<?php
               }else{
                
          ?>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
         <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav">

                <li class="nav-item">
                    <a class="nav-link sidefrst" href="<?php echo base_url('addbooks');?>">
                        <span class="textside">  Add book</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link sidesecnd" href="<?php echo base_url('books')?>">
                        <span class="textside">  Book List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidesecnd" href="<?php echo base_url('approval')?>">
                        <span class="textside">  Book Approval</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidesthrd" href="<?php echo base_url('bookIssued');?>">
                        <span class="textside"> Book Issued</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidesthrd" href="<?php echo base_url('excelImport');?>">
                        <span class="textside"> Import / Export</span>
                    </a>
                </li>

            </ul>

            <ul class="navbar-nav2 ml-auto">
                <li class="dropdown">
                    <a href="<?php echo base_url('logout');?>">Log out</a>
                </li>
            </ul>

        </div>
    </nav>

    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">


                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                    <div class="inforide">
                        <a href="<?php echo base_url('addbooks');?>">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone">
                                    <img
                                        src="https://cdn2.iconfinder.com/data/icons/objects-23/50/1F4DA-books--512.png">
                                </div>
                                <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                                    <h4>Add book</h4>

                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                    <div class="inforide">
                        <a href="<?php echo base_url('books')?>">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-4 col-4 ridetwo">
                                    <img
                                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png">
                                </div>
                                <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                                    <h4>Book List</h4>

                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                    <div class="inforide">
                        <a href="<?php echo base_url('approval')?>">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-4 col-4 ridetwo">
                                    <img
                                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png">
                                </div>
                                <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                                    <h4>Book Approval</h4>

                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                    <div class="inforide">

                        <a href="<?php echo base_url('bookIssued');?>">

                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-4 col-4 ridethree">
                                    <img
                                        src="https://www.library.sydney.edu.au/study/images/gettingstarted/return-icon.png">
                                </div>
                                <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                                    <h4>Book Issued</h4>

                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                    <div class="inforide">

                        <a href="<?php echo base_url('excelImport');?>" >

                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-4 col-4 ridefour">
                                    <img
                                        src="https://i.pinimg.com/originals/f0/ba/ab/f0baabc7a94a50448da9fb2d9508d450.png">
                                </div>
                                <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                                    <h4>Import / Export</h4>

                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body><?php } ?>

</html>