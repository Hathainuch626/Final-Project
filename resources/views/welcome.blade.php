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
      </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-warning">
            <a class="navbar-brand" href="#">
              <i class="fa fa-tree" aria-hidden="true"></i>
                <span class="familyicon">MyFamilyTree</span>
            </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
              <div>
                    @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">หน้าหลัก</a>
                        @else
                        <form class="form-inline">
                                <a button type="button" class="button btn btn-dark" style="margin: -9px -2px 10px" href="{{ route('login') }}">เข้าสู่ระบบ</a></button>
                                @if (Route::has('register'))
                                  <a button type="button" class="button btn btn-danger" style="margin: -8px 15px 10px" href="{{ route('register') }}">สมัครสมาชิก</a></button>
                                @endif
                            @endauth
                        </form>
                    </div>
                    @endif
                </div>  
            </nav>

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="570px" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                    <div class="container">
                      <div class="carousel-caption text-left">
                        <h1>Sign Up with MyFamilyTree</h1>
                        <p>เพียงคุณสมัครสมาชิก คุณจะรู้ความสัมพันธ์ของครอบครัวในรูปแบบแผนภูมิต้นไม้ </p>
                        
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="570px" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                    <div class="container">
                      <div class="carousel-caption">
                        <h1>Create your online family tree</h1>
                        <p>สมัครสมาชิกแล้วมาสร้างแผนภูมิต้นไม้ครอบครัวออนไลน์ของคุณกันเถอะ! </p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">สร้างแผนภูมิต้นไม้</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="570px" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                    <div class="container">
                      <div class="carousel-caption text-right">
                        <h1>Story Family Your</h1>
                        <p>แบ่งปันเรื่องราวครอบครัวของคุณ และคุณสามารถค้นหาตำแหน่งบุคคลในครอบครัวของคุณได้อีกด้วย!</p>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

              <div class="container marketing">

                <!-- Three columns of text below the carousel -->
                <div class="row">
                  <div class="col-lg-4" style="margin: 60px -150px 10px 250px">
                    <svg class="bd-placeholder-img rounded-circle"  width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
                    <img src="global.PNG" class="imgtop" alt="bal" width= "200" height="200" >
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
                    <h2>ค้นหาตำแหน่งบุคคล</h2>
                    <p></p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-lg-4" style="margin: 60px 50px 10px 150px">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
                    <img src="dna.PNG" class="imgtree" alt="treedna" width= "200" height="200" >
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
                    <h2>แผนภูมิต้นไม้ครอบครัว</h2>
                    <p></p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                  </div><!-- /.col-lg-4 -->
                </div><!-- /.Heading -->

              <hr class="featurette-divider">

              <div class="row featurette">
                <div class="col-md-7">
                  <h2 class="featurette-heading">เกี่ยวกับเรา MyFamilyTree</h2>
                  <p><a class="btn btn-secondary" href="#" role="button">รายละเอียดเพิ่มเติม &raquo;</a></p>
                  <p class="lead"></p>
                </div>
                <div class="col-md-5">
                  <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
                </div>
              </div>
          
              <hr class="featurette-divider">
          
              <div class="row featurette">
                <div class="col-md-7 order-md-2">
                  <h2 class="featurette-heading">แสดงความสัมพันธ์ระหว่างบุคคล</h2>
                  <p><a class="btn btn-secondary" href="#" role="button">รายละเอียดเพิ่มเติม &raquo;</a></p>
                  <p class="lead"></p>
                </div>
                <div class="col-md-5 order-md-1">
                  <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
                </div>
              </div>
          
              <hr class="featurette-divider">
          
              <div class="row featurette">
                <div class="col-md-7">
                  <h2 class="featurette-heading"> ติดต่อสอบถามหรือแจ้งปัญหา</h2>
                  <p><a class="btn btn-secondary" href="#" role="button">รายละเอียดเพิ่มเติม &raquo;</a></p>
                  <p class="lead"></p>
                </div>
                <div class="col-md-5">
                  <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
                </div>
              </div>

              <hr class="featurette-divider">

            <!-- FOOTER -->
          <footer class="container">
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>&copy; 2017-2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
          </footer>
      </main>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script></body>
    </body>
</html>
