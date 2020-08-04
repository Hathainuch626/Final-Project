@extends('layouts.app')

@section('content')
<?php session_start(); if(!isset($_SESSION['EMAIL'])) { ?>
                                <div class="front nav-item" style="margin-top: px;font-family: 'Athiti', sans-serif;font-size: 16px;">
                                        <a class="text-item"  id="userDropdown" href="login" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><button class="btn-login btn btn-outline-primaryy"><i class="fas fa-user-circle span-i-user"></i><div class="text-mage">เข้าสู่ระบบ</div></button></a>
                                            <div class="dropdown-menu dropdown-menu-right" style="margin-top: 13px;" aria-labelledby="userDropdown">
                                                <ul class="navbar-nav ml-auto">
                                                    <div class="account-dropdown js-dropdown">
                                                        <div class="info clearfix">
                                                     
                                                            <h3><div class="card-header">{{ __('เข้าสู่ระบบ') }}</div></h3>
                                                            <div class="" style="font-family: 'Athiti', sans-serif;font-size: 16px;">
                                                                <form method="POST" action="password.login">
                                                                    @csrf

                                                                    <div class="form-group row">
                                                                        <div class="col-md-6">
                                                                            <input id="username" type="username" class="form-control @error('email') is-invalid @enderror" style="width: 210px;height: 40px;margin-left:31px;" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="ชื่อผู้ใช้ของคุณ">

                                                                            @error('username')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <div class="col-md-6">
                                                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" style="width: 210px; height: 40px;margin-left:31px;" name="password" required autocomplete="current-password" placeholder="รหัสผ่านของคุณ">

                                                                            @error('password')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <div class="col-md-6 offset-md-4">
                                                                            <div class="form-check" style="margin-left:-71px;">
                                                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                                                <label class="form-check-label" style="color: black;" for="remember">
                                                                                    {{ __('จดจำฉันไว้') }}
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <div class="form-group row mb-0">
                                                        
                                                                        
                                                                        <div class="col-md-8 offset-md-4">
                                                                            @if (Route::has('password.request'))
                                                                                <a class="btn btn-link btn-re" style="margin-top:-10px; margin-left: 5px; " href="{{ route('password.request') }}">
                                                                                    {{ __('ลืมรหัสผ่านใช่หรือไม่?') }}
                                                                                </a>
                                                                            @endif
                                                                            <button type="submit" class="btn btn-primaryyy" style="width: 210px; margin-left:-70px; " >
                                                                                ล็อกอิน
                                                                            </button>

                                                                            <div style="margin-left:-30px; margin-top: 10px;">คุณยังไม่มีบัญชี?</div> 
                                                                            <a type="submit"  id="button" class="btn btn-link btn-layouts" style="margin-left:70px;margin-top:-49px;"  href="#" data-toggle="modal" data-target="#exampleModalCenter">สร้างบัญชี</a>    
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                </div>
                             <?php }
                            
                            else if(isset($_SESSION['EMAIL'])){
                            ?>
                            
                                            <a class="dropdown-item" href="logout"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('ออกจากระบบ') }}
                                            </a>
                                            <form id="logout-form" action="logout" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                                
                                            
                                        </ul>
                                    </div>
                                       
                                </li>
                            <?php } ?>
                    <div class="container" style="margin-top:30px">
                        <div class="row">
                        <div class="col-sm-4">
                            <h3>Some Links</h3>
                            <p>menu</p>
                                <ul class="nav nav-pills flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link">ข้อมูลพื้นฐาน</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" id='testac'>ข้อมูลผู้ใช้</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">ข้อมูลทั่วไป</a>
                                    </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">ออกจากระบบ</a>
                                </li>
                                </ul>
                            <hr class="d-sm-none">
                        </div>
                    <div class="col-sm-8">
                        <div class="AAtreat" >
                        <center><div class="fakeimg">
                        <img src="A.jpg" class="rounded" alt="Cinque Terre" width= "200" height="200" color="red">
                    <br><button type="button" class="btn btn-primary btn-sm">เปลี่่ยนรูป</button>
                    </div></center></div>
                        <h2>ชื่อ :<?php  echo $_SESSION["NAME"];?> นามสกุล :<?php echo $_SESSION["LNAME"];?></h2>
                    <hr>
                        <h2>อีเมล :<?php  echo $_SESSION["EMAIL"];?></h2><br>
                    <hr>
                        <h2>วันเดือนปีเกิด :<?php echo $_SESSION["BIRDDATE"];?></h2><br><hr>
                        <h2>เพศ :<?php echo $_SESSION["SEX"];?></h2><br><hr>
                        <h2>รห้ส :<?php  echo $_SESSION["PASSWORD"];?></h2><hr>
                    <br><button type="button" class="btn btn-primary btn-sm">แก้ไข</button>
                </div>
            </div>

    @endsection