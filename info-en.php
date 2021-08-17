<?php
  require_once"admin/connect.php";
?>

<!DOCTYPE html>
<html>
<head>
 <link rel="icon" href="resources/SCIUS LOGO.png">
 <title>SCiUS Project - PSC SU</title>
 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="stylehome.css">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta charset="UTF-8">
 <meta http-equiv=Content-Type content="text/html; charset=utf-8">
 <style>

 @font-face {
   font-family: Silapakorn-Light;
   src: url(resources/silapakorn72-light_beta05.ttf);
 }
 @font-face {
   font-family: Silapakorn-Bold;
   src: url(resources/silapakorn72-bold_beta05.ttf);
 }
 @font-face {
   font-family: Silapakorn-Regular;
   src: url(resources/silapakorn72-regular_beta05.ttf);
 }

.footer {
   width: 100vw;
   background-color: #40826d;
   color: white;
   text-align: center;
   font-family: Silapakorn-Regular;
   padding: 1vw;
}

::-webkit-scrollbar {
display: none;
}

</style>
</head>
<body>
 <div id="desktop_elements">

   <div id="desktop_menubar">
       <div id="desktop_menubarbg">
         <img id="desktop_menubar_icons" src="resources/sciussu-menubar-icons-en.svg">
         <img id="desktop_menubar_longname" src="resources/sciussu-menubar-en-title.svg" >
         <svg id="desktop_menubar_rect" width="100vw" viewBox="0 0 80 8">
           <rect x="0" y="0" width="80" height="8" opacity=0.2 style="fill:#000"/>
           <rect x="0" y="0" width="80" height="7.65" style="fill:#40826d"/>
         </svg>
         <svg id="desktop_menubar_circle" height="16.8vw" viewBox="0 0 80 80">
           <circle cx="40" cy="40" r="35" style="fill:#40826d"/>
         </svg>
         <b id="desktop_menubar_title_en" style="position: fixed;
         	top: 1vw;
         	left: 15.6vw;
         	color: #fff;
         	font-size: 5.5vw;
         	font-family: Silapakorn-Regular;
         	z-index: 100;
         	transition: 0.5s;">
           SCiUS
         </b>
         <b id="desktop_menubar_subtitle_en" style="	position: fixed;
         	top: 2.7vw;
         	left: 30vw;
         	color: #fff;
          line-height: 1.4;
         	font-size: 1.9vw;
         	font-family: Silapakorn-Regular;
         	z-index: 101;
         	transition: 0.5s;">
           Princess Sirindhorn's College
           <br>
           Silpakorn University
         </b>
       </div>

     <div id="desktop_iconlang">
       <div class="icon">
         <a href="info.php" height="9.4vw" width="6.25vw">
           <svg height="9.4vw" width="6.25vw" viewBox="0 0 80 120">
             <circle cx="40" cy="40" r="35" fill="white" opacity="0.1"/>
             <rect x="0" y="85" width="80" height="30" style="fill:#fff;stroke-width:4;stroke:#40826d"/>
             <text x="7" y="106" fill=#40826d style="font-size: 16px; font-family:Silapakorn-Bold;">Language</text>
           </svg>
         </a>
       </div>
     </div>

     <div id="desktop_iconcont">
       <div class="icon">
         <a href="cont-en.php" height="9.4vw" width="6.25vw">
           <svg height="9.4vw" width="6.25vw" viewBox="0 0 80 120">
             <circle cx="40" cy="40" r="35" fill="white"opacity="0.1"/>
             <rect x="0" y="85" width="80" height="30" style="fill:#fff;stroke-width:4;stroke:#40826d"/>
             <text x="12" y="106" fill=#40826d style="font-size: 18px; font-family:Silapakorn-Bold;">Contact</text>
           </svg>
         </a>
       </div>
     </div>

     <div id="desktop_iconpers" style="left:80.2vw;">
       <div class="icon">
         <a href="pers-en.php" height="9.4vw" width="6.25vw">
           <svg height="9.4vw" width="6.25vw" viewBox="0 0 80 120">
             <circle cx="40" cy="40" r="35" fill="white"opacity="0.1"/>
             <rect x="0" y="85" width="80" height="30" style="fill:#fff;stroke-width:4;stroke:#40826d"/>
             <text x="8" y="106" fill=#40826d style="font-size: 16px; font-family:Silapakorn-Bold;">Personnel</text>
           </svg>
         </a>
       </div>
     </div>

     <div id="desktop_iconinfo" style="left:74.55vw;">
       <div class="icon">
         <a href="info-en.php" height="9.4vw" width="6.25vw">
           <svg height="9.4vw" width="6.25vw" viewBox="0 0 80 120">
             <circle cx="40" cy="40" r="35" fill="white"opacity="0.1"/>
             <rect x="0" y="85" width="80" height="30" style="fill:#fff;stroke-width:4;stroke:#40826d"/>
             <text x="9" y="106" fill=#40826d style="font-size: 16px; font-family:Silapakorn-Bold;">About Us</text>
           </svg>
         </a>
       </div>
     </div>

     <div id="desktop_iconhome" style="left:68.75vw;">
       <div class="icon">
         <a href="index-en.php" height="9.4vw" width="6.25vw">
           <svg height="9.4vw" width="6.25vw" viewBox="0 0 80 120">
             <circle cx="40" cy="40" r="35" fill="white"opacity="0.1"/>
             <rect x="0" y="85" width="80" height="30" style="fill:#fff;stroke-width:4;stroke:#40826d"/>
             <text x="18" y="106" fill=#40826d style="font-size: 18px; font-family:Silapakorn-Bold;">Home</text>
           </svg>
         </a>
       </div>
     </div>
     <div id="desktop_logo">
       <a target="_blank" href="http://scius.most.go.th/">
       <img width = "100%" src="resources/SCIUS LOGO.png">
       </a>
     </div>
   </div>

   <div>
     <img style="position:absolute; top:0vw;" width= "100%"src="img/sciussu info plan en.svg">
     <img id="map" style="position:absolute; top:48vw; opacity:1; right:2vw; transition:1s;" width= "37%"src="img/Thai map en.svg">
     <img style="position:absolute; top:92vw; left:6vw" width= "20%"src="img/mhesi.png">
   </div>


  </div>
 <div id="mobile_elements">


   <div class="crop">
     <img style="position:absolute; top:0vw;" width= "100%"src="img/sciussu info plan mobile en.svg">
     <img style="position:absolute; top:60vw; right:4vw" width="30%"src="img/mhesi.png">
   </div>

   <div class="mobile_menubar">

     <img style="position:fixed; top:0vw; "src="resources/sciussu-menubar-en-mobile.svg">



     <div id="mobile_logo">
       <a target="_blank" href="http://scius.most.go.th/">
       <img width = "100%" src="resources/SCIUS LOGO.png">
       </a>
     </div>

     <div id="mobile_iconlang">
       <div class="icon">
         <a href="info.php" height="15vw" width="15vw">
           <svg height="15vw" width="15vw" viewBox="0 0 80 80">
             <circle cx="40" cy="35" r="35" fill="white" opacity="0.1"/>
           </svg>
         </a>
       </div>
     </div>

     <div id="mobile_iconmenu">
       <div>
         <element onclick="menumobile_on()">
           <svg height="15vw" width="15vw" viewBox="0 0 80 80">
             <circle cx="40" cy="35" r="35" fill="white" opacity="0.0"/>
           </svg>
         </element>
       </div>
     </div>

     <div id="mobile_menu_on" style="height:100vw;">
       <img src="resources/sciussu-mobile-menu-en.svg" >
       <div id="mobile_menu_off" class="icon">
         <element onclick="menumobile_off()">
           <svg height="15vw" width="15vw" viewBox="0 0 80 80">
             <circle cx="40" cy="35" r="35" fill="white" opacity="0.1"/>
           </svg>
         </element>
       </div>

       <div id="mobile_iconcont" class="icon" style="top: 63vw;">
         <a href="cont-en.php" height="9.4vw" width="40vw">
           <svg height="10vw" width="56vw" viewBox="0 0 56 10">
             <rect x="0" y="0" rx="4" ry="4" width="56" height="10" fill="white"opacity="0.1"/>
           </svg>
         </a>
       </div>

       <div id="mobile_iconpers" class="icon" style="top: 49vw;">
         <a href="pers-en.php" height="9.4vw" width="40vw">
           <svg height="10vw" width="56vw" viewBox="0 0 56 10">
             <rect x="0" y="0" rx="4" ry="4" width="56" height="10" fill="white"opacity="0.1"/>
           </svg>
         </a>
       </div>


       <div id="mobile_iconinfo" class="icon">
         <a href="info-en.php" height="9.4vw" width="40vw">
           <svg height="10vw" width="56vw" viewBox="0 0 56 10">
             <rect x="0" y="0" rx="4" ry="4" width="56" height="10" fill="white"opacity="0.1"/>
           </svg>
         </a>
       </div>

       <div id="mobile_iconhome" class="icon">
         <a href="index-en.php" height="9.4vw" width="40vw">
           <svg height="10vw" width="56vw" viewBox="0 0 56 10">
             <rect x="0" y="0" rx="4" ry="4" width="56" height="10" fill="white"opacity="0.1"/>
           </svg>
         </a>
       </div>
   </div>
   </div>


 </div>

 <!--<img style="position:absolute; top:0vw; width:100vw;"src="guide.svg">-->


</body>

<script>
function menumobile_on() {
document.getElementById("mobile_menu_on").style.display = "block";
document.getElementById("mobile_menu_on").style.opacity = "1";
document.getElementById("mobile_menu_off").style.display = "block";
}
function menumobile_off() {
document.getElementById("mobile_menu_on").style.display = "none";
document.getElementById("mobile_menu_on").style.opacity = "0";
}

window.onscroll = function() {scrollFunction()};

 function scrollFunction() {
   if(document.body.scrollLeft > 0 || document.documentElement.scrollLeft > 0){
    setTimeout(function(){ window.scrollBy(-100,0); }, 500);
}
 if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
   document.getElementById("desktop_menubar_rect").style.top = "-3vw";
   document.getElementById("desktop_menubar_circle").style.top = "-10vw";
   document.getElementById("desktop_logo").style.width = "5.5vw";
   document.getElementById("desktop_menubar_title_en").style.top = "0.5vw";
   document.getElementById("desktop_menubar_title_en").style.left = "8vw";
   document.getElementById("desktop_menubar_title_en").style.fontSize = "4vw";
   document.getElementById("desktop_menubar_subtitle_en").style.opacity = "0";
   document.getElementById("desktop_menubar_subtitle_en").style.left = "8vw";
   document.getElementById("desktop_menubar_longname").style.top = "-10vw";
   document.getElementById("desktop_menubar_icons").style.top = "-1.5vw";
   document.getElementById("desktop_iconlang").style.top = "0.1vw";
   document.getElementById("desktop_iconcont").style.top = "0.1vw";
   document.getElementById("desktop_iconacti").style.top = "0.1vw";
   document.getElementById("desktop_iconpers_en").style.top = "0.1vw";
   document.getElementById("desktop_iconnews").style.top = "0.1vw";
   document.getElementById("desktop_iconinfo").style.top = "0.1vw";
   document.getElementById("desktop_iconhome").style.top = "0.1vw";
 } else {
   document.getElementById("desktop_menubar_rect").style.top = "0vw";
   document.getElementById("desktop_menubar_circle").style.top = "-1.5vw";
   document.getElementById("desktop_logo").style.width = "12.8vw";
   document.getElementById("desktop_menubar_title_en").style.top = "1vw";
   document.getElementById("desktop_menubar_title_en").style.left = "15.6vw";
   document.getElementById("desktop_menubar_title_en").style.fontSize = "5.5vw";
   document.getElementById("desktop_menubar_subtitle_en").style.opacity = "1";
   document.getElementById("desktop_menubar_subtitle_en").style.left = "30vw";
   document.getElementById("desktop_menubar_longname").style.top = "0vw";
   document.getElementById("desktop_menubar_icons").style.top = "0vw";
   document.getElementById("desktop_iconlang").style.top = "1.6vw";
   document.getElementById("desktop_iconcont").style.top = "1.6vw";
   document.getElementById("desktop_iconacti").style.top = "1.6vw";
   document.getElementById("desktop_iconpers_en").style.top = "1.6vw";
   document.getElementById("desktop_iconnews").style.top = "1.6vw";
   document.getElementById("desktop_iconinfo").style.top = "1.6vw";
   document.getElementById("desktop_iconhome").style.top = "1.6vw";
 }
 if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
   document.getElementById("map").style.right = "2vw";
   document.getElementById("map").style.opacity = "1";
 }else {
 }
}
</script>
</html>
