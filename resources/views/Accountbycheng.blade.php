@extends('layouts.app')
@section('content')
        
<style>
    * {box-sizing: border-box}
    body {font-family: "Lato", sans-serif;}

    /* Style the tab */
    .tab {
        float: left;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
        width: 25%;
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
        /* border: 1px solid #ccc; */
        width: 70%;
        border-left: none;
        height: auto;
    }
</style>
            <div class="tab" style="margin-top: 60px;">
                <button class="tablinks" onclick="openCity(event, 'grouptree')" id="defaultOpen">กลุ่มต้นไม้</button>
                <!-- <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button> -->
                <button class="tablinks" onclick="openCity(event, 'clan')">แผนภูมิ</button>
            </div>

            <div id="grouptree" class="tabcontent" style="margin-top: 60px;">
                <form action="{{ url('sendmessage') }}" method="get">
                    ชื่อผู้รับ: <input type="email" name="email" id="email" require><br>
                    เรื่อง<input type="text" name="message" id="message">
                        <button type="submit">ส่ง</button>
                </form>
                <?php //print_r($_SESSION);
                    session_start();
                        use App\messagermodel;
                        use App\treecollection;
                    $message=messagermodel::All();
                    $num=messagermodel::count();
                    //echo $message[3]->contant.'<br>';
                ?>
            </div>

            <div id="Paris" class="tabcontent">
                <h3>Paris</h3>
                <form action="" method="get">
                    <button type="submit"></button>
                </form>
            </div>

<div id="clan" class="tabcontent">
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
            <div class="row" style="margin-top: 60px;">
                <table class="table table-bordered">
                    <tr>
                        <th>No.</th>
                        <th>Tree name</th>
                        <th width="280px">Action</th>
                    </tr>
            <?php
            //use App\treecollection; 
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
            <center><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" id="A">Create your family</button></center>
            <div id="id01" class="modal">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <form class="modal-content" action="{{ url('createtree')}}">
                    <div class="container">
                        <h1>Create your family</h1>
                      
                        <hr>
                        <label for="Clan"><b>Name Clan</b></label>
                        <input type="text" placeholder="Enter Clan" name="Clan" required class="popup" id="Clan">

                        <!-- <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required class="popup" id="psw">

                        <label for="psw-repeat"><b>Repeat Password</b></label>
                        <input type="password" placeholder="Repeat Password" name="psw-repeat" required class="popup"> -->
                        <div class="clearfix">
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                            <button type="submit" class="signupbtn" id="B">Sign Up</button>
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
</script>
</div>
        <button class="open-button" onclick="openForm()">messager</button>
            <div class="chat-popup" id="myForm">
            <form action="Messanger" class="form-container">
            <h2>Hi<?php echo $_SESSION["NAME"];?></h12>
            <table class="table table-bordered">
            <?php 
            
            for ($i=0; $i < $num; $i++) { 
                # code...
                if($message[$i]->receiver==$_SESSION['EMAIL']){?>
                    <tr>
                    <td><?php echo $message[$i]->sender;?></td>
                    <td>
                        <form action="Messenger" method="GET">
                            <input type="hidden" name="id_sender" value="<?php echo $message[$i]->ID_sender.$i;?>">
                            <button type="submit" class="btn btn-info" style="font-size: 10px;width: 100px;hight:40px;">แสดง</button> 
                        </form>
                    </td>
                    </tr>
                <?php }
            }
            ?>
            <tr>
                <td>Hello!! </td>
                <td>
                    <form action="" method="POST">
                        <a class="btn btn-info" style="font-size: 10px;width: 100px;hight:40px;">แสดง</a> 
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
@endsection
