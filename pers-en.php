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

  <?php
  if (isset($_GET['redirect'])) {
    $redirect = $_GET['redirect'];
  } else {
    $redirect = 0;
  }
  if ($redirect ==1) {
    echo"<script>alert('You are being redirected as this page does not exist in English.');</script>";
  }
  ?>


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
         <a href="pers.php" height="9.4vw" width="6.25vw">
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

   <div style="position:absolute; top:0vw; left:0vw;">
      <svg style="position:relative; top:0vw; left:10vw;" width="80vw" viewBox="0 0 80 20">
          <rect x="0" y="0" width="8" height="20" fill="#fff"/>
      </svg>

      <svg style="position:relative; top:0vw; left:10vw;" width="80vw" height="4vw" viewBox="0 0 80 4">
        <text x="0" y="3" style="font-size:0.15rem; font-family:Silapakorn-Regular;" fill="#1d5242">Project Personnels</text>
      </svg>
       <svg style="position:relative; top:0vw; left:10vw;" width="80vw" height="4vw" viewBox="0 0 80 4">
         <rect x="0" y="0.8" rx="1"width="80" height="5" border="1" fill="#40826d"/>
         <text x="20" y="2.8"  dominant-baseline="middle" text-anchor="middle" style="font-size:0.11rem; font-family:Silapakorn-Regular;" fill="white">Position</text>
         <text x="60" y="2.8" dominant-baseline="middle" text-anchor="middle" style="font-size:0.11rem; font-family:Silapakorn-Regular;" fill="white">Name</text>
       </svg>

         <?php
         $j = 0;
         while ($j<100) {
             $j++;
       $select_fac = "SELECT * FROM faculty WHERE fac_id = $j";

       $query_fac = mysqli_query($conn,$select_fac);

       while ($row = mysqli_fetch_array($query_fac)) {
         $name = $row['fac_name_en'];
         $pos = $row['fac_pos_en'];

      ?>
        <svg style="position:relative; top:0vw; left:10vw;" width="80vw" height="3.2vw" viewBox="0 0 80 3.2">
          <rect x="0" y="0" width="80" height="3.2" border="1" fill="<?php
          if ($j % 2 == 0) {
            echo '#daf0e9';
          } elseif ($j % 2 == 1){
            echo '#edf7f4';
          }
          ?>"/>
          <text x="1" y="2" dominant-baseline="middle" style="font-size:0.11rem; font-family:Silapakorn-Regular;" fill="#1d5242"><?php echo $pos;?></text>
          <text x="41" y="2" dominant-baseline="middle" style="font-size:0.11rem; font-family:Silapakorn-Regular;" fill="#1d5242"><?php echo $name;?></text>
          <line x1="40" y1="0.5" x2="40" y2="2.7" style="stroke:#fff;stroke-width:0.25" stroke-linecap="round" />
        </svg>

    <?php }} ?>

  </div>
</div>
 <div id="mobile_elements">

      <svg style="position:relative; top:0vw; left:10vw;" width="80vw" viewBox="0 0 80 30">
          <rect x="0" y="0" width="8" height="20" fill="#fff"/>
      </svg>

      <svg style="position:relative; top:0vw; left:10vw;" width="80vw" height="6vw" viewBox="0 0 80 6">
        <text x="0" y="5" style="font-size:0.30rem; font-family:Silapakorn-Regular;" fill="#1d5242">Project Personnels</text>
      </svg>
       <svg style="position:relative; top:0vw; left:10vw;" width="80vw" height="8vw" viewBox="0 0 80 8">
         <rect x="0" y="0.8" rx="1" width="80" height="10" border="1" fill="#40826d"/>
         <text x="40" y="4.8"  dominant-baseline="middle" text-anchor="middle" style="font-size:0.22rem; font-family:Silapakorn-Regular;" fill="white">Posision/Name</text>
       </svg>

         <?php
         $j = 0;
         while ($j<100) {
             $j++;
       $select_fac = "SELECT * FROM faculty WHERE fac_id = $j";

       $query_fac = mysqli_query($conn,$select_fac);

       while ($row = mysqli_fetch_array($query_fac)) {
         $name = $row['fac_name_en'];
         $pos = $row['fac_pos_en'];

      ?>
        <svg style="position:relative; top:0vw; left:10vw;" width="80vw" height="12.8vw" viewBox="0 0 80 12.8">
          <rect x="0" y="6.4" width="80" height="6.4" border="1" fill="<?php
          if ($j % 2 == 0) {
            echo '#daf0e9';
          } elseif ($j % 2 == 1){
            echo '#edf7f4';
          }
          ?>"/>
          <text x="1" y="3.4" dominant-baseline="middle" style="font-size:0.22rem; font-family:Silapakorn-Regular;" fill="#1d5242"><?php echo $pos;?></text>
          <text x="1" y="9.8" dominant-baseline="middle" style="font-size:0.22rem; font-family:Silapakorn-Regular;" fill="#1d5242"><?php echo $name;?></text>
        </svg>

    <?php }} ?>

   <div class="mobile_menubar">

     <img style="position:fixed; top:0vw; "src="resources/sciussu-menubar-en-mobile.svg">

     <div id="mobile_logo">
       <a target="_blank" href="http://scius.most.go.th/">
       <img width = "100%" src="resources/SCIUS LOGO.png">
       </a>
     </div>

     <div id="mobile_iconlang">
       <div class="icon">
         <a href="pers.php" height="15vw" width="15vw">
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
