@extends('layouts.app')

@section('content')

<style>
    * {box-sizing: border-box}
    body {font-family: "Lato", sans-serif;}

    /* Style the tab */
    .tab {
        overflow: hidden;
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
        height: 300px;
    }

    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    .topnav a.active {
        background-color: #2196F3;
        color: white;
    }

    .topnav .search-container {
        float: right;
    }

    .topnav input[type=text] {
        padding: 6px;
        margin-top: 8px;
        font-size: 17px;
        border: none;
    }

    .topnav .search-container button {
        float: right;
        padding: 6px 10px;
        margin-top: 8px;
        margin-right: 16px;
        background: #ddd;
        font-size: 17px;
        border: none;
        cursor: pointer;
    }

    .topnav .search-container button:hover {
        background: #ccc;
    }

    @media screen and (max-width: 600px) {
        .topnav .search-container {
            float: none;
        }
        .topnav a, .topnav input[type=text], .topnav .search-container button {
            float: none;
            display: block;
            text-align: left;
            width: 100%;
            margin: 0;
            padding: 14px;
        }
        .topnav input[type=text] {
            border: 1px solid #ccc;  
        }

    }

</style>

        <div class="topnav" style="margin: 100px 15px 10px">
            <a href="#new" onclick="w3_close()" class="active">ข้อความใหม่</a>
            <a href="#other" onclick="w3_close()" class="w3-bar-item w3-button">ข้อความอื่นๆ</a>
            
            <div class="search-container ">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>  

            <div class="w3-container w3-dark-grey " style="padding:128px 16px" id="new">
              <h2>ข้อความใหม่</h2>
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">New1</button>
                    <button class="tablinks" onclick="openCity(event, 'Paris')">New2</button>
                    <button class="tablinks" onclick="openCity(event, 'Tokyo')">New3</button>
                </div>

                <div id="London" class="tabcontent">
                    <h3>New1</h3>
                    <button type="button" id="accept" class="btn btn-success">ยอมรับ</button>
                    <button type="button" id="reject" class="btn btn-danger">ปฏิเสธ</button>
                </div>

                <div id="Paris" class="tabcontent">
                    <h3>New2</h3>
                    <button type="button" id="accept" class="btn btn-success">ยอมรับ</button>
                    <button type="button" id="reject" class="btn btn-danger">ปฏิเสธ</button>
                </div>

                <div id="Tokyo" class="tabcontent">
                    <h3>New3</h3>
                    <button type="button" id="accept" class="btn btn-success">ยอมรับ</button>
                    <button type="button" id="reject" class="btn btn-danger">ปฏิเสธ</button>
                </div>
            </div>

        <div class="w3-container w3-dark-grey " style="padding:40px 16px" id="other">
            <h2>ข้อความอื่นๆ</h2>
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'new')" id="defaultOpen">New1</button>
                <button class="tablinks" onclick="openCity(event, 'newnew')">New2</button>
                <button class="tablinks" onclick="openCity(event, 'newnewnew')">New3</button>
            </div>

            <div id="new" class="tabcontent">
                <h3>New1</h3>
                <button type="button" id="accept" class="btn btn-success">ยอมรับ</button>
                <button type="button" id="reject" class="btn btn-danger">ปฏิเสธ</button>
            </div>

            <div id="newnew" class="tabcontent">
                <h3>New2</h3>
                <button type="button" id="accept" class="btn btn-success">ยอมรับ</button>
                <button type="button" id="reject" class="btn btn-danger">ปฏิเสธ</button>
            </div>

            <div id="newnewnew" class="tabcontent">
                <h3>New3</h3>
                <button type="button" id="accept" class="btn btn-success">ยอมรับ</button>
                <button type="button" id="reject" class="btn btn-danger">ปฏิเสธ</button>
            </div>
        </div>
         
        </div> 
      
               
<script>
function openCity(evt, cityName) {
  var i, tabbcontent, tablinks;
  tabbcontent = document.getElementsByClassName("tabbcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabbcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

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

    function openForm() {
        document.getElementById("myForm").style.display = "block";
}

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
}
</script>

<button class="open-button" onclick="openForm()"> <i class="fas fa-comment-dots"></i>ส่งข้อความ</button>

    <div class="chat-popup" id="myForm">
        <form action="/action_page.php" class="form-container">
  
            <h2>ส่งข้อความ</h2>

            <label for="nabout">ชื่อเรื่อง:</label>
            <input type="text" id="newabout" name="newabout" placeholder="กรอกเรื่อง">
            <label for="nname">ชื่อผู้รับ:</label>
            <input type="text" id="newname" name="newabout" placeholder="กรอกชื่อผู้รับ">

            <label for="msg"><b>ข้อความ</b></label>
            <textarea placeholder="พิมพ์ข้อความ...." name="msg" required></textarea>

            <button type="submit" class="btn">ส่ง</button>
    
            <button type="button" class="btn cancel" onclick="closeForm()">ปิด</button>
        </form>
    </div>

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
        bottom: 23px;
        right: 28px;
        width: 280px;
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