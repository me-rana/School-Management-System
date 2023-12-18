<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ Route::currentRouteName()."-".config('app.name') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../assets/frontend/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../assets/frontend/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>+৮৮০১৫২১৩৮০০৬৫</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>contact@ranasvc.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-book-reader mr-3"></i>Edukate</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">প্রধান পেইজ</a>
                    <a href="about.html" class="nav-item nav-link">আমাদের সম্পর্কে</a>
                    <a href="course.html" class="nav-item nav-link">সকল কোর্সসমূহ</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">অন্যান্য</a>
                        <div class="dropdown-menu m-0">
                            <a href="detail.html" class="dropdown-item">নোটিশসমূহ</a>
                            <a href="feature.html" class="dropdown-item">কোর্সের খরচের তালিকা</a>
                            <a href="team.html" class="dropdown-item">শিক্ষকমণ্ডলী</a>
                            <a href="testimonial.html" class="dropdown-item">টেস্টিমিনাল</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">যোগাযোগ</a>
                </div>
                <a href="" class="btn btn-primary py-2 px-4 d-none d-lg-block">ভর্তি প্রক্রিয়া</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center my-5 py-5">
            <h1 class="text-white mt-4 mb-4">এখান থেকে শুরু কর</h1>
            <h1 class="text-white display-1 mb-5">আমাদের কোর্সসমূহ</h1>
            <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-light bg-white text-body px-4 dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">কোর্সসমূহ</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">স্নাতক</a>
                            <a class="dropdown-item" href="#">ডিপ্লোমা</a>
                            <a class="dropdown-item" href="#">মাস্টার্স</a>
                        </div>
                    </div>
                    <input type="text" class="form-control border-light" style="padding: 30px 25px;" placeholder="সাবজেক্টের নাম">
                    <div class="input-group-append">
                        <button class="btn btn-secondary px-4 px-lg-5">খুঁজুন</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->