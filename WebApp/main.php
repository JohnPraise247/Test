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
     var user = getCookie("Value");

        if (user != 1) {
         window.location.replace("index.php"); 
        }
       }

    </script>
</head>
    
<body onload="checkUser();" style="background:url('bg/bg-1.jpg'); background-size: 100% 100vh;background-attachment: fixed;">
  <div class="container-fluid mb-3">
     <div id="card" class="card bg-1 mx-5">
      <div class="card-header ">
          <h1 class="text-white-50" style="font-size: 25px;">OneView <!--<small class="secondary text-white-50">- Dashboard</small>--></h1></div>
      <div class="card-body">
         <div class="row mb-4">
             <div class="col-sm-4 mt-3">
                 <button id="btn1" class="btn btn-success w-100 h-100 py-4"><span class="fa fa-plus"></span><br>Create Report</button></div>
             <div class="col-sm-4 mt-3">
                 <button id="btn2" class="btn btn-warning w-100 h-100 py-4"><span class="fa fa-bookmark"></span><br>Saved Reports</button></div>
             <div class="col-sm-4 mt-3">
                 <button id="btn3" class="btn btn-info  w-100 h-100 py-4"><span class="fa fa-print"></span><br>Print Reports</button></div>
          </div>
          
        <div class="row">
             <div class="col-sm-4 mb-4">
                 <button id="btn4" class="btn btn-secondary w-100 h-100 py-4"><span class="fa fa-share"></span><br>Export Reports</button></div>
             <div class="col-sm-4 mb-4">
                 <button id="btn5" class="btn btn-danger w-100 h-100 py-4"><span class="fa fa-info"></span><br>Help</button></div>
             <div class="col-sm-4">
                 </div>
          </div> 
       
          
   
     </div>
         <div class="card-footer text-muted">
             <small id="status">. . .</small>
         </div>
     </div>
  </div>
    
 <script src="js/custom.js"></script>  
<script>
</script>
</body>
</html>