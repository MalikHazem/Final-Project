<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Coming Soon - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ url('css/styles.css') }}" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ url('js/v_art.js') }}"></script>
    <style>
        body {
            background-image: url("https://images.pexels.com/photos/8555087/pexels-photo-8555087.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <!-- Background Video-->

    <!-- Masthead-->
    <div class="masthead">
        <div class="masthead-content text-white">
            <div class="container-fluid px-4 px-lg-0">
                <h1 data-aos="fade-down" data-aos-duration="1000" style="position:absolute; bottom: 130%;"
                    class="fst-italic lh-1 mb-4">V art gallery</h1>
                <p data-aos="fade-right" data-aos-duration="2000" class="mb-5" style="margin-top: -40px">اهلا بك في موقعنا الخاص ببيع اللوحات
                    الفنية</p>
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row input-group-newsletter">
                        <div class="col-auto" style="margin-top: 9%">
                            <a data-aos="fade-up" data-aos-duration="3000" style="padding: 14px 28px; margin-right: 15px"
                                class="app-menu_item link-light btn btn-primary" href="../login">تسجيل الدخول</a>
                            <a data-aos="fade-up" data-aos-duration="3000" style="padding: 14px 28px"
                                class="app-menu_item link-light btn btn-primary" href="../register"> &nbsp;&nbsp; انضم
                                الينا
                                &nbsp; &nbsp;</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="social-icons">
        <div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">
            <a data-aos="fade-left" data-aos-duration="1000" style="position: relative; right: 0px;" id="twi"
                class="btn btn-light m-3" href="#!"><i class="fab fa-twitter text-primary fs-5"></i></a>
            <a data-aos="fade-left" data-aos-duration="2000" id="fac" class="btn btn-light m-3" href="#!"><i
                    class="fab fa-facebook-f text-primary fs-5"></i></a>
            <a data-aos="fade-left" data-aos-duration="3000" id="ins" class="btn btn-light m-3" href="#!"><i
                    class="fab fa-instagram text-primary fs-4"></i></a>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>

</html>
