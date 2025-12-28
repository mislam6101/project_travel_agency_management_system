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

    <!-- Preloader -->
    
    <!-- Preloader Ends -->

    <!-- header starts -->
    <?php include ("includes/header.php")?>
    <!-- header ends -->

    <!-- BreadCrumb Starts -->  
    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url(images/bg/bg1.jpg);">
        <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(images/shape8.png);"></div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3">Flights & Cruises</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"> 
                            <button type="button" class="btn btn-success btn-lg">Flights</button>
                             </a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="">
                            <button type="button" class="btn btn-success btn-lg">Cruises</button>
                            </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends --> 

    <!-- top Destination starts -->
    <section class="trending pt-6 pb-0 bg-lgrey">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="list-results d-flex align-items-center justify-content-between">
                        <div class="list-results-sort">
                            <p class="m-0">Showing 1-5 of 80 results</p>
                        </div>
                        <div class="click-menu d-flex align-items-center justify-content-between">
                            <div class="change-list f-active me-2"><a href="flight-list.html"><i class="fa fa-bars rounded"></i></a></div>
                            <div class="change-grid me-2"><a href="flight-grid.html"><i class="fa fa-th rounded"></i></a></div>
                            <div class="sortby d-flex align-items-center justify-content-between ml-2">
                                <select class="niceSelect">
                                    <option value="1" >Sort By</option>
                                    <option value="2">Average rating</option>
                                    <option value="3">Price: low to high</option>
                                    <option value="4">Price: high to low</option>
                                </select> 
                            </div>
                        </div>
                    </div>

                    <div class="flight-list">
                        <div class="flight-full">
                            <?php
                            $sql = "SELECT * FROM air_ticket ORDER BY id DESC";
                            $rawData = $db->query($sql);
                            while ($row = $rawData->fetch_object()):
                            ?>
                            <div class="item mb-2 border-all p-3 px-4 rounded">
                                <div class="row d-flex align-items-center justify-content-between">
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="item-inner-image text-start">
                                            <img src="admin/<?php echo $row->airline_logo; ?>" alt="image">
                                            <h5 class="mb-0"><?php echo $row->airlines;?></h5>
                                        </div>
                                    </div>    
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div class="item-inner">
                                        <div class="content">
                                            <h5 class="mb-0"><?php echo $row->deperture;?></h5>
                                        </div>
                                        </div>
                                    </div>    
                                    <div class="col-lg-2 col-md-2 col-sm-12"> 
                                        <div class="item-inner">
                                            <div class="content">
                                                <h3 class="mb-0"><?php echo $row->d_time;?></h3>
                                                <p class="mb-0 text-uppercase"><?php echo $row->d_airport_code;?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div class="item-inner flight-time">
                                        <p class="mb-0"><?php echo $row->a_time;?> <br><?php echo $row->transit;?></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="item-inner text-end">
                                            <p class="theme2 fs-4 fw-bold"><?php echo $row->price;?>৳</p>
                                            
                                            <form action="" method="post">
                                                <button type="submit" name="book" class="nir-btn-black">book</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="accordion accordion-flush border-t mt-1 pt-1" id="accordionflush">
                                            <div class="accordion-item overflow-hidden">
                                                <p class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button collapsed p-0 border-0 rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                      Flight Details
                                                    </button>
                                                </p>
                                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body p-0">
                                                        <div class="row flight-detail-wrap align-items-center border-t pt-1 mt-1" style="">
                                                            <div class="col-lg-4">
                                                                <div class="flight-date">
                                                                    <ul>
                                                                        <li><?php echo $row->seat_status;?></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="flight-detail-right">
                                                                    <h5><i class="fa fa-plane"></i> <?php echo $row->from;?></h5>
                                                                    <div class="flight-detail-info d-flex align-items-center p-2 py-3 bg-grey rounded mb-2">
                                                                        <ul>
                                                                            <li><?php echo $row->details;?></li>
                                                                        </ul>
                                                                    </div>
                                                                    <h5 class="mb-0"><?php echo $row->to;?></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                            <?php endwhile;
                            if(isset($_REQUEST['book'])){
                                if(isset($_SESSION)){
                                    $sql = "SELECT * FROM air_ticket ORDER BY id DESC";
                                    $rd = $db->query($sql);
                                    $row = $rd->fetch_object();
                                    $c_id = $_SESSION['id'];
                                    $c_name = $_SESSION['name'];
                                    $c_email = $_SESSION['email'];
                                    $c_nid_copy = $_SESSION['nid_copy'];
                                    $sql_ins = "INSERT INTO air_tick_req VALUES(NULL, '$c_id', '$c_name', '$c_email', '$c_nid_copy', NULL, '$row->from;', '$row->to', '$row->deperture', $row->price, 'Pendding', NULL)";
                                    $db->query($sql_ins);
                                }
                                else{
                                    header('Location:login.php');
                                }
                            }
                            $db->close();
                            ?>
                        </div> 
                        <div class="flight-btn text-center"><a href="flight-grid.html" class="nir-btn">Load More</a></div>
                    </div>
                </div>
                <div class="col-lg-4 ps-lg-4">
                    <div class="sidebar-sticky">
                        <div class="list-sidebar">
                            <div class="sidebar-item mb-4">
                                <div class="book-form w-100 bg-white box-shadow p-4 pb-1 z-index1 rounded">
                                    <div class="row d-flex align-items-center justify-content-between">
                                        <div class="col-lg-12 mb-2 text-center">
                                            <ul class="pb-2 mb-2 border-b">
                                                <li class="me-1 p-2 bg-grey d-inline-block rounded"><input type="radio"> Roundtrip</li>
                                                <li class="me-1 p-2 bg-grey d-inline-block rounded"><input type="radio"> One-way</li>
                                                <li class="p-2 bg-grey d-inline-block rounded"><input type="radio"> Multi-city</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <div class="input-box">
                                                    <label>Flying From</label>
                                                    <select class="niceSelect">
                                                        <option value="1">city or airport</option>
                                                        <option value="2">Argentina</option>
                                                        <option value="3">Belgium</option>
                                                        <option value="4">Canada</option>
                                                        <option value="5">Denmark</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <div class="input-box">
                                                    <label>Flying To</label>
                                                    <select class="niceSelect">
                                                        <option value="1">city or airport</option>
                                                        <option value="2">Argentina</option>
                                                        <option value="3">Belgium</option>
                                                        <option value="4">Canada</option>
                                                        <option value="5">Denmark</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <div class="input-box">
                                                    <label>Depart</label>
                                                    <input type="date" name="Depart">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <div class="input-box">
                                                    <label>Return</label>
                                                    <input type="date" name="Return">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <div class="input-box">
                                                    <label>Travellers</label>
                                                    <select class="niceSelect">
                                                        <option value="1">2 travellers</option>
                                                        <option value="2">5 travellers</option>
                                                        <option value="3">7 travellers</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-0 text-center">
                                                <a href="#" class="nir-btn w-100"><i class="fa fa-search mr-2"></i> Search
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-item mb-4">
                                <h3 class="">Price Range</h3>
                                <div class="range-slider mt-0">
                                    <div data-min="0" data-max="2000" data-unit="$" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">
                                        <span class="min-value">0 $</span> 
                                        <span class="max-value">20000 $</span>
                                        <div class="ui-slider-range ui-widget-header ui-corner-all full" style="left: 0%; width: 100%;"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- top Destination ends -->

    <!-- Discount action starts -->
    <section class="discount-action pb-14" style="background-image:url(images/section-bg2.png); background-position:center;"> 
        <div class="container">
            <div class="call-banner rounded pt-0 py-5">
                <div class="call-banner-inner w-75 px-5">
                    <div class="trend-content-main">
                        <div class="trend-content mb-5 pb-2">
                            <h5 class="mb-1 theme">Love Where Your're Going</h5>
                            <h2><a href="detail-fullwidth.html">Explore Your Life, <span class="theme1"> Travel Where
                                        You Want!</span></a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="video-button position-relative ms-lg-5 text-center text-lg-start">
                            <div class="call-button">
                                <button type="button" class="play-btn js-video-button" data-video-id="152879427" data-channel="vimeo">
                                    <i class="fa fa-play bg-blue"></i>
                                </button>
                            </div>
                            <div class="video-figure"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="white-overlay"></div>
        <div class="section-shape top-inherit bottom-0" style="background-image: url(images/shape6.png);"></div>
    </section>
    <!-- Discount action Ends -->

    <!-- partner starts -->
    <section class="our-partner pb-6 pt-6">
        <div class="container">
            <div class="section-title mb-6 w-75 mx-auto text-center">
                <h4 class="mb-1 theme1">Our Recommended Flights</h4>
                <h2 class="mb-1">Our Awesome <span class="theme">Flights</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
            <div class="row align-items-center partner-in partner-slider">
                <div class="col-md-3 col-sm-6">
                    <div class="partner-item p-4 py-2 rounded bg-lgrey border-all">
                        <img src="images/flights/flight_grid_2.png" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="partner-item p-4 py-2 rounded bg-lgrey border-all">
                        <img src="images/flights/flight_grid_3.png" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="partner-item p-4 py-2 rounded bg-lgrey border-all">
                        <img src="images/flights/flight_grid_4.png" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="partner-item p-4 py-2 rounded bg-lgrey border-all">
                        <img src="images/flights/flight_grid_2.png" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="partner-item p-4 py-2 rounded bg-lgrey border-all">
                        <img src="images/flights/flight_grid_3.png" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="partner-item p-4 py-2 rounded bg-lgrey border-all">
                        <img src="images/flights/flight_grid_4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- partner ends -->

    <!-- footer starts -->
    <?php include ("includes/footer.php")?>
    <!-- footer ends -->
    
    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    <!-- search popup -->
    <div id="search1">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <!-- login registration modal -->
    <div class="modal fade log-reg" id="exampleModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <div class="post-tabs">
                <!-- tab navs -->
                <ul class="nav nav-tabs nav-pills nav-fill" id="postsTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button aria-controls="login" aria-selected="false" class="nav-link active" data-bs-target="#login" data-bs-toggle="tab" id="login-tab" role="tab" type="button">Login</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button aria-controls="register" aria-selected="true" class="nav-link" data-bs-target="#register" data-bs-toggle="tab" id="register-tab" role="tab" type="button">Register</button>
                    </li>
                </ul>
                <!-- tab contents -->
                <div class="tab-content blog-full" id="postsTabContent">
                    <!-- popular posts -->
                    <div aria-labelledby="login-tab" class="tab-pane fade active show" id="login" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-6">
                               <div class="blog-image rounded">
                                    <a href="#" style="background-image: url(images/trending/trending5.jpg);"></a>
                                </div> 
                            </div>
                            <div class="col-lg-6">
                                <h4 class="text-center border-b pb-2">Login</h4>
                                <div class="log-reg-button d-flex align-items-center justify-content-between">
                                    <button type="submit" class="btn btn-fb">
                                        <i class="fab fa-facebook"></i> Login with Facebook
                                    </button>
                                    <button type="submit" class="btn btn-google">
                                        <i class="fab fa-google"></i> Login with Google
                                    </button>
                                </div>
                                <hr class="log-reg-hr position-relative my-4 overflow-visible">
                                <form method="post" action="#" name="contactform" id="contactform">
                                    <div class="form-group mb-2">
                                        <input type="text" name="user_name" class="form-control" id="fname" placeholder="User Name or Email Address">
                                    </div>
                                    <div class="form-group mb-2">
                                        <input type="password" name="password_name" class="form-control" id="lpass" placeholder="Password">
                                    </div>
                                    <div class="form-group mb-2">
                                        <input type="checkbox" class="custom-control-input" id="exampleCheck">
                                        <label class="custom-control-label mb-0" for="exampleCheck1">Remember me</label>
                                        <a class="float-end" href="#">Lost your password?</a>
                                    </div>
                                    <div class="comment-btn mb-2 pb-2 text-center border-b">
                                        <input type="submit" class="nir-btn w-100" id="submit" value="Login">
                                    </div>
                                    <p class="text-center">Don't have an account? <a href="#" class="theme">Register</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Recent posts -->
                    <div aria-labelledby="register-tab" class="tab-pane fade" id="register" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-6">
                               <div class="blog-image rounded">
                                    <a href="#" style="background-image: url(images/trending/trending5.jpg);"></a>
                                </div> 
                            </div>
                            <div class="col-lg-6">
                                <h4 class="text-center border-b pb-2">Register</h4>
                                <div class="log-reg-button d-flex align-items-center justify-content-between">
                                    <button type="submit" class="btn btn-fb">
                                        <i class="fab fa-facebook"></i> Login with Facebook
                                    </button>
                                    <button type="submit" class="btn btn-google">
                                        <i class="fab fa-google"></i> Login with Google
                                    </button>
                                </div>
                                <hr class="log-reg-hr position-relative my-4 overflow-visible">
                                <form method="post" action="#" name="contactform1" id="contactform1">
                                    <div class="form-group mb-2">
                                        <input type="text" name="user_name" class="form-control" id="fname1" placeholder="User Name">
                                    </div>
                                    <div class="form-group mb-2">
                                        <input type="text" name="user_name" class="form-control" id="femail" placeholder="Email Address">
                                    </div>
                                    <div class="form-group mb-2">
                                        <input type="password" name="password_name" class="form-control" id="lpass1" placeholder="Password">
                                    </div>
                                    <div class="form-group mb-2">
                                        <input type="password" name="password_name" class="form-control" id="lrepass" placeholder="Re-enter Password">
                                    </div>
                                    <div class="form-group mb-2 d-flex">
                                        <input type="checkbox" class="custom-control-input" id="exampleCheck1">
                                        <label class="custom-control-label mb-0 ms-1 lh-1" for="exampleCheck1">I have read and accept the Terms and Privacy Policy?</label>
                                    </div>
                                    <div class="comment-btn mb-2 pb-2 text-center border-b">
                                        <input type="submit" class="nir-btn w-100" id="submit1" value="Register">
                                    </div>
                                    <p class="text-center">Already have an account? <a href="#" class="theme">Login</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>


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