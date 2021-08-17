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

 .center {
   text-align: center;
   width: 20vw;
   height: 5vw;
   color: white;
 }

 .center2 {
   text-align: center;
   width: 20vw;
   height: 2vw;
   color: white;
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

   <div id="desktop_banner" class="desktop_banner" style="position: absolute; top:0vw; opacity:1; transition:1.5s;">
     <img width="100%" src="resources/Banner.jpg" alt="">
   </div>

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
         <a href="index.php" height="9.4vw" width="6.25vw">
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

   <div class="desktop_content">
     <img id="desktop_farewell_en" style="position:fixed; top:74vw;left:0vw;" width="100%" src="img/farewell1.jpg">
     <img style="position:absolute; top:65vw;" width= "100%" src="img/sciussu home plan en.svg">
     <img id="map" style="position:absolute; top:250vw; opacity:1; right:2vw; transition:1s;" width= "34%" src="img/Thai map en.svg">
     <a target="_blank" href="https://www.mhesi.go.th/home/"><img style="position:absolute; top:288vw; left:4vw" width= "20%"src="img/mhesi.png"></a>
     <img id="laurel" style="position:absolute; top:124vw;left:0vw;opacity:1; transition:1.5s;" width="100%" src="img/stat laurel desktop en.svg">
     <?php
      $select_stats = "SELECT * FROM stats WHERE stat_id = 1";
      $query_stats = mysqli_query($conn,$select_stats);
      while ($row = mysqli_fetch_array($query_stats)) {
        $stats = array($row['stat_one']+0,$row['stat_two']+0,$row['stat_three']+0,$row['stat_four']+0,$row['stat_five']+0);
     }
     $select_stats = "SELECT * FROM stats WHERE stat_id = 2";
     $query_stats = mysqli_query($conn,$select_stats);
     while ($row = mysqli_fetch_array($query_stats)) {
       $stats_pos = array($row['stat_one']+0,$row['stat_two']+0,$row['stat_three']+0,$row['stat_four']+0,$row['stat_five']+0);
    }
     ?>
     <text style="position:absolute; font-size:5vw; top:126.5vw; left:<?php echo $stats_pos[0];?>vw; font-family:Silapakorn-Regular; color:#fff; word-break: break-word; overflow:hidden;"> <?php echo $stats[0]; ?></text>
     <text style="position:absolute; font-size:5vw; top:126.5vw; left:<?php echo $stats_pos[1];?>vw; font-family:Silapakorn-Regular; color:#fff; word-break: break-word; overflow:hidden;"> <?php echo $stats[1]; ?></text>
     <text style="position:absolute; font-size:7vw; top:123.6vw; left:<?php echo $stats_pos[2];?>vw; font-family:Silapakorn-Bold; color:#999; word-break: break-word; overflow:hidden;"> <?php echo $stats[2]; ?></text>
     <text style="position:absolute; font-size:7vw; top:123.3vw; left:<?php echo $stats_pos[2]-0.3;?>vw; font-family:Silapakorn-Bold; color:#fff; word-break: break-word; overflow:hidden;"> <?php echo $stats[2]; ?></text>
     <text style="position:absolute; font-size:5vw; top:126.5vw; left:<?php echo $stats_pos[3]?>vw; font-family:Silapakorn-Regular; color:#fff; word-break: break-word; overflow:hidden;"> <?php echo $stats[3]; ?></text>
     <text style="position:absolute; font-size:5vw; top:126.5vw; left:<?php echo $stats_pos[4]?>vw; font-family:Silapakorn-Regular; color:#fff; word-break: break-word; overflow:hidden;"> <?php echo $stats[4]; ?></text>
   </div>
   <div class="desktop_about">
     <?php
     $i = 0;
     while ($i<4) {
       $i++;
     $select_about = "SELECT * FROM about WHERE about_id = $i";
     $query_about = mysqli_query($conn,$select_about);
     while ($row = mysqli_fetch_array($query_about)) {
       $about = array($row['about_title'],$row['about_image'],$row['about_link']);
     }
     ?>
      <a href = "<?php echo $about[2]?>">
        <svg style="position:absolute; top:73vw; left:<?php echo $i*20-10?>vw;" width="20vw" viewBox="0 0 20 16">
          <rect x="0" y="0" width="20" height="16" fill="#fff" opacity="1"/>
          <image x="0" y="0" width="20" height="12" href="<?php echo $about[1]?>" />
        </svg>
        <text style="color:#40826d; font-family:Silapakorn-Regular; font-size:2vw; position:absolute; top:85vw; left:<?php echo $i*20-10?>vw;"> <?php echo $about[0];?> </text>
      </a>
     <?php } ?>
   </div>

   <div class="faculty">

     <?php

     $select_featured = "SELECT * FROM featured WHERE id = 'faculty'";
     $query_featured = mysqli_query($conn,$select_featured);
     while ($row = mysqli_fetch_array($query_featured)) {
       $featured_faculty = array($row['one']+0,$row['two']+0,$row['three']+0,$row['four']+0,$row['five']+0,$row['six']+0,$row['seven']+0,$row['eight']+0,$row['nine']+0,$row['ten']+0,$row['eleven']+0,$row['twelve']+0);
     }

     for($i=0;$i<12;$i++){
     $select_faculty = "SELECT * FROM faculty WHERE fac_id = $featured_faculty[$i]";
     $query_faculty = mysqli_query($conn,$select_faculty);
      while ($row = mysqli_fetch_array($query_faculty)) {
        $facname[$i] = $row['fac_name_en'];
        $facpos[$i] = $row['fac_pos_en'];
        $facimg[$i] = $row['fac_image'];
      }
    }
     ?>


     <svg style="position:absolute; top:170vw; left:20vw;" height="15vw" width="10vw" viewBox="0 0 10 15">
       <image x="0" y="0" height="15" width="10" href="<?php echo $facimg[0]; ?>"/>
     </svg>
     <div class="center" style="background-color: #40826d; position:absolute; top:185.8vw; left:15vw;">
     </div>
     <div class="center2" style="position:absolute; top:186.5vw; left:15vw;">
        <a style="text-align:center; font-size:1.2vw; font-family:Silapakorn-Bold; color:white;"> <?php echo $facname[0];?> </a>
    </div>
    <div class="center2" style="position:absolute; top:188.5vw; left:15vw;">
       <a style="text-align:center; font-size:1.0vw; font-family:Silapakorn-Bold; color:white;"> <?php echo $facpos[0];?> </a>
   </div>
     <svg style="position:absolute; top:170vw; left:70vw;" height="15vw" width="10vw" viewBox="0 0 10 15">
       <image x="0" y="0" height="15" width="10" href="<?php echo $facimg[4]; ?>"/>
     </svg>
     <div class="center" style="background-color: #3d0bb7; position:absolute; top:185.8vw; left:65vw;">
     </div>
     <div class="center2" style="position:absolute; top:186.5vw; left:65vw;">
        <a style="text-align:center; font-size:1.2vw; font-family:Silapakorn-Bold; color:white;"> <?php echo $facname[4];?> </a>
    </div>
    <div class="center2" style="position:absolute; top:188.5vw; left:65vw;">
       <a style="text-align:center; font-size:1.0vw; font-family:Silapakorn-Bold; color:white;"> <?php echo $facpos[4];?> </a>
   </div>

   <div style="width:44.2vw; height: 5vw; background-color: #40826d; position:absolute; top:207.3vw; left:2.8vw;">
   </div>
   <div style="width:44.2vw; height: 5vw; background-color: #3d0bb7; position:absolute; top:207.3vw; left:52.8vw;">
   </div>
     <?php
     for($i=0;$i<3;$i++){
       ?>
     <svg style="position:absolute; top:193vw; left:<?php echo 6 + $i*14.5;?>vw;" height="13.5vw" width="9vw" viewBox="0 0 10 15">
       <image x="0" y="0" height="15" width="10" href="<?php echo $facimg[1+$i];?>"/>
     </svg>
     <div style="width: 20vw; height: 2vw; text-align: center; position:absolute; top:208.2vw; left:<?php echo 0.5+$i*14.5;?>vw;">
        <a style="text-align:center; font-size:1.0vw; font-family:Silapakorn-Bold; color:white;"> <?php echo $facname[1+$i];?> </a>
     </div>
     <div style=" width: 20vw; height: 2vw; text-align: center; position:absolute; top:210vw; left:<?php echo 0.5+$i*14.5;?>vw;">
       <a style="text-align:center; font-size:0.9vw; font-family:Silapakorn-Bold; color:white;"> <?php echo $facpos[1+$i];?> </a>
     </div>
     <?php

     }
     for($i=0;$i<3;$i++){
       ?>
     <svg style="position:absolute; top:193vw; left:<?php echo 56 + $i*14.5;?>vw;" height="13.5vw" width="9vw" viewBox="0 0 10 15">
       <image x="0" y="0" height="15" width="10" href="<?php echo $facimg[5+$i];?>"/>
     </svg>
     <div style="width: 20vw; height: 2vw; text-align: center; position:absolute; top:208.2vw; left:<?php echo 50.5+$i*14.5;?>vw;">
        <a style="text-align:center; font-size:1.0vw; font-family:Silapakorn-Bold; color:white;"> <?php echo $facname[5+$i];?> </a>
     </div>
     <div style=" width: 20vw; height: 2vw; text-align: center; position:absolute; top:210vw; left:<?php echo 50.5+$i*14.5;?>vw;">
       <a style="text-align:center; font-size:0.9vw; font-family:Silapakorn-Bold; color:white;"> <?php echo $facpos[5+$i];?> </a>
     </div>
     <?php
     }
     ?>
     <div style="width: 72vw; height: 5vw; background-color: #666; position:absolute; top:237vw; left:14.3vw;">
     </div>
     <?php
     for($i=0;$i<4;$i++){
       ?>
     <svg style="position:absolute; top:221vw; left:<?php echo 19.3 + $i*17;?>vw;" height="15vw" width="10vw" viewBox="0 0 10 15">
       <image x="0" y="0" height="15" width="10" href="<?php echo $facimg[8+$i];?>"/>
     </svg>

     <div style="width: 20vw; height: 2vw; text-align: center; position:absolute; top:237.5vw; left:<?php echo 14.3 + $i*17;?>vw;">
        <a style="text-align:center; font-size:1.2vw; font-family:Silapakorn-Bold; color:white;"> <?php echo $facname[8+$i];?> </a>
     </div>
     <div style=" width: 20vw; height: 2vw; text-align: center; position:absolute; top:239.5vw; left:<?php echo 14.3 + $i*17;?>vw;">
       <a style="text-align:center; font-size:1.2vw; font-family:Silapakorn-Bold; color:white;"> <?php echo $facpos[8+$i];?> </a>
     </div>
     <?php
    }
    ?>


   </div>



   <div class="links">
     <a href="news.php">
       <svg style="position:absolute; top:67vw; left:39vw;" height="5vw" width="10vw" viewBox="0 0 10 5">
         <rect x="0" y="0" width="10" height="5" fill="black" opacity="0"/>
       </svg>
     </a>
     <a href="acti.php">
       <svg style="position:absolute; top:67vw; left:89vw;" height="5vw" width="10vw" viewBox="0 0 10 5">
         <rect x="0" y="0" width="10" height="5" fill="black" opacity="0"/>
       </svg>
     </a>
     <a href="pers-en.php">
       <svg style="position:absolute; top:240vw; left:89vw;" height="5vw" width="10vw" viewBox="0 0 10 5">
         <rect x="0" y="0" width="10" height="5" fill="black" opacity="0"/>
       </svg>
     </a>
     <a target="_blank" href="http://scius.most.go.th/project/match/view_data">
       <svg style="position:absolute; top:248vw; left:89vw;" height="5vw" width="10vw" viewBox="0 0 10 5">
         <rect x="0" y="0" width="10" height="5" fill="black" opacity="0"/>
       </svg>
     </a>
     <a target="_blank" href="http://scius.most.go.th/set/content/view_data/2">
       <svg style="position:absolute; top:292.5vw; left:49vw;" height="5vw" width="10vw" viewBox="0 0 10 5">
         <rect x="0" y="0" width="10" height="5" fill="black" opacity="0"/>
       </svg>
     </a>
     <a href="cont-en.php">
       <svg style="position:absolute; top:303vw; left:25vw;" height="5vw" width="10vw" viewBox="0 0 10 5">
         <rect x="0" y="0" width="10" height="5" fill="black" opacity="0"/>
       </svg>
     </a>
     <a target="_blank" href="https://www.facebook.com/scius.scsu">
       <svg style="position:absolute; top:332vw; left:30vw;" height="5vw" width="5vw" viewBox="0 0 5 5">
         <rect x="0" y="0" width="5" height="5" fill="black" opacity="0"/>
       </svg>
     </a>
     <a target="_blank" href="https://www.google.co.th/maps/place/13%C2%B049'08.8%22N+100%C2%B002'26.4%22E/@13.8190973,100.0401138,19z/data=!3m1!4b1!4m6!3m5!1s0x0:0x0!7e2!8m2!3d13.819096!4d100.0406607">
       <svg style="position:absolute; top:332vw; left:36vw;" height="5vw" width="5vw" viewBox="0 0 5 5">
         <rect x="0" y="0" width="5" height="5" fill="black" opacity="0"/>
       </svg>
     </a>
     <a target="_blank" href="https://www.facebook.com/SilpakornUniversityThailand">
       <svg style="position:absolute; top:332vw; left:51vw;" height="5vw" width="5vw" viewBox="0 0 5 5">
         <rect x="0" y="0" width="5" height="5" fill="black" opacity="0"/>
       </svg>
     </a>
     <a target="_blank" href="https://goo.gl/maps/1GoQFTmTrTjx1TTFA">
       <svg style="position:absolute; top:332vw; left:57vw;" height="5vw" width="5vw" viewBox="0 0 5 5">
         <rect x="0" y="0" width="5" height="5" fill="black" opacity="0"/>
       </svg>
     </a>
     <a target="_blank" href="http://www.sc.su.ac.th/">
       <svg style="position:absolute; top:328vw; left:52vw;" height="3vw" width="10vw" viewBox="0 0 10 3">
         <rect x="0" y="0" width="10" height="3" fill="black" opacity="0"/>
       </svg>
     </a>
     <a target="_blank" href="https://www.facebook.com/PrincessSirindhornCollege">
       <svg style="position:absolute; top:332vw; left:76vw;" height="5vw" width="5vw" viewBox="0 0 5 5">
         <rect x="0" y="0" width="5" height="5" fill="black" opacity="0"/>
       </svg>
     </a>
     <a target="_blank" href="http://www.psc.ac.th/">
       <svg style="position:absolute; top:328vw; left:77vw;" height="3vw" width="9vw" viewBox="0 0 9 3">
         <rect x="0" y="0" width="9" height="3" fill="black" opacity="0"/>
       </svg>
     </a>
     <a target="_blank" href="https://goo.gl/maps/pg2d58BxVhUQKpZC9">
       <svg style="position:absolute; top:332vw; left:82vw;" height="5vw" width="5vw" viewBox="0 0 5 5">
         <rect x="0" y="0" width="5" height="5" fill="black" opacity="0"/>
       </svg>
     </a>

   </div>

   <div class="footer" style="position:absolute; top:340vw;">
     <a href="admin/login.php" style="color:white;">Login as administrator</a>
   </div>

  </div>
 <div id="mobile_elements">

   <div class="mobile_banner">
     <img style="position:absolute; top:5vw;" width="100%" src="resources/Banner.jpg" alt="">
   </div>

   <div class="crop">
     <img style="position:absolute; top:118vw; left:0vw;" width="100%" src="img/farewell1.jpg">
     <img style="position:absolute; top:70vw;" width= "100%"src="img/sciussu home mobile en.svg">
     <img style="position:absolute; bottom:377vw; right:4vw" width="30%"src="img/mhesi.png">
   </div>

   <?php
    $select_stats = "SELECT * FROM stats WHERE stat_id = 1";
    $query_stats = mysqli_query($conn,$select_stats);
    while ($row = mysqli_fetch_array($query_stats)) {
      $stats = array($row['stat_one']+0,$row['stat_two']+0,$row['stat_three']+0,$row['stat_four']+0,$row['stat_five']+0);
   }
   $select_stats = "SELECT * FROM stats WHERE stat_id = 2";
   $query_stats = mysqli_query($conn,$select_stats);
   while ($row = mysqli_fetch_array($query_stats)) {
     $stats_pos = array($row['stat_one']+0,$row['stat_two']+0,$row['stat_three']+0,$row['stat_four']+0,$row['stat_five']+0);
  }
   ?>

   <div class="mobile_about">
     <?php
     $i = 0;
     while ($i<4) {
       $i++;
     $select_about = "SELECT * FROM about WHERE about_id = $i";
     $query_about = mysqli_query($conn,$select_about);
     while ($row = mysqli_fetch_array($query_about)) {
       $about = array($row['about_title'],$row['about_image'],$row['about_link']);
     }
     ?>
      <a href = "<?php echo $about[2]?>">
        <svg style="position:absolute; top:<?php echo 87+floor(($i-1)/2)*20;?>vw; left:<?php echo (($i)%2)*35+14?>vw;" width="35vw" viewBox="0 0 35 20">
          <image x="0" y="0" width="35" height="20" href="<?php echo $about[1]?>" />
          <rect x="0" y="13" width="35" height="7" fill="#000" opacity="0.6"/>
        </svg>
        <text style="color:#fff; font-family:Silapakorn-Regular; font-size:3.4vw; position:absolute; top:<?php echo 101.5+floor(($i-1)/2)*20;?>vw; left:<?php echo (($i)%2)*35+15?>vw;"> <?php echo $about[0];?> </text>
      </a>
     <?php } ?>
   </div>

   <svg style="position:absolute; top:180vw; width:100vw;" viewBoX="0 0 100 30">
     <text dominant-baseline="middle" text-anchor="middle" x="12" y="7.5" font-size="0.4rem" style="font-family:Silapakorn-Regular; fill:#fff;">  <?php echo $stats[0]; ?> </text>
     <text dominant-baseline="middle" text-anchor="middle" x="30.5" y="17.5" font-size="0.4rem" style="font-family:Silapakorn-Regular; fill:#fff;">  <?php echo $stats[4]; ?> </text>
     <text dominant-baseline="middle" text-anchor="middle" x="51" y="5.5" font-size="0.5rem" style="font-family:Silapakorn-Bold; fill:#aaa;">  <?php echo $stats[2]; ?> </text>
     <text dominant-baseline="middle" text-anchor="middle" x="50.5" y="5" font-size="0.5rem" style="font-family:Silapakorn-Bold; fill:#fff;">  <?php echo $stats[2]; ?> </text>
     <text dominant-baseline="middle" text-anchor="middle" x="71" y="17.5" font-size="0.4rem" style="font-family:Silapakorn-Regular; fill:#fff;">  <?php echo $stats[3]; ?> </text>
     <text dominant-baseline="middle" text-anchor="middle" x="89.5" y="7.5" font-size="0.4rem" style="font-family:Silapakorn-Regular; fill:#fff;">  <?php echo $stats[1]; ?> </text>

   </svg>

   <div class="links">
     <a target="_blank" href="https://www.facebook.com/scius.scsu">
       <svg style="position:absolute; top:494vw; left:57vw;" height="10vw" width="10vw" viewBox="0 0 5 5">
         <rect x="0" y="0" width="5" height="5" fill="black" opacity="0"/>
       </svg>
     </a>
     <a target="_blank" href="https://www.google.co.th/maps/place/13%C2%B049'08.8%22N+100%C2%B002'26.4%22E/@13.8190973,100.0401138,19z/data=!3m1!4b1!4m6!3m5!1s0x0:0x0!7e2!8m2!3d13.819096!4d100.0406607">
       <svg style="position:absolute; top:494vw; left:68vw;" height="10vw" width="10vw" viewBox="0 0 5 5">
         <rect x="0" y="0" width="5" height="5" fill="black" opacity="0"/>
       </svg>
     </a>
     <a target="_blank" href="https://www.facebook.com/SilpakornUniversityThailand">
       <svg style="position:absolute; top:558vw; left:4vw;" height="10vw" width="10vw" viewBox="0 0 5 5">
         <rect x="0" y="0" width="5" height="5" fill="black" opacity="0"/>
       </svg>
     </a>
     <a target="_blank" href="https://goo.gl/maps/1GoQFTmTrTjx1TTFA">
       <svg style="position:absolute; top:558vw; left:15vw;" height="10vw" width="10vw" viewBox="0 0 5 5">
         <rect x="0" y="0" width="5" height="5" fill="black" opacity="0"/>
       </svg>
     </a>
     <a target="_blank" href="http://www.sc.su.ac.th/">
       <svg style="position:absolute; top:548vw; left:4vw;" height="9vw" width="30vw" viewBox="0 0 10 3">
         <rect x="0" y="0" width="10" height="3" fill="black" opacity="0"/>
       </svg>
     </a>
     <a target="_blank" href="https://www.facebook.com/PricessSirindhornCollege">
       <svg style="position:absolute; top:558vw; left:54vw;" height="10vw" width="10vw" viewBox="0 0 5 5">
         <rect x="0" y="0" width="5" height="5" fill="black" opacity="0"/>
       </svg>
     </a>
     <a target="_blank" href="http://www.psc.ac.th/">
       <svg style="position:absolute; top:548vw; left:54vw;" height="10vw" width="30vw" viewBox="0 0 9 3">
         <rect x="0" y="0" width="9" height="3" fill="black" opacity="0"/>
       </svg>
     </a>
     <a target="_blank" href="https://goo.gl/maps/pg2d58BxVhUQKpZC9">
       <svg style="position:absolute; top:558vw; left:65vw;" height="10vw" width="10vw" viewBox="0 0 5 5">
         <rect x="0" y="0" width="5" height="5" fill="black" opacity="0"/>
       </svg>
     </a>

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
         <a href="index.php" height="15vw" width="15vw">
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

   var x = document.documentElement.clientWidth;
   var y = document.documentElement.clientHeight;
   var k = -0.85;
   var h = window.pageYOffset;

   var elem = document.getElementById('desktop_farewell_en');
   var pos = 50*y/x+k*(105*h/x - 74 + 50 *y/x);
   elem.style.top  = pos + 'vw';




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
 if (document.body.scrollTop > 1700 || document.documentElement.scrollTop > 1700) {
   document.getElementById("map").style.right = "2vw";
   document.getElementById("map").style.opacity = "1";
 }
 if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
   document.getElementById("laurel").style.top = "155.5vw";
   document.getElementById("laurel").style.opacity = "1";
 }
}
</script>
</html>
