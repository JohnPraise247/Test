<!--25 july-->

<!DOCTYPE HTML>
<html>
<head>
<title>OneView WebApp :. WorkSpace</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
<!-- <meta name="keywords" content="Null" /> -->
<link href="css/bootstrap.min.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css" />
<link href="css/style.css" rel="stylesheet"/>
<style>
  input {
    display: none;
}
label {
    background:  #3a4f69;
    color: #fff;
    cursor: pointer;
    border-radius: 30px;
    line-height: 2em;
    text-align: center;
    transition: .25s;
}
input:checked + label {
    background-color: #2b578e;
    color: #fff;
}
label:hover {
    background-color: #4e637d;
}
.border-muted{
  border-color: #3a4f69 !important;
}
</style>
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
        <div id="pt1">
        <p class="lead text-white-50" style="font-size: 16px;"><b>Report Configurations</b></p>
         <!-- <form method="post"> -->
          <div class="d-flex mt-2">
          <input id="reportName" name="input-rn" type="text" class="form-control input" placeholder="Report Name*" required/>
        </div>
        <small id="ern" class="text-white-50" style="display: none;"><i>Please enter a Report Name</i></small>
        <p class="lead text-white-50 mt-3" style="font-size: 16px;"><b>Tables Needed*</b></p>
          <input type="checkbox" id="t1" name="table" checked>
          <label id="l1" for="t1" class="px-3">Offerings</label>
          <input type="checkbox" id="t2" name="table" checked>
          <label id="l2" for="t2" class="px-3">Tithe</label>
          <input type="checkbox" id="t3" name="table">
          <label id="l3" for="t3" class="px-3">Project Offering</label>
          <input type="checkbox" id="t4" name="table">
          <label id="l4" for="t4" class="px-3">Shiloh sacrifice</label>
          <input type="checkbox" id="t41" name="table">
          <label id="l4" for="t41" class="px-3">Vow</label>
          <input type="checkbox" id="t42" name="table">
          <label id="l4" for="t42" class="px-3">Welfare</label>
           <input type="checkbox" id="t43" name="table">
          <label id="l4" for="t43" class="px-3">Thankgiving</label>
          <input type="checkbox" id="t5" name="table">
          <label id="textCustom" for="t5" class="px-3">Custom . . .</label>

          <div id="sl" class="d-flex mt-2"  style="display: none !important;">
          <input id="customName" name="input-cn" type="text" class="form-control input w-50" placeholder="Enter Custom Table Name . . ." required/>
          <button id="setCt" class="btn btn-secondary px-4 ml-2">Set</button>
          </div>
          <small id="ern3" class="text-white-50" style="display: none;"><i>Please enter a Custom Table Name</i></small>
           <!-- </form> -->

           <small id="ern2" class="text-white-50" style="display: none;"><i>Please Select one or More Tables</i></small>
          <div class="mt-5">
          <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
          <button id="btnNext" class="btn btn-danger py-1 px-4 w-100">Next <span  style="font-size: 13px;" class="fa fa-chevron-right"></span></button></div>
          </div>
        </div>
      </div>

       <div id="pt2" style="display: none;">
        <p class="lead text-white-50" style="font-size: 16px;"><b>Fill Report</b></p>
         <!-- <form method="post"> -->
          <div class="d-flex mt-2">
            <span class="text-white-50 lead" style="font-size: 14px;">Report Name :&nbsp;</span><span id="rnText" class="badge badge-pill badge-info px-3 mxs-2"></span>&nbsp;&nbsp;
            <span class="text-white-50 lead" style="font-size: 14px;">Tables Selected :</span>
          <!-- <input id="reportName" name="input-rn" type="text" class="form-control input" placeholder="Report Name" required/> -->
        </div>
        <!-- <small id="ern" class="text-white-50" style="display: none;"><i>Please enter a Report Name</i></small> -->
        <p class="lead text-white-50 mt-3" style="font-size: 16px;"><b>Tables</b></p>
    
          <table class="border-muted rounded table table-hover table-bordered text-white-50 table-responsive">
            <thread class="border-muted">
              <tr>
                <th class="border-muted">Id</th>
                <th class="border-muted">Currency</th>
                <th class="border-muted">Offerings</th>
                <th class="border-muted">Tithe</th>
              </tr>
            </thread>

            <tbody class="border-muted">
              <tr>
                <td class="border-muted">1</td>
                <td class="border-muted">₦1000</td>
                <td class="border-muted"></td>
                <td class="border-muted"></td>
              </tr>
               <tr>
                <td class="border-muted">2</td>
                <td class="border-muted">₦500</td>
                <td class="border-muted"></td>
                <td class="border-muted"></td>
              </tr>
               <tr>
                <td class="border-muted">3</td>
                <td class="border-muted">₦200</td>
                <td class="border-muted"></td>
                <td class="border-muted"></td>
              </tr>
               <tr>
                <td class="border-muted">4</td>
                <td class="border-muted">₦100</td>
                <td class="border-muted"></td>
                <td class="border-muted"></td>
              </tr>
               <tr>
                <td class="border-muted">5</td>
                <td class="border-muted">₦50</td>
                <td class="border-muted"></td>
                <td class="border-muted"></td>
              </tr>
               <tr>
                <td class="border-muted">6</td>
                <td class="border-muted">₦20</td>
                <td class="border-muted"></td>
                <td class="border-muted"></td>
              </tr>
              <tr>
                <td class="border-muted">7</td>
                <td class="border-muted">₦10</td>
                <td class="border-muted"></td>
                <td class="border-muted"></td>
              </tr>
               <tr>
                <td class="border-muted">8</td>
                <td class="border-muted">₦5</td>
                <td class="border-muted"></td>
                <td class="border-muted"></td>
              </tr>
             
            </tbody>
            




          </table>

           <!-- </form> -->


          <div class="mt-5">
          <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
          <button id="btnNext2" class="btn btn-success py-1 w-100">Save <span  style="font-size: 13px;" class="fa fa-chevron-right"></span></button></div>
          </div>
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