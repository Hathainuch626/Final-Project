@extends('layouts.app')

@section('content')
<?php 
                                session_start();
                                use App\messagermodel;
                                $messagernotread=messagermodel::where('receiver',$_SESSION["EMAIL"])->where('Status_read',false)->get();
                                $countmessager_notread=count($messagernotread);
                                $messagerread=messagermodel::where('receiver',$_SESSION["EMAIL"])->where('Status_read',true)->get();
                                $countmessager_read=count($messagerread);
                                $message=messagermodel::where('receiver',$_SESSION["EMAIL"])->get();
                                $num=messagermodel::count();
                            ?>
<style>
    html,body,h1,h2,h3,h4,h5 {font-family: "RobotoDraft", "Roboto", sans-serif;}
        .w3-bar-block .w3-bar-item{padding:16px}
</style>

<!-- Side Navigation -->
                    <nav class="w3-sidebar w3-bar-block w3-collapse w3-white w3-animate-left w3-card" style="z-index:3;width:320px; margin-top:40px;" id="mySidebar">
                        
                        <a href="javascript:void(0)" onclick="w3_close()" title="Close Sidemenu" 
                        class="w3-bar-item w3-button w3-hide-large w3-large">Close <i class="fa fa-remove"></i></a>
                        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-dark-grey w3-button w3-hover-black w3-left-align" onclick="document.getElementById('id01').style.display='block'">New Message <i class="w3-padding fa fa-pencil"></i></a>
                        <a id="myBtn" onclick="myFunc('Demo1')" href="javascript:void(0)" class="w3-bar-item w3-button"><i class="fa fa-inbox w3-margin-right"></i>Inbox (<?php echo $countmessager_notread;?>)<i class="w3-margin-left fa fa-caret-down"></i></a>
                            <div id="Demo1" class="w3-hide w3-animate-left">
                               <?php  foreach ($messagernotread as $openread){
                                    //echo "<script>console.log('".$openread->ID_sender.$openread->sender."')</script>";
                                ?>
                                <a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom test w3-hover-light-grey" onclick="openMail('<?php echo $openread->ID_sender;?>');w3_close();">
                                    <div class="w3-container">
                                        <img class="w3-round w3-margin-right" src="/w3images/avatar3.png" style="width:15%;"><span class="w3-opacity w3-large"><?php echo $openread->sender;?></span>
                                        <h6>Subject: Remember Me</h6>
                                        <p><?php echo $openread->contant;?></p>
                                    </div>
                                </a>
                            <?php }?>
                            </div>
                            <a id="myBtn" onclick="myFunc('Demo2')" href="javascript:void(0)" class="w3-bar-item w3-button"><i class="fa fa-inbox w3-margin-right"></i>Unbox (<?php echo $countmessager_read;?>)<i class="w3-margin-left fa fa-caret-down"></i></a>
                            <div id="Demo2" class="w3-hide w3-animate-left">
                            <?php 
                            if($countmessager_read==0){
                                echo "ไม่มีข้อความเข้า";
                            } 
                            
                            foreach ($message as $openread){
                                    //echo "<script>console.log('".$openread->_id."id')</script>";
                                ?>
                                <a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom test w3-hover-light-grey" onclick="openMail('<?php echo $openread->_id;?>');w3_close();">
                                    <div class="w3-container">
                                        <img class="w3-round w3-margin-right" src="https://img2.thaipng.com/20180717/eac/kisspng-computer-icons-man-clip-art-icon-orang-5b4d814b19c7d1.4051447715318060271056.jpg" style="width:15%;"><span class="w3-opacity w3-large"><?php echo $openread->sender;?></span>
                                        <h6>Subject: Remember Me</h6>
                                        <p><?php echo $openread->contant;?></p>
                                    </div>
                                </a>
                            <?php }?>
                            <!-- <a href="#" class="w3-bar-item w3-button"><i class="fa fa-hourglass-end w3-margin-right"></i>Drafts</a>
                            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-trash w3-marghin-right"></i>Trash</a> -->
                    </nav>
  
                        <!-- Modal that pops up when you click on "New Message" -->
                        <div id="id01" class="w3-modal" style="z-index:4" >
                            <div class="w3-modal-content w3-animate-zoom" >
                                <div class="w3-container w3-padding w3-red" >
                                    <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-right w3-xxlarge" ><i class="fa fa-remove"></i></span>
                                    <h2>Send Mail</h2>
                                </div>
                                <div class="w3-panel">
                                    <label>To</label>
                                    <input class="w3-input w3-border w3-margin-bottom" type="text">
                                        <label>From</label>
                                        <input class="w3-input w3-border w3-margin-bottom" type="text">
                                            <label>Subject</label>
                                            <input class="w3-input w3-border w3-margin-bottom" type="text">
                                            <input class="w3-input w3-border w3-margin-bottom" style="height:150px" placeholder="What's on your mind?">
                                            <div class="w3-section">
                                                <a class="w3-button w3-red" onclick="document.getElementById('id01').style.display='none'">Cancel  <i class="fa fa-remove"></i></a>
                                                <a class="w3-button w3-right" onclick="document.getElementById('id01').style.display='none'">Send  <i class="fa fa-paper-plane"></i></a> 
                                    </div>    
                                </div>
                            </div>
                        </div>
  
                    <!-- Overlay effect when opening the side navigation on small screens -->
                    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="Close Sidemenu" id="myOverlay"></div>
                    
                    <!-- Page content -->
                        <div class="w3-main" style="margin-left:320px;" >
                            <i class="fa fa-bars w3-button w3-white w3-hide-large w3-xlarge w3-margin-top" onclick="w3_open()"></i>
                            <a href="javascript:void(0)" class="w3-hide-large w3-red w3-button w3-right w3-margin-top w3-margin-right" onclick="document.getElementById('id01').style.display='block'"><i class="fa fa-pencil"></i></a>
                    
                            <?php 
                                foreach ($message as $contentinfo){
                                    //echo "<script>console.log('".$contentinfo->_id.$contentinfo->sender."')</script>";
                                
                            ?>
                                <div id="<?php echo $contentinfo->_id;?>" class="w3-container person" style="margin-top:50px;">
                                    <br>
                                    <img class="w3-round  w3-animate-top" src="https://img2.thaipng.com/20180717/eac/kisspng-computer-icons-man-clip-art-icon-orang-5b4d814b19c7d1.4051447715318060271056.jpg" style="width:20%;">
                                    <h5 class="w3-opacity">Subject: Remember Me</h5><hr>
                                    <h4><i class="fa fa-clock-o"></i> From Borge Refsnes,<?php echo $contentinfo->created_at;?></h4><hr>
                                    <p><?php echo $contentinfo->contant;?></p>
                                    <hr>
                                    <form action="{{url('acceptorcancel')}}">
                        <input type="hidden" name="clantree" value="<?php echo $contentinfo->clan;?>">
                            <input type="hidden" name="idfix" value="<?php echo $contentinfo->_id;?>">
                            <input type="hidden" name="accept" value="accept">
                            <button type="submit" id="accept" class="btn btn-success">ยอมรับ</button>
                        </form>
                        
                        <form action="url('acceptorcancel')">
                        <input type="hidden" name="idfix" value="<?php echo $contentinfo->_id;?>">
                            <input type="hidden" name="accept" value="cancel">
                            <button type="submit" id="reject" class="btn btn-danger" style="margin-top:-63px;margin-left:100px">ปฏิเสธ</button>
                        </form>
                                    <a class="w3-button" href="acceptorcancel?idfix=<?php echo $contentinfo->_id;?>&accept=cancel">Reply<i class="w3-padding fa fa-mail-reply"></i></a>
                                    <a class="w3-button" href="#">Forward<i class="w3-padding fa fa-arrow-right"></i></a>
                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <p>Best Regards, <br>Borge Refsnes</p> -->
                                </div>
                            <?php }?>
                                
                    </div>
  
  <script>
        var openInbox = document.getElementById("myBtn");
        openInbox.click();
        
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("myOverlay").style.display = "block";
        }
        
        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("myOverlay").style.display = "none";
        }
        
        function myFunc(id) {
            var x = document.getElementById(id);
                if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show"; 
                x.previousElementSibling.className += " w3-red";
            } else { 
                x.className = x.className.replace(" w3-show", "");
                x.previousElementSibling.className = 
                x.previousElementSibling.className.replace(" w3-red", "");
            }
        }
  
        openMail("Borge")
        function openMail(personName) {
            var i;
            var x = document.getElementsByClassName("person");
                for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
                x = document.getElementsByClassName("test");
                for (i = 0; i < x.length; i++) {
                    x[i].className = x[i].className.replace(" w3-light-grey", "");
                }
                document.getElementById(personName).style.display = "block";
                event.currentTarget.className += " w3-light-grey";
        }
  </script>
  
  <script>
    var openTab = document.getElementById("firstTab");
        openTab.click();
  </script>

@endsection