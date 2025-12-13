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
    <?php include("includes/header.php") ?>
    <!-- header ends -->


    <!-- BreadCrumb Starts -->  
    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url(images/bg/bg1.jpg);">
        <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(images/shape8.png);"></div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3">Blog List</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog List Fullwidth</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends --> 

    <!-- blog starts -->
    <section class="blog">
        <div class="container">
            <div class="listing-inner px-5">
                <div class="list-results d-flex align-items-center justify-content-between">
                    <div class="list-results-sort">
                        <p class="m-0">Showing 1-5 of 80 results</p>
                    </div>
                    <div class="click-menu d-flex align-items-center justify-content-between">
                        <div class="change-list f-active me-2 rounded overflow-hidden"><a href="post-list-1.html"><i class="fa fa-bars"></i></a></div>
                        <div class="change-grid me-2 rounded overflow-hidden"><a href="post-grid-1.html"><i class="fa fa-th bg-grey"></i></a></div>
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
                <div class="blog-full mb-4 border-b bg-white box-shadow p-4 rounded border-all">
                    <div class="row">
                        <?php
                        $sql = "SELECT * FROM blogs ORDER BY id DESC";
                        $rawData = $db->query($sql);
                        while ($row = $rawData->fetch_object()):
                        ?>
                        <div class="col-lg-5 col-md-4 blog-height">
                            <div class="blog-image rounded">
                                <a href="#" style="background-image: url(admin/<?php echo $row->photo; ?>);"></a>
                            </div> 
                        </div>
                        <div class="col-lg-7 col-md-8">
                            <div class="blog-content">
                                <h5 class="theme mb-1"><?php echo $row->catagory; ?></h5>
                                
                                <h3 class="mb-2"><a href="detail-2.html" class=""><?php echo $row->title; ?></a></h3>
                                <p class="date-cats mb-2">
                                    
                                    <a href="post-grid-2.html" class="me-2"><i class="fa fa-calendar-alt"></i>&nbsp&nbsp<?php echo $row->blog_date; ?></a>
                                </p> 
                                <p class="mb-0"><?php echo $row->body; ?></p>  
                                
                            </div>
                        </div>
                        <?php
                    endwhile;
                    $db->close();
                    ?>
                    </div>
                </div>

                <div class="pagination-main text-center">
                    <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- blog Ends -->  

    <!-- top deal starts -->
    <section class="top-post pt-0 pb-4">
        <div class="container">
            <div class="row align-items-center justify-content-between mb-6 ">
                <div class="col-lg-7">
                    <div class="section-title text-center text-lg-start">
                        <h4 class="mb-1 theme1">Our Articles & Blogs</h4>
                        <h2 class="mb-1">Some Related <span class="theme">Posts</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris. </p>
                    </div>
                </div>
                <div class="col-lg-5">
                    
                </div>
            </div>
            <div class="row item-slider">
                <div class="col-lg-4">
                    <div class="trend-item box-shadow bg-white mb-4 rounded overflow-hidden">
                        <div class="trend-image">
                            <img src="images/trending/trending10.jpg" alt="image">
                        </div>
                        <div class="trend-content-main p-4">
                            <div class="trend-content">
                                <h5 class="theme mb-1">Technology</h5>
                                <h4><a href="detail-1.html">How a developer duo at Deutsche Bank keep remote alive.</a></h4>
                                <p class="mb-3">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                </p>
                                <div class="entry-meta d-flex align-items-center justify-content-between">
                                    <div class="entry-author">
                                        <img src="images/reviewer/2.jpg" alt="" class="rounded-circle me-1">
                                        <span>Sollmond Nell</span>
                                    </div>
                                    <div class="entry-button d-flex align-items-center">
                                        <a href="#" class="nir-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="trend-item box-shadow bg-white mb-4 rounded overflow-hidden">
                        <div class="trend-image">
                            <img src="images/trending/trending12.jpg" alt="image">
                        </div>
                        <div class="trend-content-main p-4">
                            <div class="trend-content">
                                <h5 class="theme mb-1">Inspiration</h5>
                                <h4><a href="detail-1.html">Inspire Runner with Autism Graces of Women's Running</a></h4>
                                <p class="mb-3">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                </p>
                                <div class="entry-meta d-flex align-items-center justify-content-between">
                                    <div class="entry-author">
                                        <img src="images/reviewer/1.jpg" alt="" class="rounded-circle me-1">
                                        <span>David Scott</span>
                                    </div>
                                    <div class="entry-button d-flex align-items-center">
                                        <a href="#" class="nir-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="trend-item box-shadow bg-white mb-4 rounded overflow-hidden">
                        <div class="trend-image">
                            <img src="images/trending/trending13.jpg" alt="image">
                        </div>
                        <div class="trend-content-main p-4">
                            <div class="trend-content">
                                <h5 class="theme mb-1">Public</h5>
                                <h4><a href="detail-1.html">Services To Grow Your Business Sell Affiliate Products</a></h4>
                                <p class="mb-3">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                </p>
                                <div class="entry-meta d-flex align-items-center justify-content-between">
                                    <div class="entry-author">
                                        <img src="images/reviewer/3.jpg" alt="" class="rounded-circle me-1">
                                        <span>John Bolden</span>
                                    </div>
                                    <div class="entry-button d-flex align-items-center">
                                        <a href="#" class="nir-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="trend-item box-shadow bg-white mb-4 rounded overflow-hidden">
                        <div class="trend-image">
                            <img src="images/trending/trending12.jpg" alt="image">
                        </div>
                        <div class="trend-content-main p-4">
                            <div class="trend-content">
                                <h5 class="theme mb-1">Inspiration</h5>
                                <h4><a href="detail-1.html">Inspire Runner with Autism Graces of Women's Running</a></h4>
                                <p class="mb-3">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                </p>
                                <div class="entry-meta d-flex align-items-center justify-content-between">
                                    <div class="entry-author">
                                        <img src="images/reviewer/1.jpg" alt="" class="rounded-circle me-1">
                                        <span>David Scott</span>
                                    </div>
                                    <div class="entry-button d-flex align-items-center">
                                        <a href="#" class="nir-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- top deal ends -->

    <!-- footer starts -->
    <?php include("includes/footer.php") ?>
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
    <script src="js/main.js"></script>
    <script src="js/custom-nav.js"></script>
</body>
</html>