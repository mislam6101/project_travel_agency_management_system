<?php
include_once('admin/db_config.php');
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Travelin - Travel Tour Booking HTML Templates</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="css/plugin.css" rel="stylesheet" type="text/css">

    <!--Font Awesome-->
    
    <link rel="stylesheet" href="css/fontawesome.min.css" />

    <link rel="stylesheet" href="fonts/line-icons.css" type="text/css">
</head>

    <!-- header starts -->
    <?php include ("includes/header.php")?>
    <!-- header ends -->

    <!-- BreadCrumb Starts -->  
    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url(images/bg/bg1.jpg);">
        <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(images/shape8.png);"></div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3">Login</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Login</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends --> 

    <!-- login section starts -->
    <section class="login-register pt-6 pb-6">
        <div class="container">
            <?php
    
            if(isset($_REQUEST['click'])){
            extract($_REQUEST);
            $password = md5($password);
            $sql = "SELECT * FROM `clients` WHERE `email` = '$email' AND `create_pass` = '$password'";
            $record = $db->query($sql);
            $row = $record->fetch_object();
            if($record->num_rows > 0){
                $_SESSION['name'] = $row->name;
                $_SESSION['email'] = $row->email;
                //$_SESSION['image'] = $row->image;

                header('Location:index.php');
                
            }
            else{
                echo '<div class="alert alert-danger">Incorrect email or password</div>';
            }
            $db->close();
            }
            ?>
            <div class="log-main blog-full log-reg w-75 mx-auto">
                <div class="row">
                    <div>
                        <h3 class="text-center border-b pb-2">Login</h3>
                        <form method="post" action="" id="contactform3">
                            <div class="form-group mb-2">
                                <input type="email" name="email" class="form-control" id="fullname" placeholder="Email Address">
                            </div>
                            <div class="form-group mb-2">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                            </div>
                            <div class="form-group mb-2">
                                <input type="checkbox" class="custom-control-input" id="exampleCheck3">
                                <label class="custom-control-label mb-0" for="exampleCheck3">Remember me</label>
                                <a class="float-end" href="#">Lost your password?</a>
                            </div>
                            <div class="comment-btn mb-2 pb-2 text-center border-b">
                                <input type="submit" name="click" class="nir-btn" id="submit1" value="Login">
                            </div>
                            <p class="text-center">Don't have an account? <a href="register.php" class="theme">Register</a></p>
                        </form>
                        <hr class="log-reg-hr position-relative my-4 overflow-visible">
                        <div class="log-reg-button d-sm-flex align-items-center justify-content-between">
                            <button type="submit" class="btn btn-fb w-50 me-1">
                                <i class="fab fa-facebook"></i> Login with Facebook
                            </button>
                            <button type="submit" class="btn btn-google w-50 ms-1">
                                <i class="fab fa-google"></i> Login with Google
                            </button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- login section Ends -->

    <!-- footer starts -->
    <?php include ('includes/footer.php')?>
    <!-- footer ends -->
    
    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    <!-- search popup -->
    
    <!-- login registration modal -->


    <!-- *Scripts* -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fontawesome.min.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/particlerun.js"></script>
    <script src="js/plugin.js"></script>
    <!-- <script src="js/main.js"></script> -->
    <script src="js/custom-nav.js"></script>
</body>
</html>