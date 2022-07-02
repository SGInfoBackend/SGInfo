<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SGInfo</title>
    <link rel="stylesheet" href="{{asset('/assets/css/home_page.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/login_register.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/room_detail.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/general_info.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/contact.css')}}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="https://fonts.googleapis.com/css2?family=Francois+One&family=Montserrat:wght@300;400;500;600;700;800;900&family=Open+Sans:ital,wght@0,600;1,300;1,500;1,600;1,800&family=Poppins:ital,wght@0,300;0,500;0,600;0,900;1,500;1,700&family=Roboto+Condensed:ital@1&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,500&display=swap" rel="stylesheet">
    <!-- Icon Scout -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
      <!-- SWIPER JS -->
      <!-- <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    /> -->

      <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


    <!-- Google Font(Montserrat) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@200;300;400;500;600;700;800;900&family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    @livewireStyles()
</head>
<body>
    <section id="header">
        <!-- <div class="container"> -->
            <a href="/"><h3>SG<span class="sginfo">info</span></h3></a>
            <ul class="navbar">
                @if(Route::has('login'))
                    @auth
                        @if (Auth::user()->utype == 'ADM')
                            <li><a class="active" href="/">Home</a></li>
                            <li><a href="">Rooms</a></li>
                            <li><a href="">General</a></li>
                            <li><a href="">Jobs</a></li>
                            <li><a href="/contact">Meet Us</a></li>
                            <li class="menu-item" >
                                <a title="logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{ route('logout')}}">Logout</a>
                            </li>
                            <form id="logout-form" action="{{ route('logout')}}" method="POST">@csrf</form>
                            <a href="#" title="My Account">My Account ({{Auth::user()->name}})</a>
                            <li><a href=""><img src="{{asset('assets/images/myanmar.png')}}" alt="" class="logoimg"></a></li>
                        @else
                            <li><a class="active" href="/">Home</a></li>
                            <li><a href="">Rooms</a></li>
                            <li><a href="">General</a></li>
                            <li><a href="">Jobs</a></li>
                            <li><a href="/contact">Meet Us</a></li>
                            <li><a href="/contact">User</a></li>
                            <li class="menu-item" >
                                <a title="logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{ route('logout')}}">Logout</a>
                            </li>
                            <form id="logout-form" action="{{ route('logout')}}" method="POST">@csrf</form>
                            <a href="#" title="My Account">My Account ({{Auth::user()->name}})<i class="fa fa-angle-down"></i></a>
                            <li><a href=""><img src="{{asset('assets/images/myanmar.png')}}" alt="" class="logoimg"></a></li>
                        @endif
                @else
                    <li id="lg-bag"><a href="/login"><i class="uil uil-user"></i>Login</a></li>
                    <li id="lg-bag"><a href="/register"><i class="uil uil-user"></i>Register</a></li>
                    <li><a href=""><img src="{{asset('assets/images/myanmar.png')}}" alt="" class="logoimg"></a></li>
                @endif
                @endif
            </ul>
      </section>

    {{$slot}}
    <footer class="section-footer">
        <div class="col">
            <h4>SGINFO</h4>
            <p>Lorem ipsum dolor<br> sit amet consectetur adipisicing<br> elit. Voluptatibus, dignissimos?</p>
        </div>

        <div class="col">
            <h4>INFORMATION</h4>
            <a href="#">About us</a>
            <a href="#">Contact Us</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Privacy Policy</a>
            <a href="#">F.A.Q.</a>
        </div>

        <div class="col">
            <h4>CATEGORIES</h4>
            <a href="#">Room</a>
            <a href="#">Job</a>
            <a href="#">General</a>
        </div>

        <div class="col">
            <h4>CONTACT</h4>
            <p>90 Madison Ave,First Floor New York,NY,10016</p>
            <p>Telephone: 200 256 1855</p>
            <p>Email: mail@yourmail.com</p>

            <div class="icon">
                <i class="uil uil-facebook-f"></i>
                <i class="uil uil-twitter"></i>
                <i class="uil uil-google"></i>
                <i class="uil uil-instagram-alt"></i>
                <i class="uil uil-youtube"></i>
            </div>

        </div>

        <div class="copyright">
            <p>InMotionLab@2014 | All Rights Reserved</p>
        </div>


    </footer>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/jobs.js')}}"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    @livewireScripts()
</body>
</html>
