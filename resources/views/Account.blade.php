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
              
                ?>
        </div>
    </div>
        
                <div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:200px; margin-top: 60px;">
                    <div class="list-group" id="list-tab" role="tablist">
                        <a href="#" class="w3-bar-item w3-button ">
                            <h3 class="w3-bar-item">เมนู</h3>
                        </a>
                        <a href="#list-home" id="list-home-list" data-toggle="list" class="w3-bar-item w3-button" role="tab" aria-controls="home" >
                            <i class="fas fa-home"></i>หน้าหลัก</a>
                        <a href="#list-profile" id="list-profile-list" data-toggle="list" class="w3-bar-item w3-button " role="tab" aria-controls="profile">
                            <i class="fas fa-user-circle"></i>ข้อมูลการลงทะเบียน</a>
                        <a href="#list-general" id="list-general-list" data-toggle="list" class="w3-bar-item w3-button " role="tab" aria-controls="general">
                            <i class="fas fa-user-edit"></i>ข้อมูลส่วนตัว</a>
                        <a href="#list-repassword" id="list-repassword-list" data-toggle="list" class="w3-bar-item w3-button " role="tab" aria-controls="repassword">
                            <i class="fas fa-key"></i>เปลี่ยนรหัสผ่าน</a>
                        <a href="#list-addrelationship" id="list-addrelationship-list" data-toggle="list" class="w3-bar-item w3-button" role="tab" aria-controls="addrelationship" >
                            <i class="fas fa-sitemap"></i>เพิ่มความสัมพันธ์</a>
                        <a href="#list-groupaddrelat" id="list-groupaddrelat-list" data-toggle="list" class="w3-bar-item w3-button" role="tab" aria-controls="groupaddrelat" >
                            <i class="fas fa-users"></i>กลุ่มความสัมพันธ์</a>
                        <a href="#list-createtree" id="list-createtree-list" data-toggle="list" class="w3-bar-item w3-button" role="tab" aria-controls="createtree" >
                            <i class="fas fa-leaf"></i>แผนภูมิต้นไม้ครอบครัว</a>
                        <a href="#list-search" id="list-search-list" data-toggle="list" class="w3-bar-item w3-button" role="tab" aria-controls="search">
                            <i class="fas fa-map-marker-alt"></i>ค้นหาตำแหน่งบุคคล</a>
                        <a href="#list-logout" id="list-logout-list" data-toggle="list" class="w3-bar-item w3-button" role="tab" aria-controls="logout">
                            <i class="fas fa-door-closed"></i>ออกจากระบบ</a>
                    </div>
                </div>

                <div class="col-13">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-home" role="tabpanel"  aria-labelledby="list-home-list">...</div>
                        <!-- listprofile ข้อมูลการลงทะเบียน -->
                        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-11">
                                        <div class="card" style="margin: 100px 30px 20px 280px">
                                            <div class="card-header">
                                                <i class="fas fa-user-circle"></i>
                                                {{ __('ข้อมูลการลงทะเบียน') }}
                                            </div>
                                            <div class="card-body">
                                                <form method="POST" action="{{route('regis.store')}}">
                                                    <img src="man11.PNG" class="rounded" alt="Cinque Terre" width= "100" height="100" color="red" style="margin: 20px 10px 20px 260px">
                                                    <br><button type="button" class="btn btn-primary btn-sm " style="margin: 10px 10px 20px 270px">เปลี่่ยนรูป</button>
                                                <form>
                                                <div class="form-row" style= "margin-right:70px; margin-left:150px">
                                                    <div class="form-group col-md-4" style= "margin-right:20px; ">
                                                        <label for="fname">{{ __('ชื่อ') }}</label>
                                                        <input type="text" class="form-control" id="inputname" value="<?php echo $_SESSION["NAME"];?>"required>
                                                    </div>
                                                    <div class="form-group col-md-4" >
                                                        <label for="lname" >{{ __('นามสกุล') }}</label>
                                                        <input type="text" class="form-control" id="inputlname" value="<?php echo $_SESSION["LNAME"];?>" required>
                                                    </div>
                                                </div>
                                                <div class="form-row" style= "margin-right:70px; margin-left:150px">
                                                    <div class="form-group col-md-6" >
                                                        <label for="email">{{ __('อีเมล') }}</label>
                                                        <input type="text" class="form-control" id="inputemail" value="<?php  echo $_SESSION["EMAIL"];?>" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4" style= "margin-right:20px; margin-left:150px">
                                                        <label for="dmy">{{ __('วัน/เดือน/ปีเกิด') }}</label>
                                                        <input type="date" class="form-control" id="inputbirthday" value="<?php echo $_SESSION["BIRDDATE"];?>" required>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="inputSex">{{ __('เพศ') }}</label>
                                                        <input type="text" class="form-control" id="inputSex" value="<?php echo $_SESSION["SEX"];?>" required>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary" style="margin: 10px 10px 20px 250px">แก้ไขข้อมูล</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        
<!-- //listprofile ข้อมูลการลงทะเบียน -->  
<!-- listgeneral ข้อมูลส่วนตัว -->  
                        <div class="tab-pane fade" id="list-general" role="tabpanel" aria-labelledby="list-general-list">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-11">
                                        <div class="card" style="margin: 100px 30px 20px 280px">
                                            <div class="card-header">
                                                <i class="fas fa-user-edit"></i>
                                                {{ __('แบบฟอร์มกรอกประวัติส่วนตัว') }}
                                            </div>
                                            <div class="card-body">
                                                <form method="GET" action="{{ url('createtree') }}">
                                                <form>
                                                <div class="form-row" style= "margin-right:70px; margin-left:180px">
                                                    <div class="form-group col-md-8" >
                                                        <label for="namefamily">{{ __('ตระกูล') }}</label>
                                                        <input type="text" name="namefamily" id="namefamily" class="form-control" placeholder="กรอกชื่อครอบครัว" >
                                                    </div>
                                                </div>
                                                <div class="form-row" style= "margin-right:70px; margin-left:150px">
                                                    <div class="form-group col-md-4" style= "margin-right:20px; ">
                                                        <label for="fname">{{ __('ชื่อ') }}</label>
                                                        <input type="text" name="fname" id="fname" class="form-control"  placeholder="กรอกชื่อจริง" >
                                                    </div>
                                                    <div class="form-group col-md-4" >
                                                        <label for="lname" >{{ __('นามสกุล') }}</label>
                                                        <input type="text" name="lname" id="lname" class="form-control"  placeholder="กรอกนามสกุล">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4" style= "margin-right:20px; margin-left:150px">
                                                        <label for="dmy">{{ __('วัน/เดือน/ปีเกิด') }}</label>
                                                        <input type="date" name="birthday" id="birthday" class="form-control" >
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputSex">{{ __('เพศ') }}</label>
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
                                                <div class="form-row" style= "margin-right:70px; margin-left:150px">
                                                    <div class="form-group col-md-4" style= "margin-right:20px; ">
                                                        <label for="career">{{ __('อาชีพ') }}</label>
                                                        <input type="text" name="career" id="career" class="form-control"  placeholder="กรอกชื่ออาชีพ" >
                                                    </div>
                                                    <div class="form-group col-md-6" >
                                                        <label for="Pnumber" >{{ __('เบอร์โทรศัพท์') }}</label>
                                                        <input type="text" name="Pnumber" id="Pnumber" class="form-control"  placeholder="กรอกเบอร์โทรศัพท์">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="address">ที่อยู่ปัจจุบัน:</label>
                                                    <textarea class="form-control" rows="3" id="address" name="address"></textarea>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-3" style= "margin-right:50px; margin-left:70px">
                                                        <label for="postalcode">{{ __('รหัสไปรษณีย์') }}</label>
                                                        <input type="text" name="postalcode" id="postalcode" class="form-control" >
                                                    </div>
                                                    <div class="form-group col-md-4" style= "margin-right:10px; margin-left:80px">
                                                        <label for="inputprovince">{{ __('จังหวัด') }}</label>
                                                        <div class="col-md-10">
                                                            <select id="inputprovince" class="form-control " >
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
                                                <div class="form-group">
                                                    <label for="address">ที่อยู่ตามทะเบียนบ้าน:</label>
                                                    <textarea class="form-control" rows="3" id="address" name="address"></textarea>
                                                </div>
                                                <div class="form-row ">
                                                    <div class="form-group col-md-3" style= "margin-right:50px; margin-left:70px">
                                                        <label for="postalcode">{{ __('รหัสไปรษณีย์') }}</label>
                                                        <input type="text" name="postalcode" id="postalcode" class="form-control" >
                                                    </div>
                                                    <div class="form-group col-md-4" style= "margin-right:10px; margin-left:80px">
                                                        <label for="inputprovince">{{ __('จังหวัด') }}</label>
                                                        <div class="col-md-10">
                                                            <select id="inputprovince" class="form-control " >
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
                                                <div class="form-row" >
                                                    <div class="form-group col-md-4" style= "margin-right:20px; margin-left:80px">
                                                        <label for="facebook">{{ __('facebook') }}</label>
                                                        <input type="text" name="facebook" id="facebook" class="form-control"  placeholder="กรอกชื่อหรืออีเมล" >
                                                    </div>
                                                    <div class="form-group col-md-4" >
                                                        <label for="email" >{{ __('อีเมล') }}</label>
                                                        <input type="text" name="email" id="email" class="form-control"  placeholder="example@gmail.com">
                                                    </div>
                                                </div>
                                                <div class="form-row" >
                                                    <div class="form-group col-md-6" style= "margin-right:30px; margin-left:120px">
                                                        <label for="password">{{ __('รหัสผ่าน') }}</label>
                                                        <input type="text" name="password" id="password" class="form-control" placeholder="ตั้งรหัสผ่าน"  >
                                                    </div>
                                                </div>
                                                <div class="form-row" >
                                                    <div class="form-group col-md-6" style= "margin-right:30px; margin-left:120px">
                                                        <label for="password-confirm">{{ __('ยืนยันรหัสผ่าน') }}</label>
                                                        <input type="text" name="password-confirm" id="password-confirm" class="form-control" placeholder="กรอกรหัสผ่านอีกครั้ง"  >
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
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>      
                    </div>
<!-- //listgeneral ข้อมูลส่วนตัว -->  
<!-- listaddrelationship เปลี่ยนรหัสผ่าน --> 
                        <div class="tab-pane fade" id="list-repassword" role="tabpanel" aria-labelledby="list-repassword-list">
                        <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-11">
                                        <div class="card" style="margin: 100px 30px 20px 280px">
                                            <div class="card-header">
                                            <i class="fas fa-key"></i>
                                                {{ __('เปลี่ยนรหัสผ่าน') }}
                                            </div>
                                            <div class="card-body">
                                                <form>
                                                <div class="form-row" style= "margin-right:70px; margin-left:150px">
                                                    <div class="form-group col-md-10" >
                                                        <label for="Originalpassword">{{ __('รหัสผ่านเดิม') }}</label>
                                                        <input type="text" class="form-control" placeholder="กรอกรหัสผ่านเดิม" id="inputOriginalpassword">
                                                    </div>
                                                </div>
                                                <div class="form-row" style= "margin-right:70px; margin-left:150px">
                                                    <div class="form-group col-md-10" >
                                                        <label for="Newpassword">{{ __('รหัสผ่านใหม่') }}</label>
                                                        <input type="text" class="form-control" placeholder="ตั้งรหัสผ่านใหม่" id="inputNewpassword">
                                                    </div>
                                                </div>
                                                <div class="form-row" style= "margin-right:70px; margin-left:150px">
                                                    <div class="form-group col-md-10" >
                                                        <label for="Newpassword">{{ __('ยืนยีนรหัสผ่านใหม่') }}</label>
                                                        <input type="text" class="form-control" placeholder="กรอกรหัสผ่านใหม่อีกครั้ง" id="inputNewpassword">
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop1" style="margin: 10px 10px 20px 250px">เปลี่ยนรหัสผ่าน</button>
                                                    <div class="modal fade" id="staticBackdrop1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel1" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="staticBackdropLabel1">ยืนยันข้อมูล</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    คุณได้เปลี่ยนรหัสผ่านเรียบร้อยแล้ว
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-primary">ตกลง</button>
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
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
                        </div>
<!-- //listaddrelationship เปลี่ยนรหัสผ่าน -->   
                        <div class="tab-pane fade" id="list-addrelationship" role="tabpanel" aria-labelledby="list-addrelationship-list">
                        <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-11">
                                        <div class="card" style="margin: 100px 30px 20px 280px">
                                            <div class="card-header">
                                                <i class="fas fa-sitemap"></i>
                                                {{ __('เพิ่มความสัมพันธ์') }}
                                            </div>
                                            <div class="card-body">
                                                <form method="GET" action="{{url('inrelation')}}">  
                                                <form>
                                                <div class="form-row" style= "margin-right:70px; margin-left:150px">
                                                    <div class="form-group col-md-4" >
                                                        <label for="name">{{ __('ชื่อ') }}</label>
                                                        <input type="text" class="form-control" id="my" name="my" placeholder="กรอกชื่อบุคคล">
                                                    </div>
                                                </div>
                                                <div class="form-row" style= "margin-right:70px; margin-left:150px">
                                                    <div class="form-group col-md-4" style= "margin-right:20px; ">
                                                        <label for="nameme">{{ __('ชื่อ') }}</label>
                                                        <input type="text" class="form-control" id="parent" name="parent" placeholder="กรอกชื่อของคุณ" >
                                                    </div>
                                                    <div class="form-group col-md-4" >
                                                        <label for="lname" >{{ __('ความสัมพันธ์') }}</label>
                                                        <div class="col-md-10">
                                                            <select id="relationship2" class="form-control " name="relationship2">
                                                                <option selected>เลือก</option>
                                                                <option>ทวด</option>
                                                                <option>ปู่</option>
                                                                <option>ย่า</option>
                                                                <option>ตา</option>
                                                                <option>ยาย</option>
                                                                <option>พ่อ</option>
                                                                <option>อา</option>
                                                                <option>แม่</option>
                                                                <option>น้า</option>
                                                                <option>ลูก</option>
                                                                <option>พี่</option>
                                                                <option>น้อง</option>
                                                                <option>หลาน</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row" style= "margin-right:70px; margin-left:150px">
                                                    <div class="form-group col-md-4" style= "margin-right:20px; ">
                                                        <label for="nameme">{{ __('ชื่อ') }}</label>
                                                        <input type="text" class="form-control" id="nameme" name="nameme" placeholder="กรอกชื่อบุคคล">
                                                    </div>
                                                    <div class="form-group col-md-4" >
                                                        <label for="lname" >{{ __('ความสัมพันธ์') }}</label>
                                                        <div class="col-md-10">
                                                            <select id="relationship" class="form-control " name="relationship">
                                                                <option selected>เลือก</option>
                                                                <option>ทวด</option>
                                                                <option>ปู่</option>
                                                                <option>ย่า</option>
                                                                <option>ตา</option>
                                                                <option>ยาย</option>
                                                                <option>พ่อ</option>
                                                                <option>อา</option>
                                                                <option>แม่</option>
                                                                <option>น้า</option>
                                                                <option>ลูก</option>
                                                                <option>พี่</option>
                                                                <option>น้อง</option>
                                                                <option>หลาน</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal"style="margin: 10px 10px 20px 200px">เพิ่มบุคคล</button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">ยืนยันข้อมูล</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            คุณได้บันทึกข้อมูลความสัมพันธ์เรียบร้อยแล้ว
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary" >ตกลง</button>
                                                            <button type="button" class="btn btn-secondary" data-toggle="modal">ปิด</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect2">ข้อมูลเพิ่มบุคคล</label>
                                                <select multiple class="form-control" id="exampleFormControlSelect2">
                                                    <?php
                                                        use App\relationmodel;
                                                        $book= relationmodel::all();
                                                        $count=relationmodel::count();
                                                        for ($g=0; $g < $count ; $g++) { 
                                                    ?>      
                                                    <option><?php echo $book[$g]->parent."มีความสัมพันธ์เป็น".$book[$g]->relation."ของ".$book[$g]->my;?></option>
                                                    <?php }
                                                ?>
                                                </select>
                                            </div>
                                            <button type="button" class="btn btn-success" style="margin: 20px 10px 20px 50px">บันทึกข้อมูล</button>
                                            <button type="button" class="btn btn-warning" style="margin: 20px 10px 20px 50px">แก้ไข</button>
                                            <button type="button" class="btn btn-danger" style="margin: 20px 10px 20px 50px">ยกเลิก</button>


                                        </form>            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                        <div class="tab-pane fade" id="list-groupaddrelat" role="tabpanel" aria-labelledby="list-groupaddrelat-list">5575</div>
                        <div class="tab-pane fade" id="list-createtree" role="tabpanel" aria-labelledby="list-createtree-list">7897</div>
                        <div class="tab-pane fade" id="list-search" role="tabpanel" aria-labelledby="list-search-list">3244</div>
                        <div class="tab-pane fade" id="list-logout" role="tabpanel" aria-labelledby="list-logout-list">2354</div>
                    </div>
                </div>
            </div>
        </div>  

  
            <button class="open-button" onclick="openForm()">messager</button>

        <script>
            function myAccFunc() {
            var x = document.getElementById("demoAcc");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
                x.previousElementSibling.className += " w3-green";
            } else { 
                x.className = x.className.replace(" w3-show", "");
                x.previousElementSibling.className = 
                x.previousElementSibling.className.replace(" w3-green", "");
            }
        }

            function myDropFunc() {
            var x = document.getElementById("demoDrop");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
                x.previousElementSibling.className += " w3-green";
            } else { 
                x.className = x.className.replace(" w3-show", "");
                x.previousElementSibling.className = 
                x.previousElementSibling.className.replace(" w3-green", "");
            }
        }
        </script> 
       
            </div>
        </div>
    </div>
</div>

        <button class="open-button" onclick="openForm()">messager</button>
            <div class="chat-popup" id="myForm">
            <form action="/action_page.php" class="form-container">
            <h2>Sy Mieww</h12>
            <table class="table table-bordered">
            <tr>
                <td>Hello!! </td>
                <td>
                    <form action="" method="POST">
                        <a class="btn btn-info">Show</a> 
                    </form>
                </td>
            </tr>
            </table>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
            </div>

            <script>
                    function openForm() {
                        document.getElementById("myForm").style.display = "block";
                    }

                    function closeForm() {
                        document.getElementById("myForm").style.display = "none";
                    }
            </script>
            
            <style>
                body {font-family: Arial, Helvetica, sans-serif;}
                * {box-sizing: border-box;}

                /* Button used to open the chat form - fixed at the bottom of the page */
                .open-button {
                    background-color: #555;
                    color: white;
                    padding: 16px 20px;
                    border: none;
                    cursor: pointer;
                    opacity: 0.8;
                    position: fixed;
                    bottom: 15px;
                    right: 28px;
                    width: 100px;
                    border-radius: 5px;
                }

                /* The popup chat - hidden by default */
                .chat-popup {
                    display: none;
                    position: fixed;
                    bottom: 0;
                    right: 15px;
                    border: 3px solid #f1f1f1;
                    z-index: 9;
                }

            /* Add styles to the form container */
            .form-container {
                max-width: 300px;
                padding: 10px;
                background-color: white;
            }

            /* Full-width textarea */
            .form-container textarea {
                width: 100%;
                padding: 15px;
                margin: 5px 0 22px 0;
                border: none;
                background: #f1f1f1;
                resize: none;
                min-height: 200px;
            }

            /* When the textarea gets focus, do something */
            .form-container textarea:focus {
                background-color: #ddd;
                outline: none;
            }

            /* Set a style for the submit/send button */
            .form-container .btn {
                background-color: #4CAF50;
                color: white;
                padding: 16px 20px;
                border: none;
                cursor: pointer;
                width: 100%;
                margin-bottom:10px;
                opacity: 0.8;
            }

            /* Add a red background color to the cancel button */
            .form-container .cancel {
                background-color: red;
            }

            /* Add some hover effects to buttons */
            .form-container .btn:hover, .open-button:hover {
                opacity: 1;
            }
</style>
@endsection