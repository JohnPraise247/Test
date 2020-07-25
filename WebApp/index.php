<?php
if(isset($_POST['input-usr1']) && isset($_POST['input-pwd1']) || isset($_POST['input-usr2']) && isset($_POST['input-pwd2']) && isset($_POST['input-pwd2']) )
      { 
        $cookie_user = $_POST['input-usr1'];
        echo '<script>var user = getCookie("username");
        var userl =user.length;
        var newUser=false;
      
        if (userl==" ") {
         newUser=true;  
        } else if(userl >= 3){
          newUser=false; 
        }</script>';
    
        if(isset($_COOKIE["username"])){
             echo '<script>alert("Cookie Present")</script>
             ';
        }else{
           echo '<script>alert("Cookie Absent")</script>
             ';  
        }
    
        echo '<script>if (newUser == true){alert("user exists");}else{document.cookie = "username = '.$cookie_user.'
        ; expires=Thu, 01 Jan 2030\ 00:00:00 UTC";
        alert(ramMemory);}</script>';
    
//        setCookie("username", $cookie_user, time()+1*24*60*60);
       
      }
?>

<!--25 july-->

<!DOCTYPE HTML>
<html>
<head>
<title>OneView WebApp :. Welcome</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
<meta name="keywords" content="Null" />
<link href="css/bootstrap.min.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css" />
<link href="css/style.css" rel="stylesheet"/>
<script src="js/jquery.min.js"></script>
    
<!--    Cookie-->
   <script>
      function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires="+d.toUTCString();
        document.cookie = cname + "=" + cvalue + "; " + expires;
    }

    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i=0; i<ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1);
            if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
        }
        return "";
    }

    function checkUser() {
     var user = getCookie("username");
     var userl =user.length;
     var newUser=false;
      
        if (userl==" ") {
         newUser=true;  
        } else if(userl >= 3){
          newUser=false; 
        }
       }

    </script>
</head>
    
<body onload="checkUser();">
  <div class="container">
     <div id="card" class="card bg-1 mx-5">
      <div class="card-header bg-danger">
          <h1 class="text-white text-center" style="font-size: 25px;">Welcome</h1></div>
      <div class="card-body">
        <form id="form1" method="post">
         <div class="image"> 
          <a href="#"><img src="images/cam.png" alt="" width=96 height=96/></a> 
<!--		  <input type="file" value="" />-->
<!--            <img src="images/menu.png" alt=""/>-->
        </div> 
          
         <div class="mt-3">
          <div class="d-flex">
           <span class="icon bg-danger">
               <span class="fa fa-envelope-o"></span>
           </span>
           <input name="input-usr1" id="usr1" type="text" class="form-control input" placeholder="Username" minlength="3" required/>
              </div>
          <div class="d-flex mt-2">
           <span class="icon bg-danger">
             <span class="fa fa-lock"></span>   
           </span>
          <input name="input-pwd1" id="pwd1" type="Password" class="form-control input" placeholder="Password" minlength="6" required/>
        </div>
      </div>
        
        <div class="mt-5 px-4">
         <button class="btn btn-danger w-100">Sign In</button>  
        </div>
      </form>
          
    <form id="form2" method="post" style="display: none;">
         <div class="image"> 
          <a href="#"><img src="images/cam.png" alt="" width=96 height=96/></a> 
<!--		  <input type="file" value="" />-->
<!--            <img src="images/menu.png" alt=""/>-->
        </div> 
          
         <div class="mt-3">
          <div class="d-flex">
           <span class="icon bg-danger">
               <span class="fa fa-envelope-o"></span>
           </span>
           <input name="input-usr2" id="usr2" type="text" class="form-control input" placeholder="Enter Username" required/>
              </div>
          <div class="d-flex mt-2">
           <span class="icon bg-danger">
             <span class="fa fa-lock"></span>   
           </span>
          <input name="input-pwd2" id="pwd2" type="Password" class="form-control input" placeholder="Enter Password" minlength="6" required/>
        </div>
        <div class="d-flex mt-2">
           <span class="icon bg-danger">
             <span class="fa fa-lock"></span>   
           </span>
          <input name="input-pwd3" id="pwd3" type="Password" class="form-control input" placeholder="Confirm Password" minlength="6" required/>
        </div>
      </div>
        
        <div class="mt-5 px-4">
         <button class="btn btn-danger w-100" onclick="ca();">Create Account</button>  
        </div>
      </form>      
     </div>
         <div class="card-footer text-center">
          <a id="cnat" href="javscript:(void)" class="text-white-50" onclick="cna();">Create New Account <span class="fa fa-chevron-right" style="font-size: 10px;"></span></a>
         </div>
     </div>
  </div>
    
 <script src="js/script.js"></script>  
</body>
</html>


