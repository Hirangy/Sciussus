<?php
  require_once"admin/connect.php";
?>

<!DOCTYPE html>
<html>
<head>
 <link rel="icon" href="resources/SCIUS LOGO.png">
 <title>โครงการ วมว. มหาวิทยาลัยศิลปากร โรงเรียนสิรินธรราชวิทยาลัย</title>
 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="stylehome.css">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
         <img id="desktop_menubar_icons" src="resources/sciussu-menubar-icons.svg">
         <img id="desktop_menubar_longname" src="resources/sciussu-menubar-th-title.svg" >
         <svg id="desktop_menubar_rect" width="100vw" viewBox="0 0 80 8">
           <rect x="0" y="0" width="80" height="8" opacity=0.2 style="fill:#000"/>
           <rect x="0" y="0" width="80" height="7.65" style="fill:#40826d"/>
         </svg>
         <svg id="desktop_menubar_circle" height="16.8vw" viewBox="0 0 80 80">
           <circle cx="40" cy="40" r="35" style="fill:#40826d" />
         </svg>
         <b id="desktop_menubar_title_th">
           โครงการ วมว.
         </b>
         <b id="desktop_menubar_subtitle_th">
           โรงเรียนสิรินธรราชวิทยาลัย มหาวิทยาลัยศิลปากร
         </b>
       </div>


     <div id="desktop_iconlang">
       <div class="icon">
         <a href="info-en.php" height="9.4vw" width="6.25vw">
           <svg height="9.4vw" width="6.25vw" viewBox="0 0 80 120">
             <circle cx="40" cy="40" r="35" fill="white" opacity="0.1"/>
             <rect x="0" y="85" width="80" height="30" style="fill:#fff;stroke-width:4;stroke:#40826d"/>
             <text x="20" y="106" fill=#40826d style="font-size: 18px; font-family:Silapakorn-Bold;">ภาษา</text>
           </svg>
         </a>
       </div>
     </div>

     <div id="desktop_iconcont">
       <div class="icon">
         <a href="cont.php" height="9.4vw" width="6.25vw">
           <svg height="9.4vw" width="6.25vw" viewBox="0 0 80 120">
             <circle cx="40" cy="40" r="35" fill="white"opacity="0.1"/>
             <rect x="0" y="85" width="80" height="30" style="fill:#fff;stroke-width:4;stroke:#40826d"/>
             <text x="18" y="106" fill=#40826d style="font-size: 18px; font-family:Silapakorn-Bold;">ติดต่อ</text>
           </svg>
         </a>
       </div>
     </div>

     <div id="desktop_iconacti">
       <div class="icon">
         <a href="acti.php" height="9.4vw" width="6.25vw">
           <svg height="9.4vw" width="6.25vw" viewBox="0 0 80 120">
             <circle cx="40" cy="40" r="35" fill="white"opacity="0.1"/>
             <rect x="0" y="85" width="80" height="30" style="fill:#fff;stroke-width:4;stroke:#40826d"/>
             <text x="12" y="106" fill=#40826d style="font-size: 18px; font-family:Silapakorn-Bold;">กิจกรรม</text>
           </svg>
         </a>
       </div>
     </div>

     <div id="desktop_iconpers">
       <div class="icon">
         <a href="pers.php" height="9.4vw" width="6.25vw">
           <svg height="9.4vw" width="6.25vw" viewBox="0 0 80 120">
             <circle cx="40" cy="40" r="35" fill="white"opacity="0.1"/>
             <rect x="0" y="85" width="80" height="30" style="fill:#fff;stroke-width:4;stroke:#40826d"/>
             <text x="13" y="106" fill=#40826d style="font-size: 18px; font-family:Silapakorn-Bold;">บุคลากร</text>
           </svg>
         </a>
       </div>
     </div>

     <div id="desktop_iconnews">
       <div class="icon">
         <a href="news.php" height="9.4vw" width="6.25vw">
           <svg height="9.4vw" width="6.25vw" viewBox="0 0 80 120">
             <circle cx="40" cy="40" r="35" fill="white"opacity="0.1"/>
             <rect x="0" y="85" width="80" height="30" style="fill:#fff;stroke-width:4;stroke:#40826d"/>
             <text x="14" y="106" fill=#40826d style="font-size: 18px; font-family:Silapakorn-Bold;">ประกาศ</text>
           </svg>
         </a>
       </div>
     </div>

     <div id="desktop_iconinfo">
       <div class="icon">
         <a href="info.php" height="9.4vw" width="6.25vw">
           <svg height="9.4vw" width="6.25vw" viewBox="0 0 80 120">
             <circle cx="40" cy="40" r="35" fill="white"opacity="0.1"/>
             <rect x="0" y="85" width="80" height="30" style="fill:#fff;stroke-width:4;stroke:#40826d"/>
             <text x="4" y="106" fill=#40826d style="font-size: 14px; font-family:Silapakorn-Bold;">ข้อมูลเบื้องต้น</text>
           </svg>
         </a>
       </div>
     </div>

     <div id="desktop_iconhome">
       <div class="icon">
         <a href="index.php" height="9.4vw" width="6.25vw">
           <svg height="9.4vw" width="6.25vw" viewBox="0 0 80 120">
             <circle cx="40" cy="40" r="35" fill="white"opacity="0.1"/>
             <rect x="0" y="85" width="80" height="30" style="fill:#fff;stroke-width:4;stroke:#40826d"/>
             <text x="12" y="106" fill=#40826d style="font-size: 18px; font-family:Silapakorn-Bold;">หน้าหลัก</text>
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
     <img style="position:absolute; top:0vw;" width= "100%"src="img/sciussu info plan.svg">
     <img id="map" style="position:absolute; top:53vw; opacity:0.6; right:-20vw; transition:1s;" width= "37%"src="img/Thai map.svg">
     <img style="position:absolute; top:97vw; left:6vw" width= "20%"src="img/mhesi.png">
   </div>

   <a target="_blank" href="http://scius.most.go.th/project/match/view_data">
     <svg style="position:absolute; top:52vw; left:89vw;" height="5vw" width="10vw" viewBox="0 0 10 5">
       <rect x="0" y="0" width="10" height="5" fill="black" opacity="0"/>
     </svg>
   </a>

   <div class="footer" style="position:absolute; top:220vw;">
     <a href="admin/login.php" style="color:white;">Login as administrator</a>
   </div>

  </div>
 <div id="mobile_elements">

   <div class="mobile_banner">
     <img style="position:absolute; top:5vw;" width="100%" src="resources/Banner.jpg" alt="">
   </div>

   <div class="crop">
     <img style="position:absolute; top:0vw;" width= "100%"src="img/sciussu info plan mobile.svg">
     <img style="position:absolute; top:60vw; right:4vw" width="30%"src="img/mhesi.png">
   </div>

   <div class="mobile_menubar">
     <img style="position:fixed; top:0vw; "src="resources/sciussu-menubar-th-mobile.svg">


     <div id="mobile_logo">
       <a target="_blank" href="http://scius.most.go.th/">
       <img width = "100%" src="resources/SCIUS LOGO.png">
       </a>
     </div>

     <div id="mobile_iconlang">
       <div class="icon">
         <a href="info-en.php" height="15vw" width="15vw">
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

     <div id="mobile_menu_on">
       <img src="resources/sciussu-mobile-menu-th.svg" >
       <div id="mobile_menu_off" class="icon">
         <element onclick="menumobile_off()">
           <svg height="15vw" width="15vw" viewBox="0 0 80 80">
             <circle cx="40" cy="35" r="35" fill="white" opacity="0.1"/>
           </svg>
         </element>
       </div>

       <div id="mobile_iconcont" class="icon">
         <a href="cont.php" height="9.4vw" width="40vw">
           <svg height="10vw" width="56vw" viewBox="0 0 56 10">
             <rect x="0" y="0" rx="4" ry="4" width="56" height="10" fill="white"opacity="0.1"/>
           </svg>
         </a>
       </div>

       <div id="mobile_iconacti" class="icon">
         <a href="acti.php" height="9.4vw" width="40vw">
           <svg height="10vw" width="56vw" viewBox="0 0 56 10">
             <rect x="0" y="0" rx="4" ry="4" width="56" height="10" fill="white"opacity="0.1"/>
           </svg>
         </a>
       </div>

       <div id="mobile_iconpers" class="icon">
         <a href="pers.php" height="9.4vw" width="40vw">
           <svg height="10vw" width="56vw" viewBox="0 0 56 10">
             <rect x="0" y="0" rx="4" ry="4" width="56" height="10" fill="white"opacity="0.1"/>
           </svg>
         </a>
       </div>

       <div id="mobile_iconnews" class="icon">
         <a href="news.php" height="9.4vw" width="40vw">
           <svg height="10vw" width="56vw" viewBox="0 0 56 10">
             <rect x="0" y="0" rx="4" ry="4" width="56" height="10" fill="white"opacity="0.1"/>
           </svg>
         </a>
       </div>

       <div id="mobile_iconinfo" class="icon">
         <a href="info.php" height="9.4vw" width="40vw">
           <svg height="10vw" width="56vw" viewBox="0 0 56 10">
             <rect x="0" y="0" rx="4" ry="4" width="56" height="10" fill="white"opacity="0.1"/>
           </svg>
         </a>
       </div>

       <div id="mobile_iconhome" class="icon">
         <a href="index.php" height="9.4vw" width="40vw">
           <svg height="10vw" width="56vw" viewBox="0 0 56 10">
             <rect x="0" y="0" rx="4" ry="4" width="56" height="10" fill="white"opacity="0.1"/>
           </svg>
         </a>
       </div>
   </div>

   <a target="_blank" href="http://scius.most.go.th/project/match/view_data">
     <svg style="position:absolute; top:67vw; left:80vw;" height="10vw" width="20vw" viewBox="0 0 10 5">
       <rect x="0" y="0" width="20" height="10" fill="black" opacity="0"/>
     </svg>
   </a>

   <div class="footer" style="position:absolute; top:590vw;">
     <a href="admin/login.php" style="color:white;">Login as administrator</a>
   </div>


 </div>

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
 if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
   document.getElementById("desktop_menubar_rect").style.top = "-3vw";
   document.getElementById("desktop_menubar_circle").style.top = "-10vw";
   document.getElementById("desktop_logo").style.width = "5.5vw";
   document.getElementById("desktop_menubar_title_th").style.top = "0.8vw";
   document.getElementById("desktop_menubar_title_th").style.left = "8vw";
   document.getElementById("desktop_menubar_subtitle_th").style.opacity = "0";
   document.getElementById("desktop_menubar_subtitle_th").style.left = "8vw";
   document.getElementById("desktop_menubar_longname").style.top = "-10vw";
   document.getElementById("desktop_menubar_icons").style.top = "-1.5vw";
   document.getElementById("desktop_iconlang").style.top = "0.1vw";
   document.getElementById("desktop_iconcont").style.top = "0.1vw";
   document.getElementById("desktop_iconacti").style.top = "0.1vw";
   document.getElementById("desktop_iconpers").style.top = "0.1vw";
   document.getElementById("desktop_iconnews").style.top = "0.1vw";
   document.getElementById("desktop_iconinfo").style.top = "0.1vw";
   document.getElementById("desktop_iconhome").style.top = "0.1vw";
 } else {
   document.getElementById("desktop_menubar_rect").style.top = "0vw";
   document.getElementById("desktop_menubar_circle").style.top = "-1.5vw";
   document.getElementById("desktop_logo").style.width = "12.8vw";
   document.getElementById("desktop_menubar_title_th").style.top = "1vw";
   document.getElementById("desktop_menubar_title_th").style.left = "15.6vw";
   document.getElementById("desktop_menubar_subtitle_th").style.opacity = "1";
   document.getElementById("desktop_menubar_subtitle_th").style.left = "16vw";
   document.getElementById("desktop_menubar_longname").style.top = "0vw";
   document.getElementById("desktop_menubar_icons").style.top = "0vw";
   document.getElementById("desktop_iconlang").style.top = "1.6vw";
   document.getElementById("desktop_iconcont").style.top = "1.6vw";
   document.getElementById("desktop_iconacti").style.top = "1.6vw";
   document.getElementById("desktop_iconpers").style.top = "1.6vw";
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
