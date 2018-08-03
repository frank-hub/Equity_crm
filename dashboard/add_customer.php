<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Equity CRM</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body class="grey lighten-3">

    <!--Main Navigation-->
    <header>

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container-fluid">
                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>  
                <div class="light-font">
                    <ol class="breadcrumb warning-color-dark">
                        <li class="breadcrumb-item">
                            <a class="white-text" href="../">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>

            </div>
        </nav>
        <!-- Navbar -->

        <!-- Sidebar -->
        <div class="sidebar-fixed position-fixed">

            <a class="logo-wrapper waves-effect text-warning">
                    <h4 style="font-weight: bold ">EQUITY CRM</h4>
            </a>

            <div class="list-group list-group-flush">
                <a href="dashboard.php" class="list-group-item waves-effect list-group-item-action">
                    <i class="fa fa-pie-chart mr-3"></i>Dashboard
                </a>

                <!-- Split button -->
                <div class="btn-group warning-color-dark active">
                    <button type="button" class="btn btn-warning"><i class="fa fa-users mr-3"></i>Customer</button>
                    <button type="button" class="btn btn-warning dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="add_customer.php">Create Account</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="present_customer.php">Present Customer</a>
                    </div>
                </div>
               
                <a href="staff.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-users mr-3"></i>Staff</a>
                <a href="" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-map mr-3"></i>Messaging</a>
                <a href="#" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-money mr-3"></i>Orders</a>
                    
            </div>

        </div>
        <!-- Sidebar -->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="pt-5 mx-lg-5">
    <?php

if (isset($_POST['reg_btn'])){
    register();
}

function register(){

            if (isset($_FILES['image'])) 
             {  
               $names = $_FILES['image']['name'];
               $sizes = $_FILES['image']['size'];
               $types = $_FILES['image']['type'];
               $tmp = $_FILES['image']['tmp_name'];
               $folder_location = 'uploads/'.$_FILES['image']['name'];
               $move = move_uploaded_file($tmp,$folder_location);
                
            if ($move) {
                include '../auth/class/conn.php';
                $fname = $_POST['full_name'];
                $national_id    =$_POST ['id'];
                $email =$_POST ['email'];
                $location=$_POST ['location'];
                $password =$_POST ['password'];
                

                $password=md5($password);
                
                $qry = "INSERT INTO `customer`(`fname`, `email`, `password`, `image`, `location`, `national_id`) 
                VALUES ('$fname','$email','$password','$names','$location','$national_id')";
                $exec = mysqli_query($conn,$qry)or die(mysqli_error($conn));
                if($exec){
                    ?>
                <div class="" role="alert">
                <button class="btn btn-success" data-dismiss="alert" aria-label="close">The Customer :<?php echo $fname ?> Is registered
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <?php
                }
                }
                else {
                    echo '<h1>Error </h1>';
                }
            }
}
?>
        <form method="post" enctype="multipart/form-data" >
       <div class="row" style="margin-top: 50px">
           <div class="col-md-4">
               <img src="../img/crm/home/avatar.png" alt="" class="img-thumbnail" required>
               <br>
               <hr>
               <input type="file" name="image" id="userImage">
           </div>
               <div class="col-md-6">
                   
                <!-- Material form register -->
                    <p class="h4 text-center mb-4"> Account Sign up</p>
                
                    <!-- Material input text -->
                    <div class="md-form">
                        <i class="fa fa-user prefix grey-text"></i>
                        <input type="text" id="materialFormRegisterNameEx" name="full_name"  class="form-control">
                        <label for="materialFormRegisterNameEx">Your name</label>
                    </div>
                
                <!-- Material input id -->
                    <div class="md-form">
                        <i class="fa fa-id-card prefix grey-text"></i>
                        <input type="text" id="id" name="id" class="form-control" required>
                        <label for="id">Your National ID.</label>
                    </div>

                    <!-- Phone number -->
                    <div class="md-form">
                        <i class="fa fa-phone prefix grey-text"></i>
                        <input type="tel" id="phone" name="phone" class="form-control" required>
                        <label for="id">Your Phone No.</label>
                    </div>

                    <!-- Material input email -->
                    <div class="md-form">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input type="email" id="materialFormRegisterEmailEx"name="email" class="form-control" required>
                        <label for="materialFormRegisterEmailEx">Your email</label>
                    </div>
                
                    <!-- Material input location -->
                    <div class="md-form">
                        <i class="fa fa-exclamation-triangle prefix grey-text"></i>
                        <input type="text" id="materialFormRegisterConfirmEx" name="location"class="form-control" required>
                        <label for="materialFormRegisterConfirmEx">location</label>
                    </div>
                
                    <!-- Material input password -->
                    <div class="md-form">
                        <i class="fa fa-lock prefix grey-text"></i>
                        <input type="password" id="materialFormRegisterPasswordEx" name="password" class="form-control" required>
                        <label for="materialFormRegisterPasswordEx">Your password</label>
                    </div>
                
                    <div class="text-center mt-4">
                        <button class="btn btn-primary" type="submit" name="reg_btn">Register</button>
                    </div>
                
                <!-- Material form register -->
               </div>
       </div>
       </form>
       
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="page-footer text-center font-small warning-color darken-2 mt-4 wow fadeIn">

        <!--Call to action-->
        <div class="pt-4 warning-color-dark" >
            
        </div>
        <!--/.Call to action-->

        <hr class="my-4">

        <!-- Social icons -->
        <div class="pb-4 warning-color">
            <a href="" target="_blank">
                <i class="fa fa-facebook mr-3"></i>
            </a>

            <a href="" target="_blank">
                <i class="fa fa-twitter mr-3"></i>
            </a>


            <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                <i class="fa fa-google-plus mr-3"></i>
            </a>
        </div>
        <!-- Social icons -->

        <!--Copyright-->
        <div class="footer-copyright py-3 warning-color">
            © 2018 Copyright:
            <a href="" target="_blank">equitycrm.com </a>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
    </script>


</body>

</html>