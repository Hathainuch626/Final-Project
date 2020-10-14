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
    <!---------------------------------------------------------------------------------------------------------------------------------------------------------->  

    <style>
        body {font-family: "Lato", sans-serif;}
        
        .tab {
          height: 100%;
          width: 250px;
          position: fixed;
          z-index: 1;
          top: 0;
          left: 0;
          background-color: #4e4e4e;
          overflow-x: hidden;
          padding-top: 16px;
          margin-top: 60px;
        }
        
        .tab a {
          padding: 6px 8px 6px 16px;
          text-decoration: none;
          font-size: 20px;
          color: hsl(0, 0%, 99%);
          display: block;
        }
        
        .tab a:hover {
          color: rgb(255, 255, 255);
        }
    
         /* Style the tab content */
         .tabcontent {
            float: left;
            padding: 0px 0px;
            border: 0px solid #ccc;
            width: 70%;
            border-left: none;
            height: 0px;
            display: none;
        }
        
        .main {
          margin-left: 200px; /* Same as the width of the sidenav */
          padding: 0px 10px;
          margin-top: 50px;
        }
        
        @media screen and (max-height: 450px) {
          .sidebar {padding-top: 15px;}
          .sidebar a {font-size: 18px;}
        }

        /* Style the sidenav links and the dropdown button */
        .sidenav a, .dropdown-btn {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 20px;
            color: #ffffff;
            display: block;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
            outline: none;
        }

        /* On mouse-over */
        .sidenav a:hover, .dropdown-btn:hover {
            color: #f1f1f1;
        }

        /* Add an active class to the active dropdown button */
        .active {
            background-color: green;
            color: white;
        }
        /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
        .dropdown-container {
            display: none;
            background-color: #262626;
            padding-left: 8px;
        }

        /* Optional: Style the caret down icon */
        .fa-caret-down {
            float: right;
            padding-right: 8px;
        }
</style>
    
    <script>
            function openForm() {
                document.getElementById("myForm").style.display = "block";
            }
    
            function closeForm() {
                document.getElementById("myForm").style.display = "none";
            }
    
            function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
            }
    </script>
    
            <div class="tab">
                <a class="tablinks" onclick="openCity(event, 'user')"><i class="fas fa-address-card"></i> ข้อมูลลงทะเบียน</a>
                <a class="tablinks" onclick="openCity(event, 'repassword')"><i class="fa fa-fw fa-wrench"></i> เปลี่ยนรหัสผ่าน</a>
                <button class="dropdown-btn">แผนภูมิต้นไม้ <i class="fa fa-caret-down"></i></button>
                  <div class="dropdown-container">
                    <a class="tablinks" onclick="openCity(event, 'namefamily')">ตั้งชื่อครอบครัว</a>
                    <a class="tablinks" onclick="openCity(event, 'grouptree')">กลุ่มต้นไม้</a>
                    <a class="tablinks" onclick="openCity(event, 'relationship')">ความสัมพันธ์</a>
                    <a class="tablinks" onclick="openCity(event, 'person')">ผู้มีสิทธิ์</a>
                    <a class="tablinks" onclick="openCity(event, 'chart')">แผนภูมิ</a>
                  </div>
                <a class="tablinks" onclick="openCity(event, 'logout')"><i class="	fas fa-power-off"></i> ออกจากระบบ</a>
            </div>

            <div id="user" class="tabcontent" style=" margin-top: 40px; margin-left: 250px;" >

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-11">
                            <div class="card" style="margin: 60px 30px 20px 280px">
                                <div class="card-header">
                                    <i class="fas fa-user-circle"></i>
                                    {{ __('ข้อมูลการลงทะเบียน') }}
                                </div>
                                <div class="card-body">
                                        <!--<form method="POST" action="upload.php" enctype="multipart/form-data">-->
                                             <!-- <center><img src="https://cdn.pixabay.com/photo/2015/09/09/14/02/icon-931551_960_720.jpg" alt="Girl in a jacket" width="150" height="150" id="imgshow"></center> -->
                                            <!-- <center><input id="imginput" class="form-control filestyle margin images" data-input="true" type="file" data-buttonText="Upload Logo" data-size="sm" data-badge="false" onchange="uploadImage();" name="images" style="width:28%" /></center> -->
                                        <!--</form>-->
                                    
                                    <form method="POST" action="{{url('updateinfomenber')}} enctype="multipart/form-data">
                                        <center><img id="showlogo" style="background:#9d9d9d;width:170px;height:180px;" src="image\imageUser-Infouser\<?php if(isset($_SESSION["IMAGE"])){
                                            echo $usertest->image_user;
                                            }else{ echo "man11.png";}?>"> </center>

                                            <!-- <center><label for="text" class="">โลโก้</label><span class="text-muted">(.PNG)</span> </center><br> -->
                                            <center><input type="file" name="filelogo" id="fileimgToUpload"  OnChange="showPreviewlogo(this)"> </center><br>
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
    </div>
</div>
      <!-------------------------------------กลุ่มต้นไม้----------------------------------------------------------------------->
            <div id="repassword" class="tabcontent" style=" margin-top: 40px; margin-left: 250px;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-11">
                            <div class="card" style="margin: 60px 30px 20px 280px">
                                <div class="card-header">
                                <i class="fas fa-key"></i>
                                    {{ __('เปลี่ยนรหัสผ่าน') }}
                                </div>
                                <div class="card-body">
                                    <form>
                                    <div class="form-row" style= "margin-right:70px; margin-left:150px">
                                        <div class="form-group col-md-10" >
                                            <label for="Originalpassword">{{ __('รหัสผ่านเดิม') }}</label>
                                            <input type="text" class="form-control" id="inputOriginalpassword" value="<?php echo $_SESSION["PASSWORD"];?>"required>
                                        </div>
                                    </div>

                                    <div class="form-row" style= "margin-right:70px; margin-left:150px">
                                        <div class="form-group col-md-10" >
                                            <label for="password">{{ __('ตั้งรหัสผ่านใหม่') }}</label>
                                            <input type="text" class="form-control" id="password" >
                                        </div>
                                    </div>

                                    <div class="form-row" style= "margin-right:70px; margin-left:150px">
                                        <div class="form-group col-md-10" >
                                            <label for="password-confirm">{{ __('ยืนยันรหัสผ่านอีกครั้ง') }}</label>
                                            <input type="text" class="form-control" id="password-confirm" >
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary" style="margin: 10px 10px 20px 250px">บันทึกรหัสผ่าน</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
            <div id="namefamily" class="tabcontent" style=" margin-top: 70px; margin-left: 320px;">
                <center><h3>ตั้งชื่อครอบครัวของคุณ</h3></center>
                <div class="row" style="margin-top: 60px;">
                    <table class="table table-bordered">
                        <tr>
                            <th>ลำดับ</th>
                            <th>ชื่อต้นไม้</th>
                            <th width="280px">Action</th>
                        </tr>
                <?php 
                 use App\treecollection; 
                    $treecollec=treecollection::All();
                    $numtree=treecollection::count();
                    $treecount=0;
                        for ($i=0; $i < $numtree; $i++) { 
                            if($_SESSION['NAME']==$treecollec[$i]->creator){?>
                    <tr>
                        <td><?php $treecount++;echo $treecount;?></td>
                        <form action="createtree2" method="get">
                            <td><?php echo $treecollec[$i]->Clan;?></td>
                            <td>
                            <!-- <a class="btn btn-info" >Show</a> 
                            <a class="btn btn-info">Edit</a> -->
                            <input type="hidden" name="idd" id="idtree" value="<?php echo $treecollec[$i]->Clan;?>">
                            <button type="submit" class="btn btn-info">แสดง</button>
                                <!-- <form action="createtree2" method="get"><button type="submit" class="btn btn-info">แชร์</button></form> -->
                        </form>
                                <!-- <form action="" method="get"><button type="submit" class="btn btn-info">แชร์</button></form> -->
                    
                        </td>
                    </tr>
            <?php }
                else{
                    //echo ("don't have");
                    //break;
                }
            }
            ?>
            <!-- <tr>
                <td>1</td>
                <td>Clan Saeya</td>
                <td>
                    <form action="" method="POST">
                        <a class="btn btn-info">Show</a> 
                        <a class="btn btn-info">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr> -->
                </table>
                </div>
                <center><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" id="A">สร้างครอบครัวของคุณ</button></center>
                <div id="id01" class="modal">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <form class="modal-content" action="{{ url('createtree')}}">
                        <div class="container">
                            <h1>สร้างครอบครัวของคุณ</h1>
                           
                            <hr>
                            <label for="Clan"><b>ชื่อครอบครัว</b></label>
                            <input type="text" placeholder="กรอกชื่อ" name="Clan" required class="popup" id="Clan">
    
                            <!-- <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required class="popup" id="psw">
    
                            <label for="psw-repeat"><b>Repeat Password</b></label>
                            <input type="password" placeholder="Repeat Password" name="psw-repeat" required class="popup"> -->
                            <div class="clearfix">
                                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">ปิด</button>
                                <button type="submit" class="signupbtn" id="B">ตกลง</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    
            <div id="grouptree" class="tabcontent" style=" margin-top: 70px; margin-left: 300px;">
                <center><h2>กลุ่มต้นไม้</h2></center>
                <?php
                use App\infoUser;
                    $usertest=infoUser::All();
                    $count_menber=infoUser::count();
                    $countNo=0;
                    if($count_menber>0){?>
            <table >
            <tr>
            <th>No.</th>
            <th>Menber for tree</th>
            <th width="280px">option</th>
            </tr>
            <?php
                for ($i=0; $i <$count_menber ; $i++) {
                if ($usertest[$i]->Clan==$_SESSION['clantree']) {
                $countNo++;
                ?>
                <form action="/historyform" method="GET">
                    <input type="hidden" name="clan" value="<?php echo $usertest[$i]->Clan;?>">
                    <input type="hidden" name="id_menber" value="<?php echo $usertest[$i]->_id;?>">
                    <tr>
                    <td><?php echo $countNo;?></td>
                    <td><input type="text" name="id_name" id="id_name" value="<?php echo $usertest[$i]->Firstname;?>"></td>
                    <td> <nav> <button type="submit" class="btn btn-info">แสดง</button>
                    <button type="submit" class="btn btn-info">ลบ</button>
                    <button type="submit" class="btn btn-info">แก้ไข</button>
                </form></nav></td>
                </tr>

                <?php } 
                }
                }else{
                    echo "don't have menber";
                }

                ?>
                </table>
                </div>
            </div>

            <div id="relationship" class="tabcontent" style=" margin-top: 70px; margin-left: 250px;">
                <center><h3>เพิ่มความสัมพันธ์</h3></center>
                <?php
                use App\relationmodel;
                $count=relationmodel::count();
                $relation= relationmodel::all();
                for ($c=0; $c <$count ; $c++) { 
                # code...
                    if($relation[$c]->clan==$_SESSION['clantree']){
                        echo $relation[$c]->my."--->".$relation[$c]->relation."กับ".$relation[$c]->parent."<br>";
                    }
                }
                ?>
                <center><button onclick="document.getElementById('id03').style.display='block'" style="width:auto;" id="A">เพิ่มความสัมพันธ์</button></center>
            <div id="id03" class="modal">
                <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
                <form class="modal-content" action="{{ url('createrelation')}}" method="get">
            <div class="container">
                <h1>เพิ่มความสัมพันธ์</h1>
            <hr>
                <input type="text"  name="Clan" required class="popup" id="Clan" value="<?php echo $_SESSION['clantree'];?>">
                <label for="Clan"><b>กรอกชื่อของคุณ</b></label>
                <input type="text" placeholder="Enter Clan" name="my" required class="popup" id="my">

            <label for="psw"><b>กรอกชื่อบุคคล</b></label>
            <input type="text" placeholder="Enter parent" name="parent"  class="popup" id="parent">

            <label for="psw-repeat"><b>ความสัมพันธ์</b></label>
            <!-- <input type="password" placeholder="relation" name="relation" required class="popup" id="relation"> -->
                <select id="relation" class="form-control " name="relation">
                    <option selected>เลือก</option>
                    <option>พ่อ</option>
                    <option>แม่</option>
                    <option>ลูก</option>
                    <option>พี่</option>
                    <option>น้อง</option>
                    <option>ภรรยา</option>
                    <option>สามี</option>
                    <option>ลุง</option>
                    <option>อา</option>
                    <option>ป้า</option>
                </select><br>
            <div class="clearfix">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">ยกเลิก</button>
                <button type="submit" class="signupbtn" id="B">เพิ่มความสัมพันธ์</button>
            </div>
        </div>
    </form>
</div>
            </div>
    
            <div id="person" class="tabcontent" style=" margin-top: 70px; margin-left: 300px;">
                ผู้มีสิทธิ์<br>
                <?php
                use App\treeaccesscollection;
                    $access=treeaccesscollection::All();
                    $count_access=treeaccesscollection::count();
                        for ($i=0; $i < $count_access; $i++) { 
                            if($access[$i]->Clan==$_SESSION['clantree']){
                        echo $access[$i]->access_user." ตำแหน่ง ".$access[$i]->status;
                    }
                # code...
                }
            ?>
            </div>

            <div id="chart" class="tabcontent" style=" margin-left: 250px;">
                <h3>แผนภูมิต้นไม้</h3>
                <p>London is the capital city of England.</p>
            </div>
            
 <style>
    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box;}
        
    /* Full-width input fields */
    .popup[type=text], .popup[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }
        
        /* Add a background color when the inputs get focus */
        .popup[type=text]:focus, .popup[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }
        
        /* Set a style for all buttons */
        #A {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }
        #B {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 0px 0;
            border: none;
            cursor: pointer;
            width: 50%;
            opacity: 0.9;
        }
        #B:hover {
            opacity:1;
        }
        #A:hover {
            opacity:1;
        }
        
        /* Extra styles for the cancel button */
        .cancelbtn {
            padding: 14px 20px;
            background-color: #f44336;
        }
        
        /* Float cancel and signup buttons and add an equal width */
        .cancelbtn, .signupbtn {
            float: left;
            width: 50%;
        }
        
        /* Add padding to container elements */
        .container {
            padding: 16px;
        }
        
        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: #474e5d;
            padding-top: 50px;
        }
        
        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }
        
        /* Style the horizontal ruler */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }
            
        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 35px;
            top: 15px;
            font-size: 40px;
            font-weight: bold;
            color: #f1f1f1;
        }
        
        .close:hover,.close:focus {
            color: #f44336;
            cursor: pointer;
        }
        
        /* Clear floats */
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
        
        /* Change styles for cancel button and signup button on extra small screens */
        @media screen and (max-width: 300px) {
        .cancelbtn, .signupbtn {
            width: 100%;
            }
        }
             
</style>
<script>
    // Get the modal
var modal = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    }
    function copytextlink() {
        var copyText = document.getElementById("myInput");
        copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
        alert("Copied the text: " + copyText.value);
    }
    var modal = document.getElementById('id02');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    }
            // Get the modal
            var modal = document.getElementById("myModal");
                
            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");
                
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];
                
             // When the user clicks the button, open the modal 
            btn.onclick = function() {
                modal.style.display = "block";
            }
                
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }
                
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
</script>


    

   
<script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
// Accordion 
function myAccFunc() {
    var x = document.getElementById("demoAcc");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            } else {
            x.className = x.className.replace(" w3-show", "");
            }
}
                
// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();
                
                
// Open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
                 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

</script>



                     
        <button class="open-button" onclick="openForm()" ><i class="fas fa-envelope-open"></i><b>Inbox</b></button>
            <div class="chat-popup" id="myForm">
            <form action="/action_page.php" class="form-container">
            <h2>hathainuch</h12>
            <table class="table table-bordered">
            <tr>
                <td> Hello!! </td>
                <td>
                    <form action="{{url('Messenger')}}" method="POST">
                        <a href="{{ url('Messenger') }}" class="btn btn-info">Show</a> 
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

                    function openCity(evt, cityName) {
                        var i, tabcontent, tablinks;
                        tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }
                    document.getElementById(cityName).style.display = "block";
                    evt.currentTarget.className += " active";
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
<script language="JavaScript">
    function showPreviewlogo(ele) {
        $('#showlogo').attr('src', ele.value); // for IE
        if (ele.files && ele.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#showlogo').attr('src', e.target.result);
            }

            reader.readAsDataURL(ele.files[0]);
        }
    }
</script>
@endsection