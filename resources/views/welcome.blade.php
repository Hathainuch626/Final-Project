<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>MyFamilyTree</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

        <!-- W3.CSS -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

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

    </style>
    </head>
    <body >
          <!-- Navbar (sit on top) -->
          <div class="w3-top">
            <div class="w3-bar w3-black w3-card" id="myNavbar">
              <a href="#" class="w3-bar-item w3-button w3-wide">
                <i class="fa fa-tree" aria-hidden="true"></i>
                  <span class="familyicon">MyFamilyTree</span>
              </a>
              <!-- Right-sided navbar links -->
              <div class="w3-left w3-hide-small">
                <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
                <a href="#tree" class="w3-bar-item w3-button"><i class="fas fa-seedling"></i> แผนภูมิต้นไม้</a>
                <a href="#relat" class="w3-bar-item w3-button"><i class="fas fa-project-diagram"></i> แสดงความสัมพันธ์</a>
                <a href="#location" class="w3-bar-item w3-button"><i class="fas fa-map-marked-alt"></i> ค้นหาตำแหน่งบุคคล</a>
                <a href="#feedback" class="w3-bar-item w3-button"><i class="fas fa-comments"></i> ติดต่อสอบถาม</a>
              <div>
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">หน้าหลัก</a>
                        <div class="dropdown">
                        @else
                        <form class="form-inline" style="margin-left: 580px; margin-top: -7px;">
                        @if (Route::has('login'))
                          <button  type="button" onclick="w3_close()" class="btn btn-outline-success " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 30px; " href= "{{ route('login') }}">
                              เข้าสู่ระบบ</button>
                              @csrf
                        <form method="GET" action="{{ url('log') }}">
                            <div class="dropdown-menu col-6" >
                              <form class="px-4 py-3 " >
                              <h4 style="margin-left: 150px; ">เข้าสู่ระบบ</h4>
                                <div class="form-group col-6" style="margin-left: 60px;">
                                  <label for="email">อีเมล</label>
                                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email@example.com" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                      @error('email')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                </div>
                                <div class="form-group col-6" >
                                  <label for="password" class="col-15" style="margin-left: 60px;">รหัสผ่าน</label>
                                  <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" style="margin-left: 60px;" id="password" placeholder="รหัสผ่าน" required autocomplete="current-password">
                                    @error('password')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                  <div class="form-check col-6" style="margin-left: 40px;">
                                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                    <label class="form-check-label" for="dropdownCheck">
                                      Remember me
                                    </label>
                                  </div>
                                </div>
                                
                                <?php if(!isset($_SESSION['NAME'])) { ?>
                                  <button type="submit" class="btn btn-success col-8" style="margin-left: 70px; ">เข้าสู่ระบบ</button>
                              </form>
                                <div class="dropdown-divider"></div>
                                @if (Route::has('register'))
                                  <a class="dropdown-item" href="{{ route('register') }}">ยังไม่มีบัญชี? สมัครสมาชิก</a>
                                @endif
                                <?php } ?>
                                <a class="dropdown-item" href="{{ route('password.request') }}">ลืมรหัสผ่าน?</a>
                            </div>
                          </form>
                        </div>
                        @endauth
                      </form>
                  </div>
                  
                </div>
                  @endif
                  <!-- Hide right-floated links on small screens and replace them with a menu icon -->
                  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
                    <i class="fa fa-bars"></i>
                  </a> 
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
                      <img src="link.PNG" class="imgtop" alt="bal" width= "200" height="200" >
                      <h3>Story Family Your</h3>
                      <p>คุณสามารถเพิ่มรูปภาพคุณ และจะทำให้ครอบครัวคุณหาได้อย่างง่ายอีกด้วย!</p>
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
                    <!-- Team Section -->
                    <div class="w3-container" style="padding:128px 16px" id="team">
                      <h3 class="w3-center">THE TEAM</h3>
                      <p class="w3-center w3-large">The ones who runs this company</p>
                      <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
                        <div class="w3-col l3 m6 w3-margin-bottom">
                          <div class="w3-card">
                            <img src="/w3images/team2.jpg" alt="John" style="width:100%">
                            <div class="w3-container">
                              <h3>John Doe</h3>
                              <p class="w3-opacity">CEO & Founder</p>
                              <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                              <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
                            </div>
                          </div>
                        </div>
                        <div class="w3-col l3 m6 w3-margin-bottom">
                          <div class="w3-card">
                            <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
                            <div class="w3-container">
                              <h3>Anja Doe</h3>
                              <p class="w3-opacity">Art Director</p>
                              <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                              <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
                            </div>
                          </div>
                        </div>
                        <div class="w3-col l3 m6 w3-margin-bottom">
                          <div class="w3-card">
                            <img src="/w3images/team3.jpg" alt="Mike" style="width:100%">
                            <div class="w3-container">
                              <h3>Mike Ross</h3>
                              <p class="w3-opacity">Web Designer</p>
                              <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                              <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
                            </div>
                          </div>
                        </div>
                        <div class="w3-col l3 m6 w3-margin-bottom">
                          <div class="w3-card">
                            <img src="/w3images/team4.jpg" alt="Dan" style="width:100%">
                            <div class="w3-container">
                              <h3>Dan Star</h3>
                              <p class="w3-opacity">Designer</p>
                              <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                              <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                    <!-- Promo Section "Statistics" -->
                    <div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
                      <div class="w3-quarter">
                        <span class="w3-xxlarge">14+</span>
                        <br>Partners
                      </div>
                      <div class="w3-quarter">
                        <span class="w3-xxlarge">55+</span>
                        <br>Projects Done
                      </div>
                      <div class="w3-quarter">
                        <span class="w3-xxlarge">89+</span>
                        <br>Happy Clients
                      </div>
                      <div class="w3-quarter">
                        <span class="w3-xxlarge">150+</span>
                        <br>Meetings
                      </div>
                    </div>
                        <!-- Work Section -->
                          <div class="w3-container" style="padding:128px 16px" id="work">
                            <h3 class="w3-center">OUR WORK</h3>
                            <p class="w3-center w3-large">What we've done for people</p>
                            <div class="w3-row-padding" style="margin-top:64px">
                              <div class="w3-col l3 m6">
                                <img src="/w3images/tech_mic.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A microphone">
                            </div>
                            <div class="w3-col l3 m6">
                              <img src="/w3images/tech_phone.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A phone">
                            </div>
                            <div class="w3-col l3 m6">
                              <img src="/w3images/tech_drone.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A drone">
                            </div>
                            <div class="w3-col l3 m6">
                              <img src="/w3images/tech_sound.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Soundbox">
                            </div>
                          </div>

                          <div class="w3-row-padding w3-section">
                            <div class="w3-col l3 m6">
                              <img src="/w3images/tech_tablet.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tablet">
                            </div>
                            <div class="w3-col l3 m6">
                              <img src="/w3images/tech_camera.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A camera">
                            </div>
                            <div class="w3-col l3 m6">
                              <img src="/w3images/tech_typewriter.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A typewriter">
                            </div>
                            <div class="w3-col l3 m6">
                              <img src="/w3images/tech_tableturner.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tableturner">
                            </div>
                          </div>
                      </div>
                        <!-- Modal for full size images on click-->
                        <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
                          <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
                          <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
                            <img id="img01" class="w3-image">
                            <p id="caption" class="w3-opacity w3-large"></p>
                          </div>
                        </div>
                          <!-- Skills Section -->
                            <div class="w3-container w3-light-grey w3-padding-64">
                              <div class="w3-row-padding">
                                <div class="w3-col m6">
                                  <h3>Our Skills.</h3>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
                                     tempor incididunt ut labore et dolore.</p>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
                                      tempor incididunt ut labore et dolore.</p>
                                </div>
                                <div class="w3-col m6">
                                  <p class="w3-wide"><i class="fa fa-camera w3-margin-right"></i>Photography</p>
                                  <div class="w3-grey">
                                    <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
                                  </div>
                                    <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Web Design</p>
                                    <div class="w3-grey">
                                      <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
                                    </div>
                                      <p class="w3-wide"><i class="fa fa-photo w3-margin-right"></i>Photoshop</p>
                                      <div class="w3-grey">
                                        <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                  <!-- Pricing Section -->
                                  <div class="w3-container w3-center w3-dark-grey" style="padding:128px 16px" id="pricing">
                                    <h3>PRICING</h3>
                                    <p class="w3-large">Choose a pricing plan that fits your needs.</p>
                                    <div class="w3-row-padding" style="margin-top:64px">
                                      <div class="w3-third w3-section">
                                        <ul class="w3-ul w3-white w3-hover-shadow">
                                          <li class="w3-black w3-xlarge w3-padding-32">Basic</li>
                                          <li class="w3-padding-16"><b>10GB</b> Storage</li>
                                          <li class="w3-padding-16"><b>10</b> Emails</li>
                                          <li class="w3-padding-16"><b>10</b> Domains</li>
                                          <li class="w3-padding-16"><b>Endless</b> Support</li>
                                          <li class="w3-padding-16">
                                            <h2 class="w3-wide">$ 10</h2>
                                            <span class="w3-opacity">per month</span>
                                          </li>
                                          <li class="w3-light-grey w3-padding-24">
                                            <button class="w3-button w3-black w3-padding-large">Sign Up</button>
                                          </li>
                                        </ul>
                                      </div>
                                      <div class="w3-third">
                                        <ul class="w3-ul w3-white w3-hover-shadow">
                                          <li class="w3-red w3-xlarge w3-padding-48">Pro</li>
                                          <li class="w3-padding-16"><b>25GB</b> Storage</li>
                                          <li class="w3-padding-16"><b>25</b> Emails</li>
                                          <li class="w3-padding-16"><b>25</b> Domains</li>
                                          <li class="w3-padding-16"><b>Endless</b> Support</li>
                                          <li class="w3-padding-16">
                                            <h2 class="w3-wide">$ 25</h2>
                                            <span class="w3-opacity">per month</span>
                                          </li>
                                          <li class="w3-light-grey w3-padding-24">
                                            <button class="w3-button w3-black w3-padding-large">Sign Up</button>
                                          </li>
                                        </ul>
                                      </div>
                                      <div class="w3-third w3-section">
                                        <ul class="w3-ul w3-white w3-hover-shadow">
                                          <li class="w3-black w3-xlarge w3-padding-32">Premium</li>
                                          <li class="w3-padding-16"><b>50GB</b> Storage</li>
                                          <li class="w3-padding-16"><b>50</b> Emails</li>
                                          <li class="w3-padding-16"><b>50</b> Domains</li>
                                          <li class="w3-padding-16"><b>Endless</b> Support</li>
                                            <li class="w3-padding-16">
                                              <h2 class="w3-wide">$ 50</h2>
                                              <span class="w3-opacity">per month</span>
                                            </li>
                                            <li class="w3-light-grey w3-padding-24">
                                              <button class="w3-button w3-black w3-padding-large">Sign Up</button>
                                            </li>
                                          </ul>
                                      </div>
                                    </div>
                                </div>
                                <!-- Contact Section -->
                                <div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
                                  <h3 class="w3-center">CONTACT</h3>
                                  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
                                  <div style="margin-top:48px">
                                    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Chicago, US</p>
                                    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +00 151515</p>
                                    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: mail@mail.com</p>
                                  <br>
                                  <form action="/action_page.php" target="_blank">
                                    <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
                                    <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
                                    <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
                                    <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
                                    <p>
                                      <button class="w3-button w3-black" type="submit">
                                        <i class="fa fa-paper-plane"></i> SEND MESSAGE
                                      </button>
                                    </p>
                                  </form>
                                  <!-- Image of location/map -->
                                  <img src="/w3images/map.jpg" class="w3-image w3-greyscale" style="width:100%;margin-top:48px">
                                </div>
                              </div>
                              <!-- Footer -->
                              <footer class="w3-center w3-black w3-padding-64">
                                <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
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
