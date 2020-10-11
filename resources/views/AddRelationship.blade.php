@extends('layouts.app')

@section('content')
<style>
    * {box-sizing: border-box}

    /* Set height of body and the document to 100% */
    body, html {
        height: 100%;
        margin-top: 3%;
        font-family: Arial;
    }

    /* Style tab links */
    .tablink {
        background-color: #555;
        color: white;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        font-size: 17px;
        width: 25%;
    }

    .tablink:hover {
        background-color: #777;
    }

    /* Style the tab content (and add height:100% for full page content) */
    .tabcontent {
        color: black;
        display: none;
        padding: 100px 20px;
        height: 100%;
    }

    #Treegroup {background-color: grey;}
    #Relationship2 {background-color: grey;}
    #Person {background-color: grey;}
    #Tree1 {background-color: grey;}

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



                <button class="tablink" onclick="openPage('Treegroup', this, 'red')" id="defaultOpen">กลุ่มต้นไม้</button>
                <button class="tablink" onclick="openPage('Relationship2', this, 'green')" >ความสัมพันธ์</button>
                <button class="tablink" onclick="openPage('Person', this, 'blue')">ผู้มีสิทธิ์</button>
                <button class="tablink" onclick="openPage('Tree1', this, 'orange')">แผนภูมิต้นไม้</button>

                <div id="Treegroup" class="tabcontent">

                </div>

                <div id="Relationship2" class="tabcontent">
                    <h3>News</h3>
                    <p>Some news this fine day!</p> 
                </div>

                <div id="Person" class="tabcontent">
                    
                </div>

                <div id="Tree1" class="tabcontent">
                    <h3>About</h3>
                    <p>Who we are and what we do.</p>
                </div>

                

<script>
        function openPage(pageName,elmnt,color) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";
            }
            document.getElementById(pageName).style.display = "block";
            elmnt.style.backgroundColor = color;
            }

            // Get the element with id="defaultOpen" and click on it
            document.getElementById("defaultOpen").click();
</script>

@endsection
