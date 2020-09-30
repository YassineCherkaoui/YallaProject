<?php
include('action.php')
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="assets/css/steps.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
<link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">

<link href="assets/css/style.css" rel="stylesheet">

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="index.php">YALLA</a></h1>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <!-- <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#team">Team</a></li> -->
                    <!-- <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
                    <!-- <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul> -->
                    <!-- </li> -->
                    <!-- <li><a href="#contact">Contact</a></li> -->
                    <li><a href="Steps.html">Start A new Groupe</a></li>

                </ul>
            </nav><!-- .nav-menu -->

            <a href="#about" class="get-started-btn scrollto">Get Started</a>

        </div>
    </header><!-- End Header -->
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Yalla groups meet locally, in person and online. We'll connect you with people in your area,
                        and more can join you online.</h1>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->
    <div class="blink"></div>

    <!-- form Start -->
    <div class="multisteps-form">
        <!--progress bar-->
        <div class="row">
            <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
                <div class="multisteps-form__progress">
                    <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">Location</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Address">Discription</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Order Info">Groupe</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Comments">About</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Comments">Done</button>
                </div>
            </div>
        </div>
        <!--form panels-->
        <div class="row">
            <div class="col-12 col-lg-8 m-auto">
                <form class="multisteps-form__form" action="action.php" method="POST">
                    <input type="hidden" name="id">
                    <!--single form panel-->
                    <div class=" multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                        <h3 class="multisteps-form__title">First, set your group’s location.</h3>
                        <div class="multisteps-form__content">
                            <div class="form-row mt-4">
                                <p>Yalla groups meet locally, in person and online. We'll connect you with people in your area, and more can join you
                                    online.</p>
                                <div class="col-12 col-sm-12">
                                    <input class="multisteps-form__input form-control" type="text" placeholder="Search for a City" name="First" />
                                </div>
                            </div>
                            <div class="button-row d-flex mt-4">
                                <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                            </div>
                        </div>
                    </div>
                    <!--single form panel-->
                    <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                        <h3 class="multisteps-form__title">Choose a few topics that describe your group's interests</h3>
                        <p>Be specific! This will help us promote your group to the right people. You can choose up to 15 topics.</p>
                        <div class="multisteps-form__content">
                            <div class="form-row mt-4">
                                <div class="col-12 col-sm-6">
                                    <select class="mmultisteps-form__input form-control" name="caty">
                                        <option selected="selected">Choose a Topic</option>
                                        <option value="Art">Art</option>
                                        <option value="Bussnis">Bussnis</option>
                                        <option value="Education">Education</option>
                                        <option value="Fistival">Fistival</option>
                                        <option value="Food">Food</option>
                                        <option value="Night Life">Night Life</option>
                                        <option value="Sport">Sport</option>
                                        <option value="Technology">Technology</option>
                                        <option value="travell">travell</option>
                                        <option value="Wedding">Wedding</option>
                                        <option value="Anime">Anime</option>
                                        <option value="Movie/Series">Movie/Series</option>
                                    </select>
                                </div>
                            </div>
                            <div class="button-row d-flex mt-4">
                                <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Back</button>
                                <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                            </div>
                        </div>
                    </div>
                    <!--single form panel-->
                    <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                        <h3 class="multisteps-form__title">What will your group’s name be?</h3>
                        <p>Choose a name that will give people a clear idea of what the group is about. Feel free to get creative! You can edit
                            this later if you change your mind.</p>
                        <div class="multisteps-form__content">
                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <input class="multisteps-form__input form-control" type="text" placeholder="Choose a name" name="Gname" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="button-row d-flex mt-4 col-12">
                                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Back</button>
                                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--single form panel-->
                    <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                        <h3 class="multisteps-form__title">Now describe what your group will be about</h3>
                        <p>People will see this when we promote your group, but you’ll be able to add to it later, too.</p>
                        <p>1.What's the purpose of the group?</p>
                        <p>2.Who should join?</p>
                        <p>3.What will you do at your events?</p>
                        <div class="multisteps-form__content">
                            <div class="row">
                                <textarea class="multisteps-form__textarea form-control" placeholder="Please write at least 50 caracters" name="disc"></textarea>
                            </div>
                            <div class="row">
                                <div class="button-row d-flex mt-4 col-12">
                                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Back</button>
                                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--single form panel-->
                    <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                        <h3 class="multisteps-form__title">Almost done! Just take a minute to review our guidelines</h3>
                        <p>Meetup is all about helping people live fuller, happier lives—with the help of strong communities. This means that all
                            groups should:</p>
                        <p>Provide growth opportunities for members</p>
                        <p>Encourage real human interactions in person or online</p>
                        <p>Have a host present at all events</p>
                        <p>Be transparent about the group’s intentions</p>
                        <div class="multisteps-form__content">
                            <div class="button-row d-flex mt-4">
                                <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Back</button>
                                <input class="btn btn-success ml-auto" type="submit" value="Agree&continue" title="Send">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="blink"></div>

    <!-- ======= Form end ======= -->
    <script src="assets/js/steps.js"></script>


    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>YALLA</h3>
                        <p>
                            31,idzekri Tiznit <br><br>
                            <strong>Phone:</strong> +212 621114160<br>
                            <strong>Email:</strong> yassine@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Your Account</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Sign up</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Login</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Help</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Discover</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Groups</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Calendar</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Topics</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Cities</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Yalla</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">About Yalla</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Yalla Pro</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Jobs</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Apps</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Blog</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Accessibility</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Yalla</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <div id="preloader"></div>
    <script>

    </script>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>