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

                                        <label class="form-check-label" style="color: black;" for="remember">{{ __('จดจำฉันไว้') }}</label>
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
                                            <button type="submit" class="btn btn-primaryyy" style="width: 210px; margin-left:-70px; ">ล็อกอิน</button>
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
                    <a class="dropdown-item" href="logout"onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('ออกจากระบบ') }}</a>
                        <form id="logout-form" action="logout" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                </div>
            </li>
        <?php } ?>
                    
        <div class="container" style="margin-top:30px">         
        <div class="row">
            <div class="col-2">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action " id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">หน้าหลัก</a>
                    <a class="list-group-item list-group-item-action active" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">ข้อมูลพื้นฐาน</a>
                        <div class="btn-group dropright">
                            <button type="button" class="list-group-item list-group-item-action dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ข้อมูลผู้ใช้
                            </button>
                                <div class="dropdown-menu">
                                    <button class="dropdown-item" type="button">ข้อมูลทั่วไป</button>
                                    <button class="dropdown-item" type="button">เพิ่มความสัมพันธ์</button>
                                    <button class="dropdown-item" type="button">สร้างต้นไม้ครอบครัว</button>
                            </div>
                        </div>
                    <a class="list-group-item list-group-item-action " id="list-repassword-list" data-toggle="list" href="#list-repassword" role="tab" aria-controls="repassword">เปลี่ยนรหัสผ่าน</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="logout">ออกจากระบบ</a>
                
                </div>
            </div>
           
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card" style="margin: -180px 30px 20px 150px">
                            <div class="card-header">{{ __('ข้อมูลพื้นฐาน') }}</div>
                                <div class="card-body">
                                <form method="POST" action="{{route('regis.store')}}">

                                <div class="col-md-9">
                                    <div class="AAtreat" >
                                        <center><div class="fakeimg">
                                        <img src="man11.PNG" class="rounded" alt="Cinque Terre" width= "100" height="100" color="red" style="margin: 20px 10px 20px 80px">
                                        <br><button type="button" class="btn btn-primary btn-sm " style="margin: 10px 10px 20px 80px">เปลี่่ยนรูป</button>

                            
                                <div class="form-group row">
                                    <label for="fname" class="col-md-3 col-form-label text-md-right">{{ __('ชื่อ') }}</label>
                        
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="validationCustom01" value="<?php  echo $_SESSION["NAME"];?>" required>
                               </div>
                               
                                    <label for="lname" class="col-md-2 col-form-label text-md-right">{{ __('นามสกุล') }}</label> 
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="validationCustom01" value="<?php echo $_SESSION["LNAME"];?>" required>
                                </div>
                            </div>
                        

                        <div class="form-group row">
                                <label for="dmy" class="col-md-3 col-form-label text-md-right">{{ __('วัน/เดือน/ปีเกิด') }}</label>                           
                                <div class="col-md-4">                                   
                                <input type="text" class="form-control" id="validationCustom01" value="<?php echo $_SESSION["BIRDDATE"];?>" required>
                                </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                <label for="inputSex" class="col-md-6 col-form-label text-md-right" name="">{{ __('เพศ') }}</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="validationCustom01" value="<?php echo $_SESSION["SEX"];?>" required>
                                </div>
                            </div>
                        </div>
                    </div>

                       <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('อีเมล') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" id="validationCustom01" value="<?php  echo $_SESSION["EMAIL"];?>" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('รหัสผ่าน') }}</label>

                            <div class="col-md-6">
                            <input type="text" class="form-control" id="validationCustom01" value="<?php  echo $_SESSION["PASSWORD"];?>" required>
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('แก้ไขข้อมูล') }}  
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection