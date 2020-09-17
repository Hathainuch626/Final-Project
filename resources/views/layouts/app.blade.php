<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('MyFamilyTree', 'MyFamilyTree') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- W3.CSS -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
            
            body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

            body, html {
              height: 100%;
              line-height: 1.8;
            }

            /* Full height image header */
            .bgimg-1 {
                background-position: center;
                background-size: cover;
                background-image: url("/w3images/mac.jpg");
                min-height: 100%;
            }

            .w3-bar .w3-button {
                padding: 16px;
            }

            .w3baritemw3button {
                margin-top: 50px;
                margin-right: 600px;
                margin-right: 100px;
            }

            .w3baritemw3button1 {
                margin-right: 100px;

            }

    </style>

</head>
<body>
        <!-- Navbar (sit on top) -->
        <div class="w3-top">
            <div class="w3-bar w3-black w3-card" id="myNavbar">
              <a href="{{ url('/') }}" class="w3-bar-item w3-button w3-wide">
                <i class="fa fa-tree" aria-hidden="true"></i>
                    {{ config('MyFamilyTree', 'MyFamilyTree') }}
              </a>
              <!-- Right-sided navbar links -->
              <div class="w3-left w3-hide-small">
                <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
                <a href="#tree" class="w3-bar-item w3-button"><i class="fas fa-seedling"></i> แผนภูมิต้นไม้</a>
                <a href="#relat" class="w3-bar-item w3-button"><i class="fas fa-project-diagram"></i> แสดงความสัมพันธ์</a>
                <a href="#location" class="w3-bar-item w3-button"><i class="fas fa-map-marked-alt"></i> ค้นหาตำแหน่งบุคคล</a>
                <a href="#feedback" class="w3-bar-item w3-button"><i class="fas fa-comments"></i> ติดต่อสอบถาม</a>
                        <!-- Authentication Links -->
                        <?php if(!isset($_SESSION['NAME'])) { ?>
                            
                            <form class="form-inline" >
                                <a  href="{{ route('login') }}" onclick="w3_close()" class="w3-bar-item w3-button" >{{ __('เข้าสู่ระบบ') }}</a></button>
                            @if (Route::has('register'))
                                <div class="top-links">
                                    <a href="{{ route('register') }}" onclick="w3_close()" class="w3-bar-item w3-button">{{ __('สมัครสมาชิก') }}</a></button>
                            </form>
                            @endif
                            <?php } ?>
                            <?php if(isset($_SESSION['NAME'])) { ?> 
                                <div class="w3-dropdown">
                                <div class="w3-dropdown-hover " style="margin-left: 700px; margin-top: -58px;">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                                        </svg>
                                        <span class="badge badge-light">10</span> 
                                            <span class="sr-only">unread messages</span>
                                    <button class="w3-button dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><?php echo $_SESSION['NAME'];?></button>
                                    <div class="w3-dropdown-content w3-bar-block w3-card-4">
                                    <div>
                                            <a class="dropdown-item" href="{{url('Account')}}"
                                                onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    {{ __('Account') }}
                                            </a>
                                        <form id="logout-form" action="{{url('Account')}}"  style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                    <div>
                                            <a class="dropdown-item" href="{{url('home')}}"
                                                onclick="event.preventDefault();
                                                    document.getElementById('logout-form2').submit();">
                                                    {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form2" action="{{ url('home')}}" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <!-- Hide right-floated links on small screens and replace them with a menu icon -->
            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
                <i class="fa fa-bars"></i>
              </a>
               <!-- Sidebar on small screens when clicking the menu icon -->
            <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
                <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
                <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
                <a href="#tree" onclick="w3_close()" class="w3-bar-item w3-button">แผนภูมิต้นไม้</a>
                <a href="#relat" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
                <a href="#location" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
                <a href="##feedback" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
                <a  onclick="w3_close()" class="w3-bar-item w3-button" href= "{{ route('login') }}">เข้าสู่ระบบ</a>
                <a  onclick="w3_close()" class="w3-bar-item w3-button" href="{{ route('register') }}">สมัครสมาชิก</a>   
            </nav>
        </div>                      
        <script>
            // Modal Image Gallery
            function onClick(element) {
                document.getElementById("img01").src = element.src;
                document.getElementById("modal01").style.display = "block";
                var captionText = document.getElementById("caption");
                captionText.innerHTML = element.alt;
            }

            // Toggle between showing and hiding the sidebar when clicking the menu icon
            var mySidebar = document.getElementById("mySidebar");

            function w3_open() {
                if (mySidebar.style.display === 'block') {
                    mySidebar.style.display = 'none';
                }     else {
                        mySidebar.style.display = 'block';
                }
            }

            // Close the sidebar with the close button
            function w3_close() {
                mySidebar.style.display = "none";
            }
        </script> 
        <main class="py-4">
            @yield('content')
        </main>
</body>
</html>