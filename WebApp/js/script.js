var document;
var f1 = document.getElementById("form1");
var f2 = document.getElementById("form2");
var Card = document.getElementById("card");
var cnaText = document.getElementById("cnat");
var Usr1= document.getElementById("usr1");
var Pwd1= document.getElementById("pwd1");
var Pwd2= document.getElementById("pwd2");
var Pwd3= document.getElementById("pwd3");
var Opacity = 0;

f1.style.display = "block";
Card.style.opacity = "0";
f2.style.display = "none";

init();

function init(){
  if(Opacity < 1){
    Opacity+=0.05;
    Card.style.opacity = Opacity;
    window.setTimeout(init,1000/30);
  }
}

function cna(){
 if(f1.style.display == "block"){
   f1.style.display = "none";   
   f2.style.display = "block"; 
   cnaText.innerHTML = "<span class='fa fa-chevron-left' style='font-size: 10px;'></span> Back"; 
 }else{
   f1.style.display = "block"; 
   f2.style.display = "none";   
   cnaText.innerHTML = "Create New Account <span class='fa fa-chevron-right' style='font-size: 10px;'></span> ";  
 }
}

function ca(){
  if(Pwd2 == Pwd3){
      alert("YEs");
  }  
}