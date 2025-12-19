<?php
include_once('admin/db_config.php');
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Travelin - Travel Tour Booking HTML Templates</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!--Custom CSS-->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!--Plugin CSS-->
    <link href="css/plugin.css" rel="stylesheet" type="text/css" />

    <!--Font Awesome-->

    <link rel="stylesheet" href="css/fontawesome.min.css" />

    <link rel="stylesheet" href="fonts/line-icons.css" type="text/css" />
  </head>
  <body>
    <!-- Preloader -->
    
    <!-- Preloader Ends -->

    <!-- header starts -->
    <?php include("includes/header.php") ?>
    <!-- header ends -->

    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url(images/bg/bg1.jpg)">
      <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(images/shape8.png)"></div>
      <div class="breadcrumb-outer">
        <div class="container">
          <div class="breadcrumb-content text-center">
            <h1 class="mb-3">About Us</h1>
            <nav aria-label="breadcrumb" class="d-block">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- about-us starts -->
    <section class="about-us pt-6" style="background-image: url(images/background_pattern.png); background-position: bottom right">
      <div class="container">
        <div class="about-image-box">
          <div class="row d-flex align-items-center justify-content-between">
            <div class="col-lg-6 ps-4">
              <div class="about-content text-center text-lg-start">
                <?php 
                $sql = "SELECT * FROM about_us";
                $rawData = $db->query($sql);
                $row = $rawData->fetch_object();
                ?>
                <h4 class="theme d-inline-block mb-0">Get To Know Us</h4>
                <h2 class="border-b mb-2 pb-1"><?php echo $row->title; ?></h2>
                <p class="border-b mb-2 pb-2">
                  <?php echo $row->msg; ?>
                </p>
                <div class="about-listing">
                  <ul class="d-flex justify-content-between">
                    <li><i class="icon-location-pin theme"></i> Tour Guide</li>
                    <li><i class="icon-briefcase theme"></i> Friendly Price</li>
                    <li><i class="icon-folder theme"></i> Reliable Tour Package</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4 pe-4">
              <div class="about-image" style="animation: none; background: transparent">
                <img src="<?php echo $row->photo; ?>" alt="" />
              </div>
            </div>
            <div class="col-lg-12">
              <!-- Counter -->
              <div class="counter-main w-75 float-start z-index3 position-relative">
                <div class="counter p-4 pb-0 box-shadow bg-white rounded mt-minus">
                  <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                      <div class="counter-item border-end pe-4">
                        <div class="counter-content">
                          <h2 class="value mb-0 theme">20</h2>
                          <span class="m-0">Years Experiences</span>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                      <div class="counter-item border-end pe-4">
                        <div class="counter-content">
                          <h2 class="value mb-0 theme">530</h2>
                          <span class="m-0">Tour Packages</span>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                      <div class="counter-item border-end pe-4">
                        <div class="counter-content">
                          <h2 class="value mb-0 theme">850</h2>
                          <span class="m-0">Happy Customers</span>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                      <div class="counter-item">
                        <div class="counter-content">
                          <h2 class="value mb-0 theme">320</h2>
                          <span class="m-0">Award Winning</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Counter -->
            </div>
          </div>
        </div>
      </div>
      <div class="white-overlay"></div>
    </section>
    <!-- about-us ends -->

    <!-- about-us starts -->
    <section class="about-us pb-0">
      <div class="section-shape section-shape1" style="background-image: url(images/shape8.png)"></div>
      <div class="container">
        <div class="section-title mb-6 w-50 mx-auto text-center">
          <h4 class="mb-1 theme1">Core Features</h4>
          <h2 class="mb-1">Find <span class="theme">Travel Perfection</span></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
        </div>

        <!-- why us starts -->
        <div class="why-us">
          <div class="why-us-box">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                  <div class="why-us-content">
                    <div class="why-us-icon mb-1">
                      <i class="icon-flag theme"></i>
                    </div>
                    <h4><a href="about.html">Tell Us What You want To Do</a></h4>
                    <p class="mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                    <p class="mb-0 theme">100+ Reviews</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                  <div class="why-us-content">
                    <div class="why-us-icon mb-1">
                      <i class="icon-location-pin theme"></i>
                    </div>
                    <h4><a href="about.html">Share Your Travel Locations</a></h4>
                    <p class="mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                    <p class="mb-0 theme">100+ Reviews</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                  <div class="why-us-content">
                    <div class="why-us-icon mb-1">
                      <i class="icon-directions theme"></i>
                    </div>
                    <h4><a href="about.html">Share Your Travel Preference</a></h4>
                    <p class="mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                    <p class="mb-0 theme">100+ Reviews</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                  <div class="why-us-content">
                    <div class="why-us-icon mb-1">
                      <i class="icon-compass theme"></i>
                    </div>
                    <h4><a href="about.html">Here 100% Trusted Tour Agency</a></h4>
                    <p class="mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                    <p class="mb-0 theme">100+ Reviews</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- why us ends -->
      </div>
    </section>
    <!-- about-us ends -->

    <!-- our teams starts -->
    <section class="our-team pb-0 pt-6">
      <div class="container">
        <div class="section-title mb-6 w-75 mx-auto text-center">
          <h4 class="mb-1 theme1">Tour Guides</h4>
          <h2 class="mb-1">Meet Our <span class="theme">Excellent Guides</span></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
        </div>
        <div class="team-main">
          <div class="row shop-slider">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
              <div class="team-list rounded">
                <div class="team-image">
                  <img src="images/team/img1.jpg" alt="team" />
                </div>
                <div class="team-content text-center p-3 bg-theme">
                  <h4 class="mb-0 white">Salmon Thuir</h4>
                  <p class="mb-0 white">Senior Agent</p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
              <div class="team-list rounded">
                <div class="team-image">
                  <img src="images/team/img2.jpg" alt="team" />
                </div>
                <div class="team-content text-center p-3 bg-theme">
                  <h4 class="mb-0 white">Horke Pels</h4>
                  <p class="mb-0 white">Head Officer</p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
              <div class="team-list rounded">
                <div class="team-image">
                  <img src="images/team/img4.jpg" alt="team" />
                </div>
                <div class="team-content text-center p-3 bg-theme">
                  <h4 class="mb-0 white">Solden kalos</h4>
                  <p class="mb-0 white">Supervisor</p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
              <div class="team-list rounded">
                <div class="team-image">
                  <img src="images/team/img3.jpg" alt="team" />
                </div>
                <div class="team-content text-center p-3 bg-theme">
                  <h4 class="mb-0 white">Nelson Bam</h4>
                  <p class="mb-0 white">Quality Assurance</p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
              <div class="team-list rounded">
                <div class="team-image">
                  <img src="images/team/img4.jpg" alt="team" />
                </div>
                <div class="team-content text-center bg-theme p-3">
                  <h4 class="mb-0 white">Cacics Coold</h4>
                  <p class="mb-0 white">Asst. Manager</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- our teams Ends -->

    <!-- testomonial start -->
    <section class="testimonial pt-9" style="background-image: url(images/testimonial.png)">
      <div class="container">
        <div class="section-title mb-6 text-center w-75 mx-auto">
          <h4 class="mb-1 theme1">Our Testimonails</h4>
          <h2 class="mb-1">Good Reviews By <span class="theme">Clients</span></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-5 pe-4">
            <div class="testimonial-image">
              <img src="images/travel2.png" alt="" />
            </div>
          </div>
          <div class="col-lg-7 ps-4">
            <div class="row review-slider">
              <?php
              $sql2 = "SELECT * FROM client_feedback WHERE client_feedback.status = 'Confirmed'";
              $rd = $db->query($sql2);
              while($row2 = $rd->fetch_object()):
              ?>
              <div class="col-sm-4 item">
                <div class="testimonial-item1 rounded">
                  <div class="author-info mt-2 d-flex align-items-center mb-4">
                    <a href="#"><img src="admin/<?php echo $row2->photo; ?>" alt="" /></a>
                    <div class="author-title ms-3">
                      <h5 class="m-0 theme"><?php echo $row2->name; ?></h5>
                    </div>
                  </div>
                  <div class="details">
                    <p class="m-0">
                      <i class="fa fa-quote-left me-2 fs-1"></i><?php echo $row2->msg; ?>
                    </p>
                  </div>
                </div>
              </div>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- testimonial ends -->

    <!-- partner starts -->
    <div class="our-partner pt-0 pb-6">
      <div class="container">
        <div class="partners_inner">
          <ul>
            <li><img src="images/cl-5.png" alt="" /></li>
            <li><img src="images/cl-2.png" alt="" /></li>
            <li><img src="images/cl-3.png" alt="" /></li>
            <li><img src="images/cl-4.png" alt="" /></li>
            <li><img src="images/cl-5.png" alt="" /></li>
            <li><img src="images/cl-3.png" alt="" /></li>
            <li><img src="images/cl-2.png" alt="" /></li>
            <li><img src="images/cl-1.png" alt="" /></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- partner ends -->

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
                  <button
                    aria-controls="login"
                    aria-selected="false"
                    class="nav-link active"
                    data-bs-target="#login"
                    data-bs-toggle="tab"
                    id="login-tab"
                    role="tab"
                    type="button"
                  >
                    Login
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    aria-controls="register"
                    aria-selected="true"
                    class="nav-link"
                    data-bs-target="#register"
                    data-bs-toggle="tab"
                    id="register-tab"
                    role="tab"
                    type="button"
                  >
                    Register
                  </button>
                </li>
              </ul>
              <!-- tab contents -->
              <div class="tab-content blog-full" id="postsTabContent">
                <!-- popular posts -->
                <div aria-labelledby="login-tab" class="tab-pane fade active show" id="login" role="tabpanel">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="blog-image rounded">
                        <a href="#" style="background-image: url(images/trending/trending5.jpg)"></a>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <h4 class="text-center border-b pb-2">Login</h4>
                      <div class="log-reg-button d-flex align-items-center justify-content-between">
                        <button type="submit" class="btn btn-fb"><i class="fab fa-facebook"></i> Login with Facebook</button>
                        <button type="submit" class="btn btn-google"><i class="fab fa-google"></i> Login with Google</button>
                      </div>
                      <hr class="log-reg-hr position-relative my-4 overflow-visible" />
                      <form method="post" action="#" name="contactform" id="contactform">
                        <div class="form-group mb-2">
                          <input type="text" name="user_name" class="form-control" id="fname" placeholder="User Name or Email Address" />
                        </div>
                        <div class="form-group mb-2">
                          <input type="password" name="password_name" class="form-control" id="lpass" placeholder="Password" />
                        </div>
                        <div class="form-group mb-2">
                          <input type="checkbox" class="custom-control-input" id="exampleCheck" />
                          <label class="custom-control-label mb-0" for="exampleCheck1">Remember me</label>
                          <a class="float-end" href="#">Lost your password?</a>
                        </div>
                        <div class="comment-btn mb-2 pb-2 text-center border-b">
                          <input type="submit" class="nir-btn w-100" id="submit" value="Login" />
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
                        <a href="#" style="background-image: url(images/trending/trending5.jpg)"></a>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <h4 class="text-center border-b pb-2">Register</h4>
                      <div class="log-reg-button d-flex align-items-center justify-content-between">
                        <button type="submit" class="btn btn-fb"><i class="fab fa-facebook"></i> Login with Facebook</button>
                        <button type="submit" class="btn btn-google"><i class="fab fa-google"></i> Login with Google</button>
                      </div>
                      <hr class="log-reg-hr position-relative my-4 overflow-visible" />
                      <form method="post" action="#" name="contactform1" id="contactform1">
                        <div class="form-group mb-2">
                          <input type="text" name="user_name" class="form-control" id="fname1" placeholder="User Name" />
                        </div>
                        <div class="form-group mb-2">
                          <input type="text" name="user_name" class="form-control" id="femail" placeholder="Email Address" />
                        </div>
                        <div class="form-group mb-2">
                          <input type="password" name="password_name" class="form-control" id="lpass1" placeholder="Password" />
                        </div>
                        <div class="form-group mb-2">
                          <input type="password" name="password_name" class="form-control" id="lrepass" placeholder="Re-enter Password" />
                        </div>
                        <div class="form-group mb-2 d-flex">
                          <input type="checkbox" class="custom-control-input" id="exampleCheck1" />
                          <label class="custom-control-label mb-0 ms-1 lh-1" for="exampleCheck1">I have read and accept the Terms and Privacy Policy?</label>
                        </div>
                        <div class="comment-btn mb-2 pb-2 text-center border-b">
                          <input type="submit" class="nir-btn w-100" id="submit1" value="Register" />
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
