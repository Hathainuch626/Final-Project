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
    
    <style >

            body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

            body, html {
              height: 100%;
              line-height: 1.8;
            }

            .w3-bar .w3-button {
                padding: 16px;
            }

            .topnav {
              overflow: hidden;
              background-color: #333;
            }

            .topnav a {
              float: left;
              color: #f2f2f2;
              text-align: center;
              padding: 14px 16px;
              text-decoration: none;
              font-size: 17px;
            }

            .topnav a:hover {
              background-color: #ddd;
              color: black;
            }

            .topnav a.active {
              background-color: #4CAF50;
              color: white;
            }

            .topnav-right {
              float: right;
            }

    </style>

</head>
<body>
        <!-- Navbar (sit on top) -->
        <div class="w3-top">
            <div class="w3-bar w3-black w3-cardt topnav" id="myNavbar">
              <a href="{{ url('/') }}" class="w3-bar-item w3-button w3-wide">
                <i class="fa fa-tree" aria-hidden="true"></i>
                    {{ config('MyFamilyTree', 'MyFamilyTree') }}
              </a>
              <!-- Right-sided navbar links -->
              <div class="topnav  w3-hide-small w3-black ">
                <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
                <a href="#tree" class="w3-bar-item w3-button"><i class="fas fa-seedling"></i> แผนภูมิต้นไม้</a>
                <a href="#relat" class="w3-bar-item w3-button"><i class="fas fa-project-diagram"></i> แสดงความสัมพันธ์</a>
                <a href="#location" class="w3-bar-item w3-button"><i class="fas fa-map-marked-alt"></i> ค้นหาตำแหน่งบุคคล</a>
                <a href="#feedback" class="w3-bar-item w3-button"><i class="fas fa-comments"></i> ติดต่อสอบถาม</a>
                      <div class="topnav-right">
                        <!-- Authentication Links -->
                        <?php if(!isset($_SESSION['NAME'])) { ?>
                         
                            <form class="form-inline "  >
                                <a  href="{{ route('login') }}" onclick="w3_close()" class="w3-bar-item w3-button " ><i class="fas fa-sign-in-alt"></i>{{ __('เข้าสู่ระบบ') }}</a></button>
                            @if (Route::has('register'))
                                <div class="top-links ">
                                    <a href="{{ route('register') }}" onclick="w3_close()" class="w3-bar-item w3-button " >{{ __('สมัครสมาชิก') }}</a></button>
                            </form>
                            @endif
                          </div>
                            <?php } ?>
                            <?php if(isset($_SESSION['NAME'])) { ?> 
                                <div class="w3-dropdown">
                                <div class="w3-dropdown-hover " >
                              
                                    <button class="w3-button dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><?php echo $_SESSION['NAME'];?></button>
                                    <div class="w3-dropdown-content w3-bar-block w3-card-4 w3-dark-grey">
                                    <div>
                                            <a class="dropdown-item " href="{{url('Account')}}"
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
                <a href="#relat" onclick="w3_close()" class="w3-bar-item w3-button">แสดงความสัมพันธ์</a>
                <a href="#location" onclick="w3_close()" class="w3-bar-item w3-button">ค้นหาตำแหน่งบุคคล</a>
                <a href="##feedback" onclick="w3_close()" class="w3-bar-item w3-button">ติดต่อสอบถาม</a>
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
       
                 
                </div> 
              </div>
              <!-- Sidebar on small screens when clicking the menu icon -->
            <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
                <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
                <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
                <a href="#tree" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fas fa-seedling"></i>แผนภูมิต้นไม้</a>
                <a href="#relat" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fas fa-project-diagram"></i>แสดงความสัมพันธ์</a>
                <a href="#location" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fas fa-map-marked-alt"></i>ค้นหาตำแหน่งบุคคล</a>
                <a href="##feedback" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fas fa-comments"></i>ติดต่อสอบถาม</a>
                <a  onclick="w3_close()" class="w3-bar-item w3-button" href= "{{ route('login') }}">เข้าสู่ระบบ</a>
                <a  onclick="w3_close()" class="w3-bar-item w3-button" href="{{ route('register') }}">สมัครสมาชิก</a>    
            </nav>
          </div>
        </div>
                <!-- About Section -->
                <div class="w3-container" style="padding:128px 16px" id="about">
                  <h1 class="w3-center">ABOUT MY FAMILY TREE</h1>
                  <div class="w3-row-padding w3-center" style="margin-top:64px">
                    <div class="w3-quarter">
                      <img src="organization.PNG" class="imgtop" alt="bal" width= "200" height="200" >
                      <h3>Sign Up with MyFamilyTree</h3>
                      <p>เพียงคุณสมัครสมาชิก คุณจะรู้ความสัมพันธ์ของครอบครัวในรูปแบบแผนภูมิต้นไม้</p>
                    </div>
                    <div class="w3-quarter">
                      <img src="tree.PNG" class="imgtop" alt="bal" width= "200" height="200" >
                      <h3>Create your online family tree</h3>
                      <p>สมัครสมาชิกแล้วมาสร้างแผนภูมิต้นไม้ครอบครัวออนไลน์ของคุณกันเถอะ! </p>
                    </div>
                    <div class="w3-quarter">
                      <img src="message.PNG" class="imgtop" alt="bal" width= "200" height="200" >
                      <h3>Send Message</h3>
                      <p>คุณสามารถส่งข้อความของคุณให้กับครอบครัวคุณได้อย่างง่ายอีกด้วย!</p>
                    </div>
                    <div class="w3-quarter">
                      <img src="book1.PNG" class="imgtop" alt="bal" width= "200" height="200" >
                      <h3>Relationship Group</h3>
                      <p>ถ้าคุณอยากรู้เกี่ยวกับความสัมพันธ์ในครอบครัวให้มากขึ้นกว่าเดิม เพียงแค่สมัครสมาชิก</p>
                    </div>
                  </div>
                </div>
                  <!-- Promo Section - "We know design" -->
                  <div class="w3-container w3-dark-grey" style="padding:128px 16px" id="tree" >
                    <div class="w3-row-padding">
                      <div class="w3-col m6">
                        <h3><i class="fas fa-seedling"></i> แผนภูมิต้นไม้</h3>
                        <p>คุณอยากรู้ว่าบุคคลในครอบครัวอยู่ที่ไหน? </p>
                        <p>สมัครสมาชิกหรือเข้าสู่ระบบแล้วค้นหาบุคคลในครอบครัวของคุณกันเถอะ!</p>
                        <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Works</a></p>
                      </div>
                      <div class="w3-col m6">
                        <img class="w3-image w3-round-large" src="dna.PNG" alt="Buildings" width="500" height="300">
                      </div>
                    </div>
                  </div>
                  <!-- Promo Section - "We know design" -->
                  <div class="w3-container " style="padding:128px 16px" id="relat" >
                    <div class="w3-row-padding">
                      <div class="w3-col m6">
                        <img class="w3-image w3-round-large" src="family-tree4.PNG" alt="Buildings" width="500" height="300">
                      </div>
                      <div class="w3-col m6">
                        <h3> <i class="fas fa-project-diagram"></i>แสดงความสัมพันธ์</h3>
                        <p></p>
                        <p></p>
                        <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Works</a></p>
                      </div>
                    </div>
                  </div>
                  <!-- Promo Section - "We know design" -->
                  <div class="w3-container w3-dark-grey" style="padding:128px 16px" id="location" >
                    <div class="w3-row-padding">
                      <div class="w3-col m6">
                        <h3><i class="fas fa-map-marked-alt"></i> ค้นหาตำแหน่งบุคคล</h3>
                        <p>คุณอยากรู้ว่าบุคคลในครอบครัวอยู่ที่ไหน? </p>
                        <p>สมัครสมาชิกหรือเข้าสู่ระบบแล้วค้นหาบุคคลในครอบครัวของคุณกันเถอะ!</p>
                        <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Works</a></p>
                      </div>
                      <div class="w3-col m6">
                        <img class="w3-image w3-round-large" src="global.PNG" alt="Buildings" width="500" height="300">
                      </div>
                    </div>
                  </div>
                  <!-- Promo Section - "We know design" -->
                  <div class="w3-container w3-light-grey" style="padding:128px 16px" id="feedback" >
                    <div class="w3-row-padding">
                      <div class="w3-col m6">
                        <img class="w3-image w3-round-large" src="feedback.PNG" alt="Buildings" width="500" height="300">
                      </div>
                      <div class="w3-col m6">
                        <h3><i class="fas fa-comments"></i> ติดต่อสอบถาม</h3>
                        <p>คุณอยากรู้ว่าบุคคลในครอบครัวอยู่ที่ไหน? </p>
                        <p>สมัครสมาชิกหรือเข้าสู่ระบบแล้วค้นหาบุคคลในครอบครัวของคุณกันเถอะ!</p>
                        <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Works</a></p>
                      </div>
                    </div>
                  </div>
                        
                              <!-- Footer -->
                              <footer class="w3-center w3-black w3-padding-64">
                                <a href="#about" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
                                <div class="w3-xlarge w3-section">
                                  <i class="fa fa-facebook-official w3-hover-opacity"></i>
                                  <i class="fa fa-instagram w3-hover-opacity"></i>
                                  <i class="fa fa-snapchat w3-hover-opacity"></i>
                                  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
                                  <i class="fa fa-twitter w3-hover-opacity"></i>
                                  <i class="fa fa-linkedin w3-hover-opacity"></i>
                                </div>

          <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
    </footer>

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
    </div>
    </body>
</html>
