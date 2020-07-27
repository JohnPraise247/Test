// Made by John Praise 
var rX=-23;
var rY=-45;
// var rZ=1;
var On=document.getElementById('on');
var Off=document.getElementById('off');
var On2=document.getElementById('on2');
var Off2=document.getElementById('off2');
var L=document.getElementById('l');
var R=document.getElementById('r');
var Camera=document.getElementById('camx');
var Car=document.getElementById('car');
var T1=document.getElementById('t1');
var T2=document.getElementById('t2');
var T3=document.getElementById('t3');
var T4=document.getElementById('t4');
var hl1=document.getElementById('headlight-l');
var hr1=document.getElementById('headlight-r');
var hl2=document.getElementById('headlight-l2');
var hr2=document.getElementById('headlight-r2');
var numX;
var numY;
var numZ;
var turn=0;
var zoom=-500;
// var mouseDown = 0;


// var targetRotationX = 0;
// var targetRotationOnMouseDownX = 0;

// var targetRotationY = 0;
// var targetRotationOnMouseDownY = 0;

// var mouseX = 0;
// var mouseXOnMouseDown = 0;

// var mouseY = 0;
// var mouseYOnMouseDown = 0;

// var windowHalfX = window.innerWidth / 2;
// var windowHalfY = window.innerHeight / 2;

setTimeout(init,250);

function init(){
  numX= rX+"deg";
  numY= rY+"deg";
  Camera.style.transform="translateZ("+zoom+"px"+")"+"rotateX("+numX+") rotateY("+numY+")";
  
}

function rxadd(){
	numX = rX + "deg";
  numY = rY + "deg";
  rX+=2;
	Camera.style.transform="translateZ("+zoom+"px"+")"+"rotateX("+numX+") rotateY("+numY+")";
	
}

function rxsub(){
	
  rX-=2;
  numX = rX + "deg";
  numY = rY + "deg";
	Camera.style.transform="translateZ("+zoom+"px"+")"+"rotateX("+numX+") rotateY("+numY+")";
	
}

function ryadd(){
  
  rY+=2;
  numX = rX + "deg";
  numY = rY + "deg";
	Camera.style.transform="translateZ("+zoom+"px"+")"+"rotateX("+numX+") rotateY("+numY+")";
	
}

function rysub(){
  
  rY-=2;
  numX = rX + "deg";
  numY = rY + "deg";
	Camera.style.transform="translateZ("+zoom+"px"+")"+"rotateX("+numX+") rotateY("+numY+")";
	
}

// function rzadd(){
// 	numZ = rZ + "deg";
// 	Camera.style.transform="translateZ("+zoom+"px"+")"+"rotateX("+numX+") rotateY("+numY+") rotateZ("+numZ+")";
// 	rZ++;
// }

// function rzsub(){
// 	numZ = rZ + "deg";
// 	Camera.style.transform="translateZ("+zoom+"px"+")"+"rotateX("+numX+") rotateY("+numY+") rotateZ("+numZ+")";
// 	rZ--;
// }

function hl(){
  if (On.checked==true) {
    hl1.style.background="gold";
    hr1.style.background="gold";
    hl2.style.background="gold";
    hr2.style.background="gold";
  }
  if (Off.checked==true) {
    hl1.style.background="#675A17";
    hr1.style.background="#675A17";
    hl2.style.background="#675A17";
    hr2.style.background="#675A17";
  }
}

function m(){
 if (L.checked==true) {
  reset();
  L.checked=0;
  m();
 }
 if (R.checked==true) {
  reset();
  R.checked=0;
  m();
 }
  if (On2.checked==true && L.checked==false && R.checked==false && turn<1 && turn>-1) {
    T3.style.transform="translateZ("+150+"px)"+"translateX("+350+"px)"+"rotateY("+turn+"deg)";
   T4.style.transform="translateZ("+-150+"px)"+"translateX("+350+"px)"+"rotateY("+turn+"deg)";
   T1.style.animation="spin1 2s linear infinite";
   T2.style.animation="spin2 2s linear infinite";
   T3.style.animation="spin3 2s linear infinite";
   T4.style.animation="spin4 2s linear infinite";
 }else if (Off2.checked==true) {
   T1.style.animation="spin1 0s linear infinite";
   T2.style.animation="spin2 0s linear infinite";
   T3.style.animation="spin3 0s linear infinite";
   T4.style.animation="spin4 0s linear infinite";
 }
}

function t(){
  if (L.checked==true) {
    if(turn<30){
    setTimeout(t,10);
    turn++;
  }else{
    setTimeout(reset,1500);
  }
   T3.style.transform="translateZ("+150+"px)"+"translateX("+350+"px)"+"rotateZ("+0+"deg)"+"rotateY("+turn+"deg)";
   T4.style.transform="translateZ("+-150+"px)"+"translateX("+350+"px)"+"rotateZ("+0+"deg)"+"rotateY("+turn+"deg)";
   T1.style.animation="spin1 0s linear infinite";
   T2.style.animation="spin2 0s linear infinite";
   T3.style.animation="spin3 0s linear infinite";
   T4.style.animation="spin4 0s linear infinite";
  }
  if (R.checked==true) {
    if(turn>-30){
    setTimeout(t,10);
    turn--;
  }else{
    setTimeout(reset,3000);
  }
   T3.style.transform="translateZ("+150+"px)"+"translateX("+350+"px)"+"rotateZ("+0+"deg)"+"rotateY("+turn+"deg)";
   T4.style.transform="translateZ("+-150+"px)"+"translateX("+350+"px)"+"rotateZ("+0+"deg)"+"rotateY("+turn+"deg)";
   T1.style.animation="spin1 0s linear infinite";
   T2.style.animation="spin2 0s linear infinite";
   T3.style.animation="spin3 0s linear infinite";
   T4.style.animation="spin4 0s linear infinite";
  }
    On2.checked=0;
    Off2.checked=1;
}

function reset(){
  if(turn<0){
    setTimeout(reset,1000/30);
    turn++;
    R.checked=0;
  }
  if(turn>0){
    setTimeout(reset,1000/30);
    turn--;
    L.checked=0;
  }
  T3.style.transform="translateZ("+150+"px)"+"translateX("+350+"px)"+"rotateZ("+0+"deg)"+"rotateY("+turn+"deg)";
  T4.style.transform="translateZ("+-150+"px)"+"translateX("+350+"px)"+"rotateZ("+0+"deg)"+"rotateY("+turn+"deg)";
}

//Key Functions from Stackoverflow
document.onkeydown = function(e) {
  switch (e.keyCode) {
    case 37:
    numY = rY + "deg";
    Camera.style.transform="translateZ("+zoom+"px"+")"+"rotateX("+numX+") rotateY("+numY+")";
    rY+=5;
        break;
    case 38:
    numX = rX + "deg";
    Camera.style.transform="translateZ("+zoom+"px"+")"+"rotateX("+numX+") rotateY("+numY+")";
    rX-=5;
        break;
    case 39:
    numY = rY + "deg";
    Camera.style.transform="translateZ("+zoom+"px"+")"+"rotateX("+numX+") rotateY("+numY+")";
    rY-=5;
        break;
    case 40:
    numX = rX + "deg";
    Camera.style.transform="translateZ("+zoom+"px"+")"+"rotateX("+numX+") rotateY("+numY+")";
    rX+=5;
        break;
  }
};


// document.addEventListener( 'mousedown', onDocumentMouseDown, false );

// function onDocumentMouseDown( event ) {

//         event.preventDefault();

//         document.addEventListener( 'mousemove', onDocumentMouseMove, false );
//         document.addEventListener( 'mouseup', onDocumentMouseUp, false );
//         document.addEventListener( 'mouseout', onDocumentMouseOut, false );

//         mouseXOnMouseDown = event.clientX - windowHalfX;
//         targetRotationOnMouseDownX = targetRotationX;

//         mouseYOnMouseDown = event.clientY - windowHalfY;
//         targetRotationOnMouseDownY = targetRotationY;
//         render();

// }

// function onDocumentMouseMove( event ) {

//         mouseX = event.clientX - windowHalfX;
//         mouseY = event.clientY - windowHalfY;

//         targetRotationY = targetRotationOnMouseDownY + (mouseY - mouseYOnMouseDown) * 0.02;
//         targetRotationX = targetRotationOnMouseDownX + (mouseX - mouseXOnMouseDown) * 0.02;
//         render();

// }

// function onDocumentMouseUp( event ) {

//         document.removeEventListener( 'mousemove', onDocumentMouseMove, false );
//         document.removeEventListener( 'mouseup', onDocumentMouseUp, false );
//         document.removeEventListener( 'mouseout', onDocumentMouseOut, false );

// }

// function onDocumentMouseOut( event ) {

//         document.removeEventListener( 'mousemove', onDocumentMouseMove, false );
//         document.removeEventListener( 'mouseup', onDocumentMouseUp, false );
//         document.removeEventListener( 'mouseout', onDocumentMouseOut, false );

// }

// function onDocumentTouchStart( event ) {

//         if ( event.touches.length == 1 ) {

//                 event.preventDefault();

//                 mouseXOnMouseDown = event.touches[ 0 ].pageX - windowHalfX;
//                 targetRotationOnMouseDownX = targetRotationX;

//                 mouseYOnMouseDown = event.touches[ 0 ].pageY - windowHalfY;
//                 targetRotationOnMouseDownY = targetRotationY;render();

//         }

// }

// function onDocumentTouchMove( event ) {

//         if ( event.touches.length == 1 ) {

//                 event.preventDefault();

//                 mouseX = event.touches[ 0 ].pageX - windowHalfX;
//                 targetRotationX = targetRotationOnMouseDownX + ( mouseX - mouseXOnMouseDown ) * 0.05;

//                 mouseY = event.touches[ 0 ].pageY - windowHalfY;
//                 targetRotationY = targetRotationOnMouseDownY + (mouseY - mouseYOnMouseDown) * 0.05;render();

//         }

// }

// function render() {
//      var theta = + ( ( event.clientX - screenX ) * 0.5 )
//                 + 100;
//        var phi = ( ( event.clientY - screenY ) * 0.5 )
//               + 100;

//         phi = Math.min( 180, Math.max( 0, phi ) );
//         numX = Math.sin( theta * Math.PI / 360 )* Math.cos( phi * Math.PI / 360 ) + "deg";
//         numY = Math.sin( phi * Math.PI / 360 ) + "deg";
//         // numZ = Math.cos( theta * Math.PI / 360 )
//         //                     * Math.cos( phi * Math.PI / 360 ) + "deg";
//         Camera.style.transform = "translateZ("+zoom+"px"+")"+"rotateX("+numX+") rotateY("+numY+") rotateZ("+numZ+")";

//      //vertical rotation 
//      // finalRotationY = (targetRotationY - group.rotation.x); 
// //     group.rotation.x += finalRotationY * 0.05;

// //     finalRotationY = (targetRotationY - group.rotation.x);  
//     // if (group.rotation.x  <= 1 && group.rotation.x >= -1 ) {

//     //     group.rotation.x += finalRotationY * 0.1;
//     //     }
//     //  if (group.rotation.x  > 1 ) {

//     //     group.rotation.x = 1
//     //     }

//     //  if (group.rotation.x  < -1 ) {

//     //     group.rotation.x = -1
//     //     }

//     //     renderer.render( scene, camera );

// }



// http://benchung.com/smooth-mouse-rotation-three-js/
// https://stackoverflow.com/questions/8426822/rotate-camera-in-three-js-with-mouse














// document.onmousedown = function() { 
//   event.preventDefault();

//  var theta = - ( ( event.clientX - screenX ) * 0.5 )
//                 + 100;
//        var phi = ( ( event.clientY - screenY ) * 0.5 )
//               + 100;

//         phi = Math.min( 180, Math.max( 0, phi ) );
//         numX = Math.sin( theta * Math.PI / 360 )* Math.cos( phi * Math.PI / 360 ) + "deg";
//         numY = Math.sin( phi * Math.PI / 360 ) + "deg";
//         // numZ = Math.cos( theta * Math.PI / 360 )
//         //                     * Math.cos( phi * Math.PI / 360 ) + "deg";
//         Camera.style.transform = "translateZ("+zoom+"px"+")"+"rotateX("+numX+") rotateY("+numY+") rotateZ("+numZ+")";
// }


// window.onmouseup = function() {
//   --mouseDown;
// }


// (function onDocumentMouseMove( event ) {

//     // event.preventDefault();

//     if ( isMouseDown ) {

//         var theta = - ( ( event.clientX - onMouseDownPosition.x ) * 0.5 )
//                 + onMouseDownTheta;
//        var phi = ( ( event.clientY - onMouseDownPosition.y ) * 0.5 )
//               + onMouseDownPhi;

//         phi = Math.min( 180, Math.max( 0, phi ) );
//         numX = Math.sin( theta * Math.PI / 360 )* Math.cos( phi * Math.PI / 360 ) + "deg";
//         numY = Math.sin( phi * Math.PI / 360 ) + "deg";
//         numZ = Math.cos( theta * Math.PI / 360 )
//                             * Math.cos( phi * Math.PI / 360 ) + "deg";
//         Camera.style.transform = "translateZ("+zoom+"px"+")"+"rotateX("+numX+") rotateY("+numY+") rotateZ("+numZ+")";


//     }
// }())