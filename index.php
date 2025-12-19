<?php include_once ('admin/db_config.php');
session_start(); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Travelars of Destination - TOD</title>
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
    <style>
      .nir-btn{
        background: red;
      }
    </style>
  </head>
  <body class="home-eight">
    <!-- Preloader -->
    <!-- <div id="preloader">
      <div id="status"></div>
    </div> -->
    <!-- Preloader Ends -->

    <!-- header starts -->
    <?php include ("includes/header.php")?>
    <!-- header ends -->

    <!-- banner starts -->
    <section class="banner overflow-hidden">
      <div class="slider">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php 
            $sql7 = "SELECT * FROM gallery";
            $rawData7 = $db->query($sql7);
            while($row7 = $rawData7->fetch_object()):
            ?>
            <div class="swiper-slide">
              <div class="slide-inner">
                <div class="slide-image" style="background-image: url(admin/<?php echo $row7->photo; ?>)"></div>
                <div class="soft-overlay"></div>
              </div>
            </div>
          <?php endwhile; ?>
          </div>
        </div>
      </div>
      <!-- Add Arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

      <div class="banner-content position-absolute">
        <br>
        <div class="entry-meta mb-0">
          <span class="entry-category"><a href="tour-grid.html" class="white"> Travelars of Destination</a></span>
        </div><br>
        <h1 class="mb-0"><a href="tour-single.html" class="white">Plan your dream vacation</a></h1>
      </div>
    </section>
    <!-- banner ends -->

    <!-- top Destination starts -->
    <section class="trending" style="background-image: url(images/shape-1.png); background-position: center">
      <div class="container-xxl">
        <div class="section-title mb-6 w-75 mx-auto text-center">
          <h4 class="mb-1 theme1">Top Destinations</h4>
          <h2 class="mb-1">Explore <span class="theme">Top Destinations</span></h2>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-12">
            <div class="top-dscp">
              <div class="cards-container">
                <?php
                $sql6 = "SELECT * FROM top_destinations";
                $rawData6 = $db->query($sql6);
                while($row6 = $rawData6->fetch_object):
                ?>
                <div class="card" style="background-image: url('admin/<?php echo $row6->photo; ?>')">
                  <a href="#">
                    <div class="card-content">
                      <h4><?php echo $row6->country; ?></h4>
                      <h2><?php echo $row6->city; ?></h2>
                    </div>
                    <div class="soft-overlay"></div>
                  </a>
                </div>
                <?php endwhile; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- top Destination ends -->

    <!-- about-us starts -->
    <section class="about-us-tv overflow-hidden">
      <div class="container">
        <!-- why us starts -->
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-12">
            <?php
            $sql5 = "SELECT * FROM about_home";
            $rawData5 = $db->query($sql5);
            $row5 = $rawData5->fetch_object();
            ?>
            <div class="about_us__ot d-flex justify-content-center position-relative mb-5 mb-lg-0">
              <img src="admin/<?php echo $row5->fst_photo ; ?>" class="aa__img1" alt="" />
              <img src="admin/<?php echo $row5->lst_photo ; ?>" class="aa__img2" alt="" />
              <span><?php echo $row5->experience ; ?> Years of Experience</span>
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="d-flex flex-column">
              <h4 class="theme mb-0">About Us</h4>
              <h2 class="fw-bold"><?php echo $row5->title ; ?></h2>

              <p class="border-b mb-2 pb-2">
                <?php echo $row5->msg ; ?>
              </p>
              <div class="mt-4">
                <a href="tour_packages.php" class="nir-btn">Discover Now</a>
              </div>
            </div>
          </div>
        </div>

        <!-- why us ends -->
      </div>
    </section>
    <!-- about-us ends -->

    <!-- Last Minute Deal Starts -->
    <section class="trending">
      <div class="container">
        <div class="section-title mb-6 w-75 mx-auto text-center">
          <h4 class="mb-1 theme1">Popular places</h4>
          <h2 class="mb-1">Explore <span class="theme">New listings </span></h2>
        </div>
        <div class="trend-box">
          <div class="row">
            <div class="col-lg-12">
              <div class="row item-slider2 slick_arrows">
                <?php
                $sql4 = "SELECT * FROM package ORDER BY id DESC";
                $rawData4 = $db->query($sql4);
                while ($row4 = $rawData4->fetch_object()):
                ?>
                <div class="col-lg-3 col-md-6">
                  <div class="trend-item rounded box-shadow border">
                    <div class="trend-image position-relative m-2 rounded">
                      <img style="width : 100%; height : 150px" src="admin/<?php echo $row4->package_photo; ?>" alt="image" class="" />
                    </div>
                    <div class="trend-content p-3 position-relative bg-white">
                      <h6 class="theme mb-1"><i class="flaticon-location-pin"></i><?php echo $row4->country; ?></h6>
                      <h4 class="mb-1">Explore <?php echo $row4->title; ?></h4>
                      <div class="d-flex align-items-center gap-4 mb-1">
                        <div class="rating-main d-inline-flex align-items-center gap-1 fs-7">
                          <div class="rating">
                            <span class="fa fa-star checked theme1"></span>
                          </div>
                          <span>4.5</span>
                        </div>
                        <div class="px-3 py-1 rounded fs-7">
                          <div class="entry-author">
                            <i class="icon-calendar theme1"></i>
                            <span class=""> <?php echo $row4->time_length; ?> Tours</span>
                          </div>
                        </div>
                      </div>
                      <div class="entry-meta">
                        <div class="entry-author d-flex align-items-center fs-8">
                          <p class="mb-0"><span class="theme fw-bold fs-6"> <?php echo $row4->price; ?>৳</span> / Per person</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endwhile; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Last Minute Deal Ends -->

    <!-- Discount action starts -->
    
    <!-- Discount action Ends -->


    <section class="why-choose-us pb-0" style="background-image: url(images/sticker.png)">
      <div class="container">
        <div class="section-title mb-6 w-50 mx-auto text-center">
          <h5 class="theme1">Why Choose Us</h5>
          <h2>Your Trusted <span class="theme">Travel Partner</span></h2>
          <p>Leading The Way In Small Group Adventures For Over 20 Years. Discover How We're Redefining The Future Of Travel.</p>
        </div>
        <div class="row justify-content-center align-items-start">
          <div class="col-md-4">
            <div class="d-flex flex-column gap-5">
              <div class="feature-box fbox-one d-flex justify-content-start align-items-center flex-row-reverse gap-3 text-end bg-lblue mb-3 px-3 py-2">
                <div class="feature-icon d-inline-flex p-3 bg-lblue2 white rounded-circle"><i class="fa fa-bell"></i></div>
                <div>
                  <h5>24/7 Support</h5>
                  <p>Tailor-made itineraries to suit your preferences and needs.</p>
                </div>
              </div>
              <div class="feature-box d-flex justify-content-start align-items-center flex-row-reverse gap-3 text-end bg-lyellow mt-3 px-3 py-2">
                <div class="feature-icon d-inline-flex p-3 bg-lyellow2 white rounded-circle"><i class="fa fa-check"></i></div>
                <div>
                  <h5>Trusted Service</h5>
                  <p>Tailor-made itineraries to suit your preferences and needs.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 d-flex justify-content-center">
            <img src="images/girl-1.png" alt="Traveler" class="traveler-img w-75" />
          </div>
          <div class="col-md-4">
            <div class="d-flex flex-column gap-5">
              <div class="feature-box fbox-three d-flex justify-content-start align-items-center gap-3 bg-lyellow mb-3 px-3 py-2">
                <div class="feature-icon d-inline-flex p-3 bg-lyellow2 white rounded-circle"><i class="fa fa-shopping-bag"></i></div>
                <div>
                  <h5>Tailored Itineraries</h5>
                  <p>Tailor-made itineraries to suit your preferences and needs.</p>
                </div>
              </div>
              <div class="feature-box d-flex justify-content-start align-items-center gap-3 bg-lgreen mt-3 px-3 py-2">
                <div class="feature-icon d-inline-flex p-3 bg-lgreen2 white rounded-circle"><i class="fa fa-gift"></i></div>
                <div>
                  <h5>Exclusive Offers</h5>
                  <p>Tailor-made itineraries to suit your preferences and needs.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-4 justify-content-center">
          <div class="col-md-4">
            <div class="feature-box text-center bg-lblue px-3 py-2 mx-0">
              <div class="feature-icon d-inline-flex p-3 mb-2 bg-lblue2 white rounded-circle"><i class="fa fa-map"></i></div>
              <h5>Easy Bookings</h5>
              <p>Tailor-made itineraries to suit your preferences</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- testomonial start -->
    <section class="testimonial pb-0" style="background-image:url(images/testimonial.png)">
        <div class="container"> 
            <div class="section-title mb-6 text-center w-75 mx-auto">
                    <h4 class="mb-1 theme1">Our Testimonails</h4>
                    <h2 class="mb-1">Good Reviews By <span class="theme">Clients</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                </div>
            <div class="row align-items-center">
                <div class="col-lg-7 pe-lg-4">
                    <div class="row review-slider">
                      <?php
                      $sql2 = "SELECT * FROM client_feedback WHERE client_feedback.status = 'Confirmed'";
                      $rd = $db->query($sql2);
                      while($row2 = $rd->fetch_object()):
                      ?>
                        <div class="col-sm-4 item">
                            <div class="testimonial-item1 rounded">
                                <div class="author-info d-flex align-items-center mb-4">
                                    <a href="#"><img src="admin/<?php echo $row2->photo; ?>" alt=""></a>
                                    <div class="author-title ms-3">
                                        <h5 class="m-0 theme"><?php echo $row2->name; ?></h5>
                                        <span>Supervisor</span>
                                    </div>
                                </div>
                                <div class="details">
                                    <p class="m-0"><i class="fa fa-quote-left me-2 fs-1"></i><?php echo $row2->msg; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="col-lg-5 ps-lg-4">
                    <div class="testimonial-image">
                        <img src="images/testi.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial ends --> 

    <!-- Faq starts-->
    
    <!-- Faq Ends -->

    <!-- recent-articles starts -->
    <section class="trending recent-articles pt-0 pb-6">
      <div class="container">
        <div class="section-title mb-6 w-75 mx-auto text-center">
          <h4 class="mb-1 theme1">Our Blogs Offers</h4>
          <h2 class="mb-1">Recent <span class="theme">Articles & Posts</span></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
        </div>
        <div class="recent-articles-inner">
          <div class="row blog-slider slick_arrows">
            <?php
            $sql3 = "SELECT * FROM blogs ORDER BY id DESC";
            $rawData3 = $db->query($sql3);
            while ($row3 = $rawData3->fetch_object()):
            ?>
            <div class="col-lg-3 col-md-6">
              <div class="trend-item box-shadow bg-white p-2 mb-4 rounded">
                <div class="trend-image rounded">
                  <img src="admin/<?php echo $row3->photo; ?>" alt="image" />
                </div>
                <div class="trend-content-main p-2">
                  <div class="trend-content">
                    <div class="d-flex justify-content-between align-items-center py-1">
                      <!-- <span class="d-inline-flex align-items-center gap-1 fs-9"> <i class="icon-user theme"></i> By Howard Jacks </span> -->
                      <span class="d-inline-flex align-items-center gap-1 fs-9"> <i class="icon-calendar theme"></i><?php echo $row->blog_date; ?> </span>
                    </div>
                    <h5 class="mb-0"><a href="detail-1.html"><?php echo $row->title; ?></a></h5>
                    <div class="d-flex justify-content-between align-items-center mt-2 pt-2 border-top border-light">
                      <button class="nir-btn fs-8 px-3 py-1">Read More</button>
                      <span class="d-inline-flex align-items-center theme fs-8 gap-1"><i class="fa fa-comments"></i>0 Comments</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- recent-articles ends -->

    <!-- footer starts -->
    <?php include ('includes/footer.php')?>
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
    <script src="js/custom-swiper2.js"></script>
    <script src="js/custom-nav.js"></script>
    <script>
      // Check if a start date already exists in localStorage
      let startDate = localStorage.getItem("startDate");

      if (!startDate) {
        // If not, set today's date as the start date
        const now = new Date();
        localStorage.setItem("startDate", now.toISOString());
        startDate = now.toISOString();
      }

      // Calculate 7 days after the start date
      const countDownDate = new Date(startDate);
      countDownDate.setDate(countDownDate.getDate() + 120);

      const countdownFunction = setInterval(function () {
        const now = new Date().getTime();
        const distance = countDownDate.getTime() - now;

        // Time calculations
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result
        document.getElementById("days").innerText = days;
        document.getElementById("hours").innerText = hours;
        document.getElementById("minutes").innerText = minutes;
        document.getElementById("seconds").innerText = seconds;

        // If countdown expired
        if (distance < 0) {
          clearInterval(countdownFunction);
          document.querySelector(".timer").innerHTML = "EXPIRED";
        }
      }, 1000);
    </script>
  </body>
</html>
