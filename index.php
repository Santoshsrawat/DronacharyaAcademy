<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "santoshsrawat84@gmail.com";  // Replace with the recipient's email address
    $subject = "New Contact Form Submission";

    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $tel = $_POST["phone"];
    $subjectForm = $_POST["select-add"];
    $comment = $_POST["message"];

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Handle invalid email address
        die('Invalid email address');
    }

    // You can add more validation for other fields if needed

    // Email content
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $body = "<p><strong>Name:</strong> $name</p>";
    $body .= "<p><strong>Email:</strong> $email</p>";
    $body .= "<p><strong>Phone:</strong> $tel</p>";
    $body .= "<p><strong>select-add:</strong> $subjectForm</p>";
    $body .= "<p><strong>message:</strong></p><p>$comment</p>";

    // Send the email
    $success = mail($to, $subject, $body, $headers);

    if ($success) {
        // Redirect back to the form page with success message
        header("Location: index.html?status=success");
        exit();
    } else {
        // Redirect back to the form page with error message
        header("Location: index.html?status=error");
        exit();
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dronacharya Academy</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



    <style type="text/css">
    .navbar .megamenu {
        padding: 1rem;
    }

    /* ============ desktop view ============ */
    @media all and (min-width: 992px) {

        .navbar .has-megamenu {
            position: static !important;
        }

        .navbar .megamenu {
            left: 0;
            right: 0;
            width: 40%;
            margin-top: 0;
        }

    }

    /* ============ mobile view ============ */

    @media(max-width: 991px) {

        .navbar.fixed-top .navbar-collapse,
        .navbar.sticky-top .navbar-collapse {
            overflow-y: auto;
            max-height: 90vh;
            margin-top: 10px;
        }
    }

    .has-megamenu li a {
        text-decoration: none;
        color: black;
        list-style: circle;
    }

    @media (min-width:900px) and (max-width:1400px) {
        .megamenu {
            margin: 0 30px;
        }
    }

    body {
        font-family: 'Open Sans', sans-serif;
        background-color: #f0eded;
    }
    </style>





    <style>
    #btn-enquiry {
        position: fixed;
        right: -52px;
        top: 430px;
        transform: rotate(270deg);
        padding: 8px;
    }

    .add-button {
        position: fixed;
        right: -15px;
        top: 520px;
        /* transform: rotate(270deg); */
        padding: 8px;
        /* background-color: #d3dcec; */
    }

    .add-button {
        text-align: center;
        margin-top: 20px;
    }

    .add-button img {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease-in-out;
    }

    .add-button img:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .add-button a {
        display: inline-block;
        margin-bottom: 10px;
        text-decoration: none;
        transition: transform 0.3s ease-in-out;
    }

    .add-button a:hover {
        transform: scale(1.1);
    }
    </style>
</head>

<body>


    <!--------------------------- Start-logo -------------------------->

    <nav class="navbar bg-body-tertiary d-flex">
        <div class="container-fluid mx-lg-5 mx-md-2 mx-sm-1">
            <a class="navbar-brand" href="#">
                <img src="./img/cropped-logo-removebg-preview.png" alt="Logo" width="40" height="30"
                    class="d-inline-block align-text-top" />
                Dronacharya Academy
            </a>
            <div class="add">
                <ul class="d-flex justify-content-end" style="list-style: none; " id="list-add">
                    <li class="me-4">
                        <i class="fas fa-user-graduate fa-lg"></i> <a href="registration.html" style="
              text-decoration: none;
              color:black;
            ">Online Admission</a>
                    </li>
                    <li class="me-4"><i class="fas fa-book fa-lg"></i> <a href="career.html" style="
            text-decoration: none;
            color:black;
          ">Careers</a></li>
                    <li class=""><i class="fas fa-user fa-lg"></i> <a href="contact.html" style="
              text-decoration: none;
              color:black;
            ">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!--------------------------- End-logo -------------------------->


    <!--------------------------- Start-navbar -------------------------->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1a237e">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">Brand</a> -->
            <button class="navbar-toggler ms-auto text-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="main_nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.html">HOME</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="ese.html">ESE</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown">GATE
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="gate.html">About Gate</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="list-of-iits.html">Lists of IITS</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="list-of-iiits.html">Lists of IIITS</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="list-of-nits.html">Lists of NITS</a>
                            </li>
                            <li><a class="dropdown-item" href="gateexamsyllabs.html"> GATE EXAM Syllabus </a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="ssc-je.html">SSC JE</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown">COURSES
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="">ESE + GATE : 1 Year Foundation Course</a>
                                <ul>
                                    <li>
                                        <a href="ESE+GATE1YearFoundationCourse.html" class="text-primary"
                                            style="text-decoration: none;">Regular</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-item" href="">GATE : 1 Year Foundation Course</a>
                                <ul>
                                    <li>
                                        <a href="GATE1YearFoundationCourse.html" class="text-primary"
                                            style="text-decoration: none;">Regular</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-item" href=""> SSC-JE / STATE-JE Course</a>
                                <ul>
                                    <li>
                                        <a href="STATE-JECourse.html" class="text-primary"
                                            style="text-decoration: none;">Regular</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="dropdown-item" href="ssc.html"> SSC</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="batches.html">NEW BATCHES</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="FeeStructure.html">FEE STRUCTURE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="our-result.html">OUR RESULT</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown">ABOUT US
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="whychoseus.html">WHY DRONACHARYA ACADEMY</a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="study-material.html">STUDY MATERIAL</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown">DEFENCE
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="nda.html">NDA</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="cds.html">CDS</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="afcat.html">AFCAT</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="agniveer.html">AGNIVEER</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="ssb.html">SSB</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="aboutRIMC.html">RIMC</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="mns.html"> MNS</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="sainik.html"> SAINIK SCHOOL</a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="https://vervegenlms.com/">TEST SERIES</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--------------------------- End-logo -------------------------->


    <!-------------- Hero section start  ----------------->

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">

                <img style="height: 70vh;" src="img/New Collection.jpg" class="d-block w-100" alt="slider1" />
            </div>
            <div class="carousel-item">
                <img style="height: 70vh;" src="img/study-in-abroad-banner-template-made-with-postermywall-1.jpg"
                    class="d-block w-100" alt="slider2" />
            </div>
            <div class="carousel-item">
                <img style="height: 70vh;" src="img/higher-education-banner-post-template-made-with-postermywall-6.jpg"
                    class="d-block w-100" alt="slider3" />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <div class="hero p-lg-4">
        <!-- <div class="bg-dark py-2">
      <div class="container-fluid d-flex">
        <h4 class="text-white mx-lg-3">Announcements</h4>
       
        
      </div>
    </div> -->

        <div class="">
            <div class="container-fluid mb-5 mt-3">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-sm-12" data-aos="fade-right" data-aos-duration="2000">

                        <h3 style="color:#1a237e;">ABOUT DRONACHARYA</h3>
                        <h3 class="pb-2 mb-2" style="border-bottom:2px solid #1a237e;">SINCE 2011</h3>
                        <h5>A name Synonymous for success in ESE, GATE & PSUs exams</h5>
                        <p>DRONACHARYA is one of the leading coaching institutes committed to providing premium quality
                            education
                            to the students willing to appear in any competitive exams. We prepare the students for
                            GATE, ESE, PSU, SSC JE, and various other exams.</p>
                        <p>Our primary motto and aim are to strengthen the capabilities and proficiency of the students
                            so
                            that
                            they can score well even in highly competitive exams. </p>
                        <!-- Established by a team of enthusiastic
                      toppers and specialists, the institute endeavors to make the dreams of students come true. -->

                        <!-- We
                      provide an exclusive platform to congregate with peers and help the students stay ahead of the
                      curve…. -->


                        <button style="background-color: #1c2de4;color:white;border:none;" class="mb-2 px-2 py-1"><a
                                class="nav-link active" aria-current="page" href="./about-us.html">Read
                                More</a></button>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12" data-aos="fade-right" data-aos-duration="2000">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 mb-4">

                                <div class="p-2 bg-light border border-danger" style="text-align: center;">
                                    <h2>GATE 2023</h2>
                                    <h5>1st Rankers (in 7 Streams)</h5>
                                    <p class="pb-2 mb-4 text-danger border-bottom border-danger">(CE, ME, EE, E&T)</p>

                                    <h5 class="pb-2 mb-4 text-danger border-bottom border-danger">66 in top 10 (All
                                        Streams)
                                    </h5>
                                    <h5 class="pb-2 mb-4 text-danger border-bottom border-danger">66 in top 10 (All
                                        Streams)
                                    </h5>
                                    <h5 class="">70% of total selections</h5>
                                    <p>are from Classroom & Online Courses</p>
                                    <div class="d-grid gap-2 d-md-block mb-3">
                                        <!-- <button class="btn p-1" type="button"
                      style="background-color: #1c2de4;color:white;font-size: 13px;"><a class="nav-link active"
                        aria-current="page" href="our-result.html">View Toppers </a></button> -->
                                        <button class="btn p-1" type="button"
                                            style="background-color: #1c2de4;color:white;font-size: 13px;"><a
                                                class="nav-link active" aria-current="page" href="our-result.html">View
                                                Result</a></button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12 mb-4">

                                <div class="p-2 bg-light border border-danger" style="text-align: center;">
                                    <h2>ESE 2023</h2>
                                    <h5>1st Rankers (in 7 Streams)</h5>
                                    <p class="pb-2 mb-4 text-danger border-bottom border-danger">(CE, ME, EE, E&T)</p>

                                    <h5 class="pb-2 mb-4 text-danger border-bottom border-danger">66 in top 10 (All
                                        Streams)
                                    </h5>
                                    <h5 class="pb-2 mb-4 text-danger border-bottom border-danger">66 in top 10 (All
                                        Streams)
                                    </h5>
                                    <h5 class="">70% of total selections</h5>
                                    <p>are from Classroom & Online Courses</p>
                                    <div class="d-grid gap-2 d-md-block mb-3">
                                        <!-- <button class="btn  p-1" type="button"
                      style="background-color: #1c2de4;color:white;font-size: 13px;"><a class="nav-link active"
                        aria-current="page" href="our-result.html">View Toppers </a></button> -->
                                        <button class="btn p-1" type="button"
                                            style="background-color: #1c2de4;color:white;font-size: 13px;"><a
                                                class="nav-link active" aria-current="page" href="our-result.html">View
                                                Result</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container-fluid mb-5">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 mb-md-2 mb-sm-2 mb-3" data-aos="zoom-in"
                        data-aos-duration="2000">
                        <div class="text-center" style="border: 3px solid #1a237e;">
                            <div class="my-3 py-3 mx-3 "
                                style="background-color:#d3dcec;color:black;height:170px;align-items: center;">
                                <h3>Skilled Lecturers</h3>
                                <p class="px-2">Established by a team of enthusiastic toppers and specialists</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12 mb-md-2 mb-sm-2 mb-3" data-aos="zoom-in"
                        data-aos-duration="2000">
                        <div class="text-center" style="border: 3px solid #1a237e;">
                            <div class="my-3 py-3 mx-3 " style="background-color:#d3dcec;color:black;height:170px;">
                                <h3>Motivation Gained</h3>
                                <p class="px-2">The inspiration and motivation gained in DRONACHARYA Academy make the
                                    students confident
                                    to aim high in life.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12 mb-md-2 mb-sm-2" data-aos="zoom-in"
                        data-aos-duration="2000">
                        <div class="text-center" style="border: 3px solid #1a237e;">
                            <div class=" my-3 py-3 mx-3" style="background-color:#d3dcec;color:black;height:170px;">
                                <h3>Regular & Weekend Batch</h3>
                                <p class="px-2">We provide Regular & Weekend Batch facility in our institute.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- classRoom and Online Class start  -->
            <div>

                <div class="container-fluid my-5">
                    <h1 class="text-center mb-5 text-black pt-3">Classroom Courses</h1>
                    <div class="row mb-3">


                        <div class="col-lg-4 col-md-6 col-sm-12 mb-3" data-aos="fade-right" data-aos-duration="1000">
                            <div id="card-add" class="text-center py-4 px-2"
                                style="text-align: justify; background-color: white; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px; width: 100%;height: 100%;">
                                <img class="mb-4" src="img/17240455_5822051-removebg-preview (1).png" width="100%"
                                    height="150px">
                                <h5 class="mb-2">ESE + GATE</h5>
                                <h6 class="mb-4">1 YEAR FOUNDATION COURSE</h6>
                                <p class="mb-4">The course is just intended to help students get ready for the ESE +
                                    GATE exam. These courses are designed with students in mind.

                                </p>
                                <button class="px-3 py-2 border-0 "
                                    style="background-color: #1c2de4; color: white; border-radius: 5px;">
                                    <a class="nav-link" href="ESE+GATE1YearFoundationCourse.html">Regular</a>
                                </button>
                            </div>
                        </div>




                        <div class="col-lg-4 col-md-6 col-sm-12 mb-3" data-aos="fade-right" data-aos-duration="1000">
                            <div id="card-add" class="text-center py-4 px-2"
                                style="text-align: justify; background-color: white; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px; width: 100%;height: 100%; ">
                                <img class="mb-4" src="img/4662922_2443795.jpg" width="100%" height="140px">
                                <h5 class="mb-2">GATE</h5>
                                <h6 class="mb-4">1 YEAR FOUNDATION COURSE</h6>
                                <p class="mb-4">The course is just intended to help students get ready for the GATE
                                    exam. These courses are designed with students in mind.

                                </p>
                                <button class="px-3 py-2 border-0"
                                    style="background-color: #1c2de4; color: white; border-radius: 5px;">
                                    <a class="nav-link" href="GATE1YearFoundationCourse.html">Regular</a>
                                </button>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 col-sm-12 mb-3 " data-aos="fade-right" data-aos-duration="1000">
                            <div id="card-add" class="text-center py-4 px-2 "
                                style="text-align: justify; background-color: white;box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);border-radius: 10px;width: 100%;height: 100%; ">
                                <img class="mb-4" src="img/4662922_2443795.jpg" width="100%" height="140px">
                                <h5 class="mb-2">SSC-JE/STATE-JE Course</h5>
                                <h6 class="mb-4">COURSE</h6>
                                <p class="mb-4">The course is just intended to help students get ready for the
                                    SSC-JE/STATE-JE exam. These courses are designed with students in mind.</p>
                                <button class="px-3 py-2 border-0 "
                                    style="background-color: #1c2de4;color:white;border-radius: 5px;"> <a
                                        class="nav-link" href="STATE-JECourse.html">Regular</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Testimonial Start -->
            <!-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
          <div class="container">
            <div class="text-center">
              <h1 class="text-center mb-5 text-black pt-3">Testimonial</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
              <div class="testimonial-item text-center  pt-4 border border-danger">
                <img
                  class="border rounded-circle p-2 mx-auto mb-3 border-primary border-3"
                  src="./img/man.png"
                  style="width: 80px; height: 80px;border:2px solid #1a237e;"
                />
                <h5 class="mb-0">Client Name</h5>
                <p>Profession</p>
                <div class="testimonial-text  text-center p-4" style="color:white;">
                  <p class="mb-0">
                    Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit
                    diam amet diam et eos. Clita erat ipsum et lorem et sit.
                  </p>
                </div>
              </div>
              <div class="testimonial-item text-center">
                <img
                  class="border rounded-circle p-2 mx-auto mb-3"
                  src="./img/man.png"
                  style="width: 80px; height: 80px"
                />
                <h5 class="mb-0">Client Name</h5>
                <p>Profession</p>
                <div class="testimonial-text bg-light text-center p-4">
                  <p class="mb-0">
                    Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit
                    diam amet diam et eos. Clita erat ipsum et lorem et sit.
                  </p>
                </div>
              </div>
              <div class="testimonial-item text-center">
                <img
                  class="border rounded-circle p-2 mx-auto mb-3"
                  src="./img/man.png"
                  style="width: 80px; height: 80px"
                />
                <h5 class="mb-0">Client Name</h5>
                <p>Profession</p>
                <div class="testimonial-text bg-light text-center p-4">
                  <p class="mb-0">
                    Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit
                    diam amet diam et eos. Clita erat ipsum et lorem et sit.
                  </p>
                </div>
              </div>
              <div class="testimonial-item text-center">
                <img
                  class="border rounded-circle p-2 mx-auto mb-3"
                  src="./img/man.png"
                  style="width: 80px; height: 80px"
                />
                <h5 class="mb-0">Client Name</h5>
                <p>Profession</p>
                <div class="testimonial-text bg-light text-center p-4">
                  <p class="mb-0">
                    Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit
                    diam amet diam et eos. Clita erat ipsum et lorem et sit.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div> -->
            <!-- Testimonial End -->




            <!------ Testimonial Start ------------>
            <div id=testimonial>
                <h2 class="text-black">Testimonials</h2>
                <div class="testimonial mb-3">
                    <input type=radio name=position checked />
                    <input type=radio name=position />
                    <input type=radio name=position />
                    <input type=radio name=position />
                    <input type=radio name=position />
                    <main id=carousel>
                        <div class=item>
                            <div class=testimonial-item>
                                <div class=testimonial-img>
                                    <img src="img/woman.png" alt="Testimonial Image">
                                </div>
                                <div class="profile mt-auto">
                                    <h3>Heena Joshi</h3>
                                </div>
                                <div class=stars>

                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>


                                </div>
                                <p>
                                    Best defence academy in dehradun.
                                    I qualified my exam under this coaching .
                                    Faculty is best here.
                                    I suggest uh to join this academy for ur better future.
                                </p>

                            </div>
                        </div>
                        <div class=item>
                            <div class=testimonial-item>
                                <div class=testimonial-img>
                                    <img src="img/man.png" alt="Testimonial Image">
                                </div>
                                <div class=stars>
                                    <div class="profile mt-auto">
                                        <h3>kamal kishore</h3>
                                    </div>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>

                                </div>
                                <p>
                                    Best institue for affordable nda coaching ...experienced faculties n idol
                                    management..perfect gateway
                                    for your success
                                </p>

                            </div>
                        </div>
                        <div class=item>
                            <div class=testimonial-item>
                                <div class=testimonial-img>
                                    <img src="img/boy.png" alt="Testimonial Image">
                                </div>
                                <div class=stars>
                                    <div class="profile mt-auto">
                                        <h3>Himanshu Kumar</h3>
                                    </div>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                    One of the best Defence Academy institute in Dehradun, as the best experienced
                                    facultys ever, i am
                                    proud to be a student of this academy, Thank you for my selection in defence.
                                </p>

                            </div>
                        </div>
                        <div class=item>
                            <div class=testimonial-item>
                                <div class=testimonial-img>
                                    <img src="img/man.png" alt="Testimonial Image">
                                </div>
                                <div class=stars>
                                    <div class="profile mt-auto">
                                        <h3>Amit Singh</h3>
                                    </div>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                    Best defence Institute in dehradun with best teachers with soft and polite nature
                                    and supports their
                                    students in the best possible way.
                                </p>

                            </div>
                        </div>
                        <div class=item>
                            <div class=testimonial-item>
                                <div class=testimonial-img>
                                    <img src="img/man (1).png" alt="Testimonial Image">
                                </div>
                                <div class=stars>
                                    <div class="profile mt-auto">
                                        <h3>peeyush gairola</h3>
                                    </div>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                    Best faculty in dehradun. Quality teaching with various number of problem practice.
                                    Good teacher
                                    student interaction. Go for best Go for dronacharya.
                                </p>

                            </div>
                        </div>
                    </main>
                </div>
            </div>
            <!-- Testimonial End -->


        </div>

    </div>
    <!--------------- Hero section end  ------------------>


    <!-------------- section start ----------------->
    <!-- <div class="mb-4 position-relative">
   
    <div class="position-relative"
      style="background-image: url(./img/IT-Front.jpg); background-size: cover; min-height: 300px; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover;">
      <div class="position-absolute top-0 start-0 end-0 bottom-0" style="background-color: rgba(0, 0, 0, 0.5);"></div>

      <div class="container-fluid d-flex align-items-stretch px-md-5 py-md-5 position-relative text-white">
        <div class="row flex-grow-1">

         
          <div class="row flex-grow-1 my-sm-4">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-md-2 mb-sm-2" data-aos="flip-left" data-aos-duration="1000">
              <div class="bg-white py-4 px-2 text-center h-100 d-flex flex-column justify-content-between rounded">
                <img src="img/user.png" class="img-fluid mb-4" width="80" height="34"
                  style="display: flex;margin: 0 auto;">
                <h4 class="text-black mb-2 fs-5"> GATE 2024 : ONLINE-RECORDED</h4>
                <p class="text-black mb-0">RANK IMPROVEMENT COURSE</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-md-2 mb-sm-2" data-aos="flip-left" data-aos-duration="1000">
              <div class="bg-white p-4 text-center h-100 d-flex flex-column justify-content-between rounded">
                <img src="img/email.png" class="img-fluid mb-4" width="80" height="34"
                  style="display: flex;margin: 0 auto;">
                <h5 class="text-black mb-2">ESE + GATE 2025/ GATE 2025</h5>
                <p class="text-black mb-0">LIVE-ONLINE COURSE</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-md-2 mb-sm-2" data-aos="flip-left" data-aos-duration="1000">
              <div class="bg-white p-4 text-center h-100 d-flex flex-column justify-content-between rounded">
                <img src="img/online-test (1).png" class="img-fluid mb-4" width="80" height="34"
                  style="display: flex;margin: 0 auto;">
                <h5 class="text-black mb-2">MADE EASY BLOG</h5>
                <p class="text-black mb-0">
                  RECENT JOB NOTIFICATIONS</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
    <!-------------- section end ----------------->


    <!-- <div class="container my-4" style="height:500px; z-index:99999999999;">
  <div class="owl-carousel owl-theme">
    <div class="item">
      <img src="../img/4662922_2443795.jpg" style="height: 100px;">
    </div>
    <div class="item">
      <img src="images/category-2.jpg">
    </div>
    <div class="item">
      <img src="images/category-3.jpg">
    </div>
    <div class="item">
      <img src="images/category-4.jpg">
    </div>
    <div class="item">
      <img src="images/category-5.jpg">
    </div>
    <div class="item">
      <img src="images/product-1.jpg">
    </div>
</div>
</div> -->

    <style>
    /*------------  banner css -------*/

    @media (max-width:700px) {
        .banner_post {
            display: none !important;
        }
    }

    .banner_post {
        display: none;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        position: fixed;
        width: 100%;
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.8);
        z-index: 99999;
    }

    .banner_post #close_banner {
        float: right;
        font-size: 24px;
        margin: 0 5px;
        cursor: pointer;
        color: white;
        font-size: 40px;

    }

    .banner_box {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        /* background-color: #fff; */
        width: 50%;
        height: fit-content;
        padding: 0px 0 0 0;
    }

    .banner_bg img {
        height: 100%;
        width: 100%;
    }

    .banner_box button {
        width: 100%;
        display: flex;
        padding: 8px;
        text-align: center;
        align-items: center;
        justify-content: center;
        border: none;
        outline: none;
        background-color: green;
    }

    .banner_box button a {
        font-size: 14px;
        color: #fff;
    }

    @media (max-width:765px) {
        .banner_box {
            width: 90%;
            height: fit-content;
        }
    }
    </style>



    <!---- banner post ----->
    <div class="banner_post" id="banner_post">
        <div class="banner_box">
            <span class="close" id="close_banner" onclick="close_banner()">&times;</span>
            <div class="banner_bg">
                <img src="img/result-popup.webp">
            </div>
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById('banner_post').style.display = 'block';
    });

    function close_banner() {
        document.getElementById('banner_post').style.display = 'none';
    }
    </script>
    <!--<div class="overlay" id="overlay" data-aos="fade-left" data-aos-duration="1000">-->
    <!--  <div class="popup">-->
    <!--    <span class="close" onclick="closePopup()">&times;</span>-->
    <!--    <img src="img/result-popup.webp">-->
    <!--  </div>-->
    <!--</div>-->


    <!-- <a href = "img/ssccgl.docx"
  Download = "test_image">
     <button type = "button"> Download </button>
  </a> -->

    <!-- <a href="img/ssccgl.docx">
    <strong>dpf</strong>
  </a> -->
    <!---------------- pop-up end ----------------->

    <!-------------- side social-media start----------------->

    <!-- <button class="btn" style="background-color: #1a237e;box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.5);" id="btn-enquiry"><a href="contact.html" class="text-white"
      style="text-decoration: none;">QUICK ENQUIRY <i class="fas fa-arrow-up"></i></a></button> -->

    <div class="add-button p-2">
        <a href="https://wa.me/8273373357">
            <img src="img/whatsapp.png" alt="whatsapp" style=" width: 60%;">
        </a>
    </div>
    <!-------------- side social-media end----------------->


    <!-------------- modal start----------------->

    <button type="button" id="btn-enquiry"
        style="background-color: #1a237e;box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.5);color:white;" class="btn"
        data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">QUICK ENQUIRY <i
            class="fas fa-arrow-up"></i></button>

    <div class="modal fade btn-enquiry" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-end">
            <div class="modal-content" style="background-color: #1d6792;">

                <div class="modal-header">
                    <h1 class="modal-title fs-4 text-white" id="exampleModalLabel">REGISTRATION</h1>
                    <button type="button" class="btn-close text-white bg-light" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="" method="POST">

                        <div class="mb-3">
                            <!-- <label for="recipient-name" class="col-form-label">Name</label> -->
                            <input type="text" class="form-control border-0  border-2  rounded-0" id="recipient-name"
                                placeholder="Name" required name="name">
                        </div>
                        <div class="mb-3">
                            <!-- <label for="recipient-email" class="col-form-label">Email</label> -->
                            <input type="email" class="form-control border-0  border-2  rounded-0" id="recipient-email"
                                placeholder="Email" required name="email">
                        </div>

                        <div class="mb-3">
                            <!-- <label for="recipient-phone" class="col-form-label">Phone</label> -->
                            <input type="tel" class="form-control border-0  border-2  rounded-0" id="recipient-phone"
                                name="phone" placeholder="Phone No"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 10);" required>
                        </div>

                        <div class="mb-3">
                            <!-- <label for="recipient-phone" class="col-form-label">Select one option</label> -->
                            <select class="form-select border-0  border-2  rounded-0"
                                aria-label="Default select example" required name="select-add">
                                <option selected class="text-white">Select one option</option>
                                <option class="text-black">Google</option>
                                <option class="text-black">Social Media</option>
                                <option class="text-black">TV</option>
                                <option class="text-black">Radio</option>
                                <option class="text-black">Friend and Family</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <!-- <label for="message-text" class="col-form-label">Message:</label> -->
                            <textarea class="form-control border-0  border-2 rounded-0" id="message-text" name="message"
                                placeholder="message"></textarea>
                        </div>
                        <button type="submit" name="send" class="btn  w-25 mb-3 text-center text-white"
                            style="margin: 0 auto;background-color: #1a237e;">Submit</button>
                    </form>
                </div>
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->

            </div>
        </div>
    </div>
    <!-------------- modal end ---------------->



    <!-------------- footer start----------------->

    <footer class="text-center text-lg-start bg-dark py-3 text-white">
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <div class="me-lg-5 mb-4">
                <span>Get connected with us on social networks:</span>
            </div>

            <div>
                <a href="https://www.facebook.com/ranaankit.dehradun/" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>

                <a href="https://www.instagram.com/dronaddun/" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>

            </div>
        </section>

        <section class="container-fluid text-center text-md-start mt-5">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h4 class="text-uppercase fw-bold mb-4">DRONACHARYA </h4>
                    <p>
                        DRONACHARYA is one of the leading coaching institutes committed to
                        providing premium quality education to the students who are
                        willing to appear in any competitive exams
                    </p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">Featured Links</h6>
                    <p><a href="index.html" class="text-reset">Home</a></p>
                    <p><a href="gallery.html" class="text-reset">Gallery</a></p>
                    <p><a href="courses.html" class="text-reset">Courses</a></p>
                    <p><a href="contact.html" class="text-reset">Contact</a></p>
                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">COACHING</h6>
                    <p><a href="gate.html" class="text-reset">GATE</a></p>
                    <p><a href="defence.html" class="text-reset">DEFENCE</a></p>
                    <p><a href="ese.html" class="text-reset">ESE</a></p>
                    <p><a href="ssc-je.html" class="text-reset">SSC JE</a></p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" id="footer-add">
                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p class="mb-1">
                        <i class="fas fa-home me-3"></i><a href="https://maps.app.goo.gl/4wfXp9JYuqv8EDC68">Ojaswi
                            Complex – Top
                            Floor, General Mahadev Singh Rd, Ballupur
                            Chowk, Ballupur, Dehradun, Uttarakhand 248001</a>
                    </p>
                    <p class="mb-1">
                        <i class="fas fa-phone me-2"></i><a href="tel:9412611114">9412611114</a>
                    </p>
                    <p class="mb-1">
                        <i class="fas fa-phone me-2"></i><a href="tel:8273373357">8273373357</a>
                    </p>
                </div>
            </div>
        </section>
    </footer>


    <div class="text-center p-2" style="background-color:#1a237e;color:white;">
        © 2023 Copyright:
        <a class="text-reset fw-bold" href="https://www.vervegen.com" style="text-decoration: none;">
            Vervegen Tech Pvt Ltd</a>
    </div>
    <!-------------- footer end ----------------->

    <script>
    function openPDF() {
        // Replace 'path/to/your/pdf/file.pdf' with the actual path to your PDF file
        var pdfPath = 'img/ssccgl.docx';

        // Open the PDF in a new window or tab
        window.open(pdfPath, '_blank');
    }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>


    <script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        autoplayTimeout: 1000,
        // stagePadding: 50,
        dots: false,
        // nav:true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
    </script>

    <script>
    AOS.init();
    </script>


    <script>
    // Wait for the DOM to be ready
    document.addEventListener("DOMContentLoaded", function() {
        // Set the interval for automatic sliding (in milliseconds)
        var interval = 5000; // Change this value to adjust the interval

        // Get all radio buttons and testimonial items
        var radios = document.querySelectorAll('input[name="position"]');
        var items = document.querySelectorAll(".item");

        // Set the initial index
        var currentIndex = 0;

        // Function to show the next testimonial
        function showNextTestimonial() {
            radios[currentIndex].checked = false;
            currentIndex = (currentIndex + 1) % radios.length;
            radios[currentIndex].checked = true;
        }

        // Automatically switch to the next testimonial at the specified interval
        var intervalId = setInterval(showNextTestimonial, interval);

        // Pause the automatic sliding when the user interacts with the testimonials
        items.forEach(function(item) {
            item.addEventListener("mouseover", function() {
                clearInterval(intervalId);
            });

            item.addEventListener("mouseout", function() {
                intervalId = setInterval(showNextTestimonial, interval);
            });
        });
    });
    </script>



</body>

</html>