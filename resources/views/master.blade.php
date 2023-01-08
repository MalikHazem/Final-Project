<?php $user = auth()->user()?>
<!DOCTYPE html>
<html >
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="{{url('css/css.css')}}" rel="stylesheet"/>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/jq.js"></script>
    <script src="js/Paintings.js"></script>

</head>
<style>
.dropdown-content a:hover {
      background-color:
    }
</style>
<body>
    <nav style=" padding-bottom: 1% ; padding-top: 1%; background-color:black" class="navbar navbar-expand-sm navbar-dark  fixed-top">
        <div class="container">
            <img src="{{url('images/1653302152931.png')}}" style="width:15%;height:15%;margin-right: 1rem">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul style="font-size: 1em" class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/Paintings">عرض اللوحات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Paintings/create">اضافة لوحة</a>
                    </li>
                    @if(Auth::user()->permissions=="2" || Auth::user()->permissions=="3")
                        <li class="nav-item">
                            <a class="nav-link" href="/Paintings/showuser">لوحاتي</a>
                        </li>
                    @endif
                    @if(Auth::user()->permissions=="1")
                        <li class="nav-item">
                            <a class="nav-link" href="/Paintings/showadmin">جدول لوحة</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Users">المستخدمين</a>
                        </li>
                        <li class="nav-item">
                        </li>
                        <a class="nav-link" href="{{url('/Orders')}}">الطلبيات</a>
                    @endif
                </ul>
            <div dir="rtl" class="dropdown">
            <a>

                <svg style="color: white;" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
                </a>
                <div class="dropdown-content">
                <center>
                {{-- <p class="app-menu_item text-white">{{auth()->user()->permissions}}</p> --}}
                <p class="app-menu_item text-white">{{auth()->user()->first_name}}  {{auth()->user()->last_name}}</p>
                <a style="" class="app-menu_item text-white" href="/Users/passwordEdit">الاعدادات</a>
                <a style="@auth

                @endauth" class="app-menu_item text-white" href="{{ route('logout') }}">تسجيل الخروج</a>
            </center>
            </div>
            </div>
                        </div>
                    </div>
                </nav>
        <main>
            @yield('main')
        </main>

    <footer data-aos="fade-up-left" data-aos-duration="2000" style="background-color: black; width:101%" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                    <ul data-aos="flip-up" data-aos-duration="2000" class="list-inline mb-2">


                            <li class="list-inline-item">
                                <button id="show" style="background-color: black ; color: white;" type="button" class="collapsible">About</button>
                            </li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item">
                                <button id="show2" style="background-color: black ; color: white;" type="button" class="collapsible">Contact</button>
                            </li>

                            <li class="list-inline-item">⋅</li>

                            <li class="list-inline-item">
                            <button style="background-color: black ; color: white;" type="button" class="collapsible">Open Collapsible</button>
                            </li>
                            <p id="p" style="color: white">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.
                            </p>
                            <p id="p2" style="color: white">
                                Phone:059-306-1868<br>
                                Gmail:Malik.hazem.19@gmail.com
                            </p>
                            <li class="list-inline-item">⋅</li>
                            <p data-aos="fade-right" data-aos-duration="1500" id="copy" style="color: white;" class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2022. All Rights Reserved.</p>
                    </ul>

                </div>
                <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                    <ul class="list-inline mb-0">
                        {{-- style="border: 2px solid red;" --}}
                        <li data-aos="zoom-in-up" data-aos-duration="1500" id="facebook" class="list-inline-item me-4">
                            <a id="afacebook" href="#!"><i class="bi-facebook fs-3"></i></a>
                        </li>
                        <li data-aos="zoom-in-out" data-aos-duration="1500" id="twitter" class="list-inline-item me-4">
                            <a id="atwitter" href="#!"><i class="bi-twitter fs-3"></i></a>
                        </li>
                        <li data-aos="zoom-in-down" data-aos-duration="1500" id="instagram" class="list-inline-item me-4">
                            <a id="ainstagram" href="#!"><i class="bi-instagram fs-3"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
    <script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</body>
</html>
