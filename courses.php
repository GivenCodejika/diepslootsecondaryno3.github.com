<?php

 include_once 'header.php';

?>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem; color:crimson;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"> <img src="img/logo.png" width="50px" alt="logo">
            <h2 style="color:black;"> DIEPSLOOT SECONDARY NO3</h2>
        </h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.php" class="nav-item nav-link">Home</a>
            <a href="about.php" class="nav-item nav-link">About</a>
            <a href=".php" class="nav-item nav-link active"></a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="team.html" class="dropdown-item">Our Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                     
                </div>
            </div>
            <a href="contact.php" class="nav-item nav-link">Contact</a>
        </div>
        <a href="join.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block"
            style="background: crimson; border-color: black;">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->

   <!-- Categories Start -->
   <div class="container-xxl py-5 category">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center" style="color: crimson;">Categories</h6>
            <h1 class="mb-5"> Categories</h1>
        </div>
        <div class="row g-3">
            <div class="col-lg-7 col-md-6">
                <div class="row g-3">
                    <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                        <a class="position-relative d-block overflow-hidden" href="">
                            <img class="img-fluid" src="img/cat-1.jpg" alt="">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                style="margin: 1px;">
                                <h5 class="m-0">Tourism</h5>
                                <small style="color: crimson;">7 subjects</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                        <a class="position-relative d-block overflow-hidden" href="">
                            <img class="img-fluid" src="img/cat-2.jpg" alt="">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                style="margin: 1px;">
                                <h5 class="m-0">General Studies</h5>
                                <small style="color: crimson;">7 subjects</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                        <a class="position-relative d-block overflow-hidden" href="">
                            <img class="img-fluid" src="img/cat-3.jpg" alt="">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                style="margin: 1px;">
                                <h5 class="m-0">Commercial Studies</h5>
                                <small style="color: crimson;">7 subjects</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                <a class="position-relative d-block h-100 overflow-hidden" href="">
                    <img class="img-fluid position-absolute w-100 h-100" src="img/cat-4.jpg" alt=""
                        style="object-fit: cover;">
                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                        style="margin:  1px;">
                        <h5 class="m-0">Science</h5>
                        <small style="color: crimson;">7 subjects</small>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Categories Start -->


<!--  Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center"></h6>
            <h1 class="mb-5">Our </h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/course-1.jpg" alt="">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                style="border-radius: 30px 0 0 30px; background: crimson; border-color: black;">Read
                                More</a>
                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                style="border-radius: 0 30px 30px 0; background: crimson; border-color: black;">Join
                                Now</a>
                        </div>
                    </div>
                    <div class="text-center p-4 pb-0">
                        <div class="mb-3">
                            <small class="fa fa-star" style="color: crimson;"></small>
                            <small class="fa fa-star" style="color: crimson;"></small>
                            <small class="fa fa-star" style="color: crimson;"></small>
                            <small class="fa fa-star" style="color: crimson;"></small>
                            <small class="fa fa-star" style="color: crimson;"></small>
                            <small>(123)</small>
                        </div>
                        <h5 class="mb-4">Physical Science extra lessons</h5>
                    </div>
                    <div class="d-flex border-top">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie"
                                style="color: crimson;"></i>Mr kekana 2</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock"
                                style="color: crimson;"></i>2 Hrs</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user"
                                style="color: crimson;"></i>30 Students</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/course-2.jpg" alt="">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                style="border-radius: 30px 0 0 30px; background: crimson; border-color: black;">Read
                                More</a>
                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                style="border-radius: 0 30px 30px 0; background: crimson; border-color: black;">Join
                                Now</a>
                        </div>
                    </div>
                    <div class="text-center p-4 pb-0">

                        <div class="mb-3">
                            <small class="fa fa-star" style="color: crimson;"></small>
                            <small class="fa fa-star" style="color: crimson;"></small>
                            <small class="fa fa-star" style="color: crimson;"></small>
                            <small class="fa fa-star" style="color: crimson;"></small>
                            <small class="fa fa-star"></small>
                            <small>(105)</small>
                        </div>
                        <h5 class="mb-4">Math extra lessons</h5>
                    </div>
                    <div class="d-flex border-top">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie"
                                style="color: crimson;"></i>Mr Vilakazi</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock"
                                style="color: crimson;"></i>2 Hrs</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user"
                                style="color: crimson;"></i>25 Students</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/course-3.jpg" alt="">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                style="border-radius: 30px 0 0 30px; background: crimson; border-color: black;">Read
                                More</a>
                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                style="border-radius: 0 30px 30px 0; background: crimson; border-color: black;">Join
                                Now</a>
                        </div>
                    </div><br>
                    <div class="mb-3">
                        <small class="fa fa-star" style="color: crimson;"></small>
                        <small class="fa fa-star" style="color: crimson;"></small>
                        <small class="fa fa-star" style="color: crimson;"></small>
                        <small class="fa fa-star" style="color: crimson;"></small>
                        <small class="fa fa-star" style="color: crimson;"></small>
                        <small>(123)</small>
                    </div>
                    <h5 class="mb-4">Code-jika</h5>
                </div>
                <div class="d-flex border-top">
                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie"
                            style="color: crimson;"></i>Mr Given</small>
                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock"
                            style="color: crimson;"></i>3 Hrs</small>
                    <small class="flex-fill text-center py-2"><i class="fa fa-user" style="color: crimson;"></i>11
                        Students</small>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--  End -->




<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="section-title bg-white text-center px-3" style="color: crimson;">Testimonial</h6>
            <h1 class="mb-5">Our Students Say!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg"
                    style="width: 80px; height: 80px;">
                <h5 class="mb-0">Sandile</h5>
                <p>stuident</p>
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">"The staff is very dedicated to making us succeed, I advice anyone who seeks
                        academic success to go here."</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg"
                    style="width: 80px; height: 80px;">
                <h5 class="mb-0">John Mahlangu</h5>
                <p>code-jika stuident</p>
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">"What I truly love about the school are the teaching methods and I've learned a
                        lot about coding from Code Jika."</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg"
                    style="width: 80px; height: 80px;">
                <h5 class="mb-0">shaun selepe</h5>
                <p>soccer Player</p>
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">This school is wonder of dreams. Since I stated at this school I'v learened alot
                        of stuff like the sports that are played here.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg"
                    style="width: 80px; height: 80px;">
                <h5 class="mb-0">Warren Dube</h5>
                <p>Coding-jika stuident </p>
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Since i started here i have inproved a lot and learnd new skills.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<?php

include_once 'footer.php';

?>
</body>

</html>