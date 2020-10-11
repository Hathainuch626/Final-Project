@extends('layouts.app')

@section('content')
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
            <a href="#relat" onclick="w3_close()" class="w3-bar-item w3-button">แสดงความสัมพันธ์</a>
            <a href="#location" onclick="w3_close()" class="w3-bar-item w3-button">ค้นหาตำแหน่งบุคคล</a>
            <a href="#feedback" onclick="w3_close()" class="w3-bar-item w3-button">ติดต่อสอบถาม</a>
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
<!-- --------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------- -->
<style>
   body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}


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

        <?php if (!isset($_GET['idd'])) {
        }
        else {
            $_SESSION['clantree']=$_GET['idd'];
        }?>

        <div id="id02" class="modal">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
            <form class="modal-content" action="{{ url('sendmessage')}}">
                <div class="container">
                    <h1>Create your family</h1>
                    <p>Please fill in this form to create an account.</p>
                    <hr>
                    <input type="text"  name="idd" required class="popup" id="idd" value="<?php echo $_SESSION['clantree'];?>">
                    <label for="Clan"><b>ชื่อผู้รับ</b></label><br>
                    <input type="email" placeholder="Enter Clan" name="email" required class="popup" id="email">

                    <input type="hidden" placeholder="Enter parent" name="message"  class="popup" id="message" value="
                    <?php echo 'มีการแชร์จาก'.$_SESSION['clantree'].'ของ'.$_SESSION['NAME'].'คุณยอมรับหรือไม่';?>"><br>
                    <input type="hidden" name="tree" value="<?php echo $_SESSION['clantree'];?>">
                    <label for="sender"><b>รับลิงค์เพื่อแชร์</b></label><br>
                    <input type="text" value="http://localhost:8000/createtree2?idd=<?php echo $_SESSION['clantree'];?>" id="myInput" class="popup"><br>
                    <button onclick="copytextlink()">Copy text</button>
                    <div class="clearfix">
                        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                        <button type="submit" class="signupbtn" id="B">send</button>
                    </div>
                </div>
            </form>
        </div>


        <center><h3><?php
            if (!isset($_GET['idd'])) {
        }
        else {
            $_SESSION['clantree']=$_GET['idd'];
        }
        echo $_SESSION['clantree'];?></h3></center>
        <!-- <div style='margin-left:1100px'>
        ประเภท:<select name="menuly" id="menuly">
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        </select>
        </div> -->
        <style>
        * {box-sizing: border-box}
        body {font-family: "Lato", sans-serif;}

        /* Style the tab */
        .tab {
            float: left;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
            width: 30%;
            height: 300px;
        }

        /* Style the buttons inside the tab */
        .tab button {
            display: block;
            background-color: inherit;
            color: black;
            padding: 22px 16px;
            width: 100%;
            border: none;
            outline: none;
            text-align: left;
            cursor: pointer;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current "tab button" class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            float: left;
            padding: 0px 12px;
            border: 1px solid #ccc;
            width: 70%;
            border-left: none;
            height: 500px;
        }
        #tree {
            width: 100%;
            height: 80%;
            position: relative;
        }
        [node-id] rect {
            fill: #016e25;
        }

        [node-id='1'] rect {
            fill: #750000;
        }

        .field_0 {
            font-family: Impact;
            text-transform: uppercase;
            fill: #a3a3a3;
        }

        .field_1 {
            fill: #a3a3a3;
        }

        [link-id] path {
            stroke: #750000;
        }

        [link-id='[3][4]'] path {
            stroke: #016e25;
        }

        [control-expcoll-id] circle {
            fill: #750000;
        }

        [control-expcoll-id='3'] circle {
            fill: #016e25;
        }

        [control-node-menu-id] circle {
            fill: #bfbfbf;
        }

        #tree>svg {
            background-color: white;
        }

        .bg-search-table {
            background-color: #2E2E2E !important;
        }

        .bg-search-table input {
            background-color: #2E2E2E !important;
        }

</style>
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'firstpage')" id="defaultOpen">กลุ่มต้นไม้</button>
                <button class="tablinks" onclick="openCity(event, 'secondpage')">ความสัมพันธ์</button>
                <button class="tablinks" onclick="openCity(event, 'tridthpage')">ผู้มีสิทธิ์</button>
                <button class="tablinks" onclick="openCity(event, 'fourthpage')">ต้นไม้</button>
            </div>

            <div id="firstpage" class="tabcontent">
            <center><h2>สมาชิก</h2></center>
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
                    <div id="secondpage" class="tabcontent">
                        <h3>ความสัมพันธ์</h3>
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
                <center><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" id="A">เพิ่มความสัมพันธ์</button></center>
                </div>
                <div id="tridthpage" class="tabcontent">
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
            <div id="fourthpage" class="tabcontent">
                <div id="tree" width="300" height="300"></div>
                    <a href="{{ url('Savelocation') }}"><button type="submit">บันทึกตำแหน่งในแผนที่</button></a>
    <script>
    OrgChart.templates.ana.defs = '<g transform="matrix(0.05,0,0,0.05,-10,-7)" id="heart"><path fill="#F57C00" d="M438.482,58.61c-24.7-26.549-59.311-41.655-95.573-41.711c-36.291,0.042-70.938,15.14-95.676,41.694l-8.431,8.909  l-8.431-8.909C181.284,5.762,98.663,2.728,45.832,51.815c-2.341,2.176-4.602,4.436-6.778,6.778 c-52.072,56.166-52.072,142.968,0,199.134l187.358,197.581c6.482,6.843,17.284,7.136,24.127,0.654 c0.224-0.212,0.442-0.43,0.654-0.654l187.29-197.581C490.551,201.567,490.551,114.77,438.482,58.61z"/><g>';

    var chart = new OrgChart(document.getElementById("tree"), {
    showXScroll: OrgChart.scroll.visible, 
    showYScroll: OrgChart.scroll.visible, 
    mouseScrool: OrgChart.action.zoom,

    collapse: {
        level: 5
    },
    nodeMenu:{
        details: {text:"Details"},
        edit: {text:"Edit"},
        add: {text:"Add"},
        remove: {text:"Remove"}
    },
    nodeBinding: {
        field_0: "id",
        img_0: "img"
    }
    });

    chart.on('render-link', function(sender, args){
    if (args.cnode.ppid != undefined){
        args.html += '<use xlink:href="#heart" x="'+ args.p.xa +'" y="'+ args.p.ya +'"/>';
    }
});

chart.load([
{id: "A",img: "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR0ZLKXotk1GGJNsz5lC1lpE9JUfi2xG3yCVw&usqp=CAU"},
<?php 
// for ($c=0; $c <$count ; $c++) { 
//   # code...
//   if($relation[$c]->clan==$_SESSION['clantree']){
//     if($relation[$c]->relation=="partner"){
//       echo '{id: "'.$relation[$c]->my.'", pid: "'.$relation[$c]->parent.'",tags: ["partner"],img: "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRpYp4FkBU5bORI7rDsuK64nOI3LqFYjUUBLA&usqp=CAU"},';
//     }else{
//       echo '{id: "'.$relation[$c]->my.'", pid: "'.$relation[$c]->parent.'",ppid: "B",img: "data:image/jpeg;base64,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"},';
//     }

//   }
// }
?>

{id: "B", pid: "A", tags: ['partner'],img: "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRpYp4FkBU5bORI7rDsuK64nOI3LqFYjUUBLA&usqp=CAU"},					
{id: "C", pid: "A", tags: ['partner'],img: "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRpYp4FkBU5bORI7rDsuK64nOI3LqFYjUUBLA&usqp=CAU"},
{id: "V", pid: "A", ppid: "B",img: "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR0ZLKXotk1GGJNsz5lC1lpE9JUfi2xG3yCVw&usqp=CAU"},
{id: "VV", pid: "V",tags: ['partner'],img: "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRpYp4FkBU5bORI7rDsuK64nOI3LqFYjUUBLA&usqp=CAU"},
{id: "CC", pid: "A", ppid: "C",img: "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR0ZLKXotk1GGJNsz5lC1lpE9JUfi2xG3yCVw&usqp=CAU"},
{id: "Astra", pid: "A", ppid: "B",img: "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR0ZLKXotk1GGJNsz5lC1lpE9JUfi2xG3yCVw&usqp=CAU"},
{id: "Bstra", pid: "Astra", tags: ['partner'],img: "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRpYp4FkBU5bORI7rDsuK64nOI3LqFYjUUBLA&usqp=CAU"},
{id: "AAtes", pid: "Astra", ppid: "Bstra",img: "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR0ZLKXotk1GGJNsz5lC1lpE9JUfi2xG3yCVw&usqp=CAU"},
{id: "BBtes", pid: "AAtes", tags: ['partner'],img: "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRpYp4FkBU5bORI7rDsuK64nOI3LqFYjUUBLA&usqp=CAU"},
// {id: "fatherBstra",img: "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR0ZLKXotk1GGJNsz5lC1lpE9JUfi2xG3yCVw&usqp=CAU"},
// {id: "motherBstra", pid: "fatherBstra", tags: ['partner'],img: "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRpYp4FkBU5bORI7rDsuK64nOI3LqFYjUUBLA&usqp=CAU"},
// {id: "Bstra", pid: "fatherBstra", ppid: "motherBstra",img: "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRpYp4FkBU5bORI7rDsuK64nOI3LqFYjUUBLA&usqp=CAU"}
]);
</script>
</div>

<script>
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

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
<!-- <center><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" id="A">Create your family</button></center> -->
                <!-- แสดงตารางเพิ่มข้อมูล -->
                <div id="id01" class="modal">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
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

<script>
            // Get the modal
            var modal = document.getElementById('id01');

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
</script>

<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;margin-left:1100px;height:auto" id="A">แชร์ผู้อื่น</button>
@endsection