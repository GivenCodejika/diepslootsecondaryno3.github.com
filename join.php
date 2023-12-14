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
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href=".php" class="nav-item nav-link"></a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                         
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
    </nav>
    <section>
        <p>This part of the website is still undergoing construction, sorry.</p>
    </section>
    <!---form--->
    <div class="form">
        <section method="POST">

        </section>

    </div>
<?php

include_once 'form.php';

?>
    
<?php

include_once 'footer.php';

?>
</body>

</html>