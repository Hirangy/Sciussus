<?php
  require_once"admin/connect.php";

    if (isset($_GET['proj'])) {
      $proj_get_id = $_GET['proj'];
      $select_proj = "SELECT * FROM projects WHERE proj_id = $proj_get_id";
      $query_proj = mysqli_query($conn,$select_proj);
      while ($row = mysqli_fetch_array($query_proj)) {
        $proj_id = $row['proj_id'];
        $proj_code = $row['proj_code'];
        $proj_authors = $row['proj_authors'];
        $proj_name_th = $row['proj_name_th'];
        $proj_name_en = $row['proj_name_en'];
        $proj_poster = $row['proj_poster'];
        $proj_abstract = $row['proj_abstract'];
    }
    }
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
         <a href="index-en.php?redirect=1" height="9.4vw" width="6.25vw">
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

   <div class="content">
     <svg style="position:absolute; top:31vw; left:5vw;" height="50vw" width="40vw" viewBox="0 0 40 50">
       <image x="0" y="0" height="50" width="40" href="<?php echo $proj_poster; ?>"/>
     </svg>
     <svg style="position:absolute; top:18vw; left:5vw;" width="90vw"viewBox="0 0 90 11">
       <rect x="0.5" y="0.5" width="89" height="10" fill="#ddd"/>
       <rect x="0" y="0" width="89" height="10" fill="#40826d"/>
     <text dominant-baseline="middle" text-anchor="middle" x="45" y="3.3" font-size="<?php if(strlen($proj_name_th)<300){
         echo "0.12rem";
         }elseif(strlen($proj_name_th)<400){
        echo "0.10rem";
        } else {
            echo "0.08rem";
        }
        ?>" style="font-family:Silapakorn-Regular; fill:#fff;"> <?php echo $proj_name_th;?> </text>
     <text dominant-baseline="middle" text-anchor="middle" x="45" y="7.5" font-size="<?php if(strlen($proj_name_en)<80){
         echo "0.12rem";
         }elseif(strlen($proj_name_en)<130){
        echo "0.10rem";
        } else {
            echo "0.08rem";
        }
        ?>" style="font-family:Silapakorn-Regular; fill:#fff;"> <?php echo $proj_name_en; ?> </text>
     </svg>
     <text style="position:absolute; font-size:1.3vw; top:31vw; left:47vw; font-family:Silapakorn-Regular; color:#40826d;"> by <?php echo $proj_authors;?></text>
     <text style="position:absolute; font-size:1.2vw; top:33vw; left:47vw; font-family:Silapakorn-Regular; color:#40826d;"> Code: <?php echo $proj_code;?> id: <?php echo $proj_id;?> </text>
     <text style="position:absolute; font-size:1.2vw; top:35vw; left:47vw; font-family:Silapakorn-Regular; color:#40826d;"> Abstract (บทคัดย่อ) </text>
     <text style="position:absolute; font-size:1.2vw; top:37vw; left:47vw; font-family:Silapakorn-Regular; color:#40826d; width:45vw; line-height: 1.3; word-break: break-word; overflow:auto;"> <?php echo $proj_abstract;?> </text>
  </div>
   <div class="footer" style="position:absolute; top:85vw;">
     <a href="admin/login.php" style="color:white;">Login as administrator</a>
   </div>

  </div>
 <div id="mobile_elements">

   <img style="position:absolute; top:48vw; left:10vw; height:100vw; width:80vw;" src="<?php echo $proj_poster; ?>"/>


 <svg style="position:absolute; top:20vw; left:5vw;" width="90vw"viewBox="0 0 90 25">
   <rect x="0.5" y="0.5" width="89" height="23" fill="#ddd"/>
   <rect x="0" y="0" width="89" height="23" fill="#40826d"/>
  
   <text dominant-baseline="middle" text-anchor="middle" x="45" y="19.5" font-size="<?php if(strlen($proj_name_en)<80){
         echo "0.12rem";
         }elseif(strlen($proj_name_en)<130){
        echo "0.10rem";
        } else {
            echo "0.08rem";
        }
        ?>"  style="font-family:Silapakorn-Regular; fill:#fff;"> <?php echo $proj_name_en; ?> </text>
 <text dominant-baseline="middle" text-anchor="middle" x="45" y="5" font-size="0.24rem" style="font-family:Silapakorn-Regular; fill:#fff;"> <?php echo $post_title; ?> </text>
 </svg>
 <div style="position:relative; top:22vw; left:5vw; width:86vw; height:0vw; background-color: #40826d;" >
        <text style="font-size:<?php if(strlen($proj_name_th)<300){
         echo "1.1rem";
         }elseif(strlen($proj_name_th)<400){
        echo "1.0rem";
        } else {
            echo "0.7rem";
        }
        ?>; position:absolute;   height: fit-content; top:0vw; left:5vw; text-align:center; font-family:Silapakorn-Regular; color:white;  width:80vw; background-color: #40826d; line-height: 1.2; word-break: break-word; overflow:auto;"> <?php echo $proj_name_th; ?> </text>

 </div>
 <div style="position:relative; top:0vw; left:0vw; width:90vw; height:10vw; background-color: #40826d; z-index:0;">
        <text style="font-size:<?php if(strlen($proj_name_en)<80){
         echo "0.5rem";
         }elseif(strlen($proj_name_en)<130){
        echo "0.3rem";
        } else {
            echo "0.2rem";
        }
        ?>  ; position:absolute; top:0vw; left:0vw; text-align:center; font-family:Silapakorn-Regular; color:white;  width:80vw; background-color: #40826d; line-height: 1.2; word-break: break-word; overflow:auto;"> <?php echo $proj_name_en; ?> </text>
</div>
 <text style="position:absolute; font-size:2.5vw; top:43.3vw; left:14vw; font-family:Silapakorn-Regular; color:#40826d;"> by <?php echo $proj_authors;?></text>
<text style="position:absolute; font-size:2.5vw; top:43.3vw; left:7vw; font-family:Silapakorn-Regular; color:#40826d;"> id: <?php echo $proj_id;?> </text>
<text style="position:absolute; font-size:3vw; top:151vw; left:7vw; font-family:Silapakorn-Regular; color:#40826d;"> Abstract(บทคัดย่อ) </text>
 <text style="position:absolute; font-size:3vw; top:158vw; left:8vw; font-family:Silapakorn-Regular; color:#40826d; width:85vw; line-height: 1.3; word-break: break-word; overflow:auto;"> <?php echo $proj_abstract;?> </text>

<div class="footer" style="position:absolute; top:212vw;">
 <a href="admin/login.php" style="color:white;">Login as administrator</a>
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
         <a href="index-en.php?redirect=1" height="15vw" width="15vw">
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
   document.getElementById("overlay").style.opacity = "1";
 } else {
   document.getElementById("overlay").style.opacity = "0";
 }
}

</script>

</html>
