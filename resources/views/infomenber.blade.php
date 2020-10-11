<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('MyFamilyTree', 'MyFamilyTree') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
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
    <script src="https://unpkg.com/gojs/release/go-debug.js"></script>
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
                        <?php session_start();
                         if(!isset($_SESSION['NAME'])) { ?>
                            
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
        <!-- -------------------------------------------------------------------------------------------------
        -------------------------------------------------------------------------------------------------
        ------------------------------------------------------------------------------------------------- -->
        <center><?php echo $_GET['id_menber']?></center>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin: 20px 15px 10px">
                <div class="card-header">{{ __('แบบฟอร์มกรอกประวัติส่วนตัว') }}</div>

                <div class="card-body">
                    <form method="GET" action="{{ url('createtree') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('ตระกูล') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="กรอกชื่อครอบครัว" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                            <div class="form-group row">
                                <label for="fname" class="col-md-2 col-form-label text-md-right">{{ __('ชื่อ') }}</label>
                            
                                <div class="col-md-4">
                                    <input type="text" placeholder="กรอกชื่อจริง" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus >

                                    @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                
                                <label for="lname" class="col-md-2 col-form-label text-md-right">{{ __('นามสกุล') }}</label> 
                             <div class="col-md-4">
                                    <input type="lname" placeholder="กรอกนามสกุล" class="form-control @error('lname') is-invalid @enderror"  name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>
                                
                                    @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        
                            
                            <div class="form-group row">
                                <label for="dmy" class="col-md-2 col-form-label text-md-right">{{ __('วัน/เดือน/ปีเกิด') }}</label>                           
                                <div class="col-md-4">                                   
                                    
                                        <input type="date" class="form-control @error('dmy') is-invalid @enderror" name="dmy" value="{{ old('dmy') }}" required autocomplete="dmy" autofocus>
                                    
                            </div>
                                <div class="col-md-4">
                                    <div class="form-group row">
                                    <label for="inputSex" class="col-md-6 col-form-label text-md-right">{{ __('เพศ') }}</label>
                                        <div class="col-md-6">
                                            <select id="inputSex" class="form-control " >
                                                <option selected>เลือก</option>
                                                <option>ชาย</option>
                                                <option>หญิง</option>
                                                <option>ไม่ระบุ</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="form-group row">
                                <label for="career" class="col-md-2 col-form-label text-md-right">{{ __('อาชีพ') }}</label>

                            <div class="col-md-4">
                                <input id="career" type="career" placeholder="กรอกอาชีพ" class="form-control @error('career') is-invalid @enderror" name="career" value="{{ old('career') }}" required autocomplete="career">

                                @error('career')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                
                                <label for="Pnumber" class="col-md-2 col-form-label text-md-right">{{ __('เบอร์โทรศัพท์') }}</label> 
                             <div class="col-md-4">
                                    <input type="Pnumber" placeholder="กรอกเบอรโทรศัพท์" class="form-control @error('Pnumber') is-invalid @enderror"  name="Pnumber" value="{{ old('Pnumber') }}" required autocomplete="Pnumber" autofocus>
                                
                                    @error('Pnumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>

                        <div class="form-group">
                            <label for="address">ที่อยู่ปัจจุบัน:</label>
                            <textarea class="form-control" rows="3" id="address" name="address"></textarea>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                    <div class="form-group row">
                                        <label for="inputprovince" class="col-md-6 col-form-label text-md-right" >{{ __('จังหวัด') }}</label>
                                        <div class="col-md-6">
                                            <select id="inputprovince" class="form-control " name="inputprovince">
                                                <option selected>เลือก</option>
                                                <option>กรุงเทพมหานคร</option>
                                                <option>กาญจนบุรี</option>
                                                <option>จันทบุรี</option>
                                                <option>ฉะเชิงเทรา</option>
                                                <option>ชลบุรี</option>
                                                <option>ชัยนาท</option>
                                                <option>ตราด</option>
                                                <option>นครนายก</option>
                                                <option>นครปฐม</option>
                                                <option>พระนครศรีอยุธยา</option>
                                                <option>เพชรบุรี</option>
                                                <option>ระยอง</option>
                                                <option>ราชบุรี</option>
                                                <option>ลพบุรี</option>
                                                <option>สมุทรปราการ</option>
                                                <option>สมุทรสงคราม</option>
                                                <option>สมุทรสาคร</option>
                                                <option>สระแก้ว</option>
                                                <option>นนทบุรี</option>
                                                <option>สระบุรี</option>
                                                <option>ปทุมธานี</option>
                                                <option>สิงห์บุรี</option>
                                                <option>ประจวบคีรีขันธ์</option>
                                                <option>สุพรรณบุรี</option>
                                                <option>ปราจีนบุรี</option>
                                                <option>กาฬสินธ์</option>
                                                <option>ขอนแก่น</option>
                                                <option>ชัยภูมิ</option>
                                                <option>นครพนม</option>
                                                <option>นครราชสีมา</option>
                                                <option>บุรีรัมย์</option>
                                                <option>มหาสารคาม</option>
                                                <option>มุกดาหาร</option>
                                                <option>ยโสธร</option>
                                                <option>ร้อยเอ็ด</option>
                                                <option>เลย</option>
                                                <option>ศรีสะเกษ</option>
                                                <option>สกลนคร</option>
                                                <option>สุรินทร์</option>
                                                <option>หนองคาย</option>
                                                <option>หนองบัวลำภู</option>
                                                <option>อำนาจเจริญ</option>
                                                <option>อุดรธานี</option>
                                                <option>อุบลราชธานี</option>
                                                <option>เชียงราย</option>
                                                <option>เชียงใหม่</option>
                                                <option>น่าน</option>
                                                <option>พะเยา</option>
                                                <option>แพร่</option>
                                                <option>แม่ฮ่องสอน</option>
                                                <option>ลำปาง</option>
                                                <option>ลำพูน</option>
                                                <option>อุตรดิตถ์</option>
                                                <option>กระบี่</option>
                                                <option>ชุมพร</option>
                                                <option>ตรัง</option>
                                                <option>นครศรีธรรมราช</option>
                                                <option>นราธิวาส</option>
                                                <option>ปัตตานี</option>
                                                <option>พังงา</option>
                                                <option>พัทลุง</option>
                                                <option>ภูเก็ต</option>
                                                <option>ระนอง</option>
                                                <option>สตูล</option>
                                                <option>สงขลา</option>
                                                <option>สุราษฎร์ธานี</option>
                                                <option>ยะลา</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                            </div>
                               
                                <label for="postalcode" class="col-md-4 col-form-label text-md-right">{{ __('รหัสไปรษณีย์') }}</label>
                            
                                <div class="col-md-4">
                                    <input type="text" placeholder="กรอกรหัสไปรษณีย์" class="form-control @error('postalcode1') is-invalid @enderror" name="postalcode" value="{{ old('postalcode') }}" required autocomplete="postalcode" autofocus >
                                
                                    @error('postalcode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                        </div>

                        <div class="form-group">
                            <label for="address">ที่อยู่ตามทะเบียนบ้าน:</label>
                            <textarea class="form-control" rows="3" id="address" name="address"></textarea>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                    <div class="form-group row">
                                        <label for="inputprovince2" class="col-md-6 col-form-label text-md-right">{{ __('จังหวัด') }}</label>
                                        <div class="col-md-6">
                                            <select id="inputprovince2" class="form-control " name="inputprovince2" >
                                                <option selected>เลือก</option>
                                                <option>กรุงเทพมหานคร</option>
                                                <option>กาญจนบุรี</option>
                                                <option>จันทบุรี</option>
                                                <option>ฉะเชิงเทรา</option>
                                                <option>ชลบุรี</option>
                                                <option>ชัยนาท</option>
                                                <option>ตราด</option>
                                                <option>นครนายก</option>
                                                <option>นครปฐม</option>
                                                <option>พระนครศรีอยุธยา</option>
                                                <option>เพชรบุรี</option>
                                                <option>ระยอง</option>
                                                <option>ราชบุรี</option>
                                                <option>ลพบุรี</option>
                                                <option>สมุทรปราการ</option>
                                                <option>สมุทรสงคราม</option>
                                                <option>สมุทรสาคร</option>
                                                <option>สระแก้ว</option>
                                                <option>นนทบุรี</option>
                                                <option>สระบุรี</option>
                                                <option>ปทุมธานี</option>
                                                <option>สิงห์บุรี</option>
                                                <option>ประจวบคีรีขันธ์</option>
                                                <option>สุพรรณบุรี</option>
                                                <option>ปราจีนบุรี</option>
                                                <option>กาฬสินธ์</option>
                                                <option>ขอนแก่น</option>
                                                <option>ชัยภูมิ</option>
                                                <option>นครพนม</option>
                                                <option>นครราชสีมา</option>
                                                <option>บุรีรัมย์</option>
                                                <option>มหาสารคาม</option>
                                                <option>มุกดาหาร</option>
                                                <option>ยโสธร</option>
                                                <option>ร้อยเอ็ด</option>
                                                <option>เลย</option>
                                                <option>ศรีสะเกษ</option>
                                                <option>สกลนคร</option>
                                                <option>สุรินทร์</option>
                                                <option>หนองคาย</option>
                                                <option>หนองบัวลำภู</option>
                                                <option>อำนาจเจริญ</option>
                                                <option>อุดรธานี</option>
                                                <option>อุบลราชธานี</option>
                                                <option>เชียงราย</option>
                                                <option>เชียงใหม่</option>
                                                <option>น่าน</option>
                                                <option>พะเยา</option>
                                                <option>แพร่</option>
                                                <option>แม่ฮ่องสอน</option>
                                                <option>ลำปาง</option>
                                                <option>ลำพูน</option>
                                                <option>อุตรดิตถ์</option>
                                                <option>กระบี่</option>
                                                <option>ชุมพร</option>
                                                <option>ตรัง</option>
                                                <option>นครศรีธรรมราช</option>
                                                <option>นราธิวาส</option>
                                                <option>ปัตตานี</option>
                                                <option>พังงา</option>
                                                <option>พัทลุง</option>
                                                <option>ภูเก็ต</option>
                                                <option>ระนอง</option>
                                                <option>สตูล</option>
                                                <option>สงขลา</option>
                                                <option>สุราษฎร์ธานี</option>
                                                <option>ยะลา</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                            </div>
                               
                                <label for="postalcode2" class="col-md-4 col-form-label text-md-right">{{ __('รหัสไปรษณีย์') }}</label>
                            
                                <div class="col-md-4">
                                    <input type="text" placeholder="กรอกรหัสไปรษณีย์" class="form-control @error('postalcode2') is-invalid @enderror" name="postalcode2" value="{{ old('postalcode2') }}" required autocomplete="postalcode2" autofocus >
                                
                                    @error('postalcode2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                        </div>   
                         
                        
                        <div class="form-group row">
                                <label for="facebook" class="col-md-2 col-form-label text-md-right">{{ __('facebook') }}</label>
                            
                                <div class="col-md-4">
                                    <input type="text" placeholder="กรอกชื่อหรืออีเมล์" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value="{{ old('facebook') }}" required autocomplete="facebook" autofocus >

                                    @error('facebook')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('อีเมล') }}</label>

                            <div class="col-md-4">
                                <input id="email" type="email" placeholder="example@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                            

                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('รหัสผ่าน') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="ตั้งรหัสผ่าน" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('Password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-3 col-form-label text-md-right">{{ __('ยืนยันรหัสผ่านอีกครั้ง') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" placeholder="ยืนยันรหัสผ่าน" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop" style="margin: 10px 10px 20px 250px">บันทึกประวัติส่วนตัว</button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">ยืนยันข้อมูล</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                    <div class="modal-body">
                                        คุณได้บันทึกประวัติส่วนตัวเรียบร้อยแล้ว
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">ตกลง</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </body>
</html>      