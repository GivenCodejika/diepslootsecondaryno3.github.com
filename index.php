<!-- NOTICE
THIS IS A PHP CODE PEASE OPNE THE README.TXT TO UNDERSTAND HOW IT IS RUN.
 -->
<?php

 include_once 'header.php';

?>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem; color:crimson;" role="status">
            <span class="sr-only" style="color: crimson;">Loading...</span>
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
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>      
                    </div>
            </div>
            <a href="join.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block"
                style="background: crimson; border-color: black;">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(65, 85, 197, 0.7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h4 class="text-uppercase mb-3 animated slideInDown" style="color: black;">DIEPSLOOT SECONDARY
                                    No.3</h4>
                                <h1 class="display-3 text-white animated slideInDown">EDUCATION LIBERATES</h1>
                                <p class="fs-5 text-white mb-4 pb-2">"Welcome to Diepsloot Secondary No.3, where
                                    learning thrives. We provide a dynamic and student-centered education, blending
                                    tradition with innovation. Explore our programs, dedicated faculty, and vibrant
                                    community. Join us on the journey to success!"</p>
                                <a href="about.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"
                                    style="background-color: crimson; border-color: black;">Read More</a>
                                <a href="join.php" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="container">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background:
                        <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h5 class="text-primary text-uppercase mb-3 animated slideInDown"></h5>
                            <h1 class="display-3 text-white animated slideInDown">HOME OF ACADEMIC EXCELLENCE</h1>
                            <p class="fs-5 text-white mb-4 pb-2">Discover Diepsloot Secondary; Where Education Excels.
                                Explore our programs, exceptional faculty, and vibrant community. Join us in the pursuit
                                of knowledge and excellence.</p>
                            <a href="about.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"
                                style="background-color: crimson;border-color: black;">Read More</a>
                            <a href="join.php" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <img src="img/medal.png" width="50px" alt="achievements">
                            <h5 class="mb-3">Academic  Excellence</h5>
                            <p>Recieve the best education in the johanessburg north district, the home of academic
                                success and producer of top students.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <img src="img/extracurricular.png" width="50px" alt="extracurricular">
                            <h5 class="mb-3">Extracurricular Activities</h5>
                            <p>Our diverse range of clubs, sports teams, and creative activities cater to students'
                                diverse interests, fostering extramural engagement, friendship, and shaping future
                                leaders through well-rounded individuals.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <img src="img/book.png" width="50px" alt="Library">
                            <h5 class="mb-3">Library Centre</h5>
                            <p> A vast collection of books, digital resources, and a tranquil space for students to
                                explore, research, and expand their horizons. It's where imagination meets information,
                                fostering a love for reading and lifelong learning among our students.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <img src="img/coding.png" width="50px" alt="codejika">
                            <h5 class="mb-3">Code Jika</h5>
                            <p>Learn the fundamentals of programming, including how to code, in our mobile computer lab.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start" style="color: crimson;">About Us</h6>
                    <h1 class="mb-4">Who Are We?</h1>
                    <p class="mb-4">A school located in Diepsloot extension 5, the home of academic success.<class="">
                    </p>
                    <p class="mb-4">We are a school of excellency. We put our effort teaching our students. Our Students
                        excel in their studies. Our main priority is to give our students a better future.</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right" style="color: crimson;"></i>Qualified Teachers
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right" style="color: crimson;"></i>Disciplined Students</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right" style="color: crimson;"></i>National Senior Certificate</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right" style="color: crimson;"></i>Over 90% Matric Pass Rate
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right" style="color: crimson;"></i>Extramurral Powerhouse</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right" style="color: crimson;"></i>Coding & Programming</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="about.php"
                        style="background: crimson; border-color: black;">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


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
                <h1 class="mb-5">SUBJECTS & COURSES</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-1.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">

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
                            <h5 class="mb-4">SCIENCE</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie"
                                    style="color: crimson;"></i>Mr kekana 2</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock"
                                    style="color: crimson;"></i>2 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user"
                                    style="color: crimson;"></i>300+ Students</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-2.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
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
                            <h5 class="mb-4">GENERAL</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie"
                                    style="color: crimson;"></i>Mr Vilakazi</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock"
                                    style="color: crimson;"></i>2 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user"
                                    style="color: crimson;"></i>400+ Students</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-3.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
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
                        <h5 class="mb-4">CODE-JIKA</h5>
                    </div>
                    <div class="d-flex border-top">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie"
                                style="color: crimson;"></i>Mr Given</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock"
                                style="color: crimson;"></i>1 Hour</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user" style="color: crimson;"></i>200+
                            Students</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--  End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center" style="color: crimson;">STAFF</h6>
                <h1 class="mb-5">Eductators</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Ms M.P Makhubedu</h5>
                            <small>Principal</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0"></h5>
                            <small></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Muthwa ST</h5>
                            <small>Maths Teacher</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Makananiso Given</h5>
                            <small>Code-jika Head Trainer</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


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
                    <h5 class="mb-0">Divhonele Tshikhudo</h5>
                    <p>student</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">"I feel like coming to this school was a stepping stone for me,
                            from an academic point of view I've improved."</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">John Mahlangu</h5>
                    <p>student</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">"What I truly love about the school are the teaching methods and I've learned a
                            lot about coding from Code Jika."</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Xilaveko Nkanyani</h5>
                    <p>student</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">This school is wonder of dreams. Since I stated at this school I'v learned alot
                            of stuff like the sports that are played here.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Warren Dube</h5>
                    <p>student </p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Since i started here i have inproved a lot and learned new skills.</p>
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