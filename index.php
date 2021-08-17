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
 <div id="desktop_elements">

   <div id="desktop_banner" class="desktop_banner" style="position: absolute; top:0vw; opacity:1; transition:1.5s;">
     <img width="100%" src="resources/Banner.jpg" alt="">
   </div>

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
         <a href="index-en.php" height="9.4vw" width="6.25vw">
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

   <div class="desktop_content">
     <img id="desktop_farewell"style="position:fixed; top:100vw;left:0vw;" width="100%" src="img/farewell1.jpg">
     <img style="position:absolute; top:65vw;" width= "100%" src="img/sciussu home plan.svg">
     <img id="map" style="position:absolute; top:281vw; opacity:0.6; right:-20vw; transition:1s;" width= "34%" src="img/Thai map.svg">
     <a target="_blank" href="https://www.mhesi.go.th/home/"><img style="position:absolute; top:321vw; left:4vw" width= "20%"src="img/mhesi.png"></a>
     <img id="laurel" style="position:absolute; top:165.5vw;left:0vw;opacity:0.5; transition:1.5s;" width="100%" src="img/stat laurel desktop th.svg">
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
     <text style="position:absolute; font-size:5vw; top:158.5vw; left:<?php echo $stats_pos[0];?>vw; font-family:Silapakorn-Regular; color:#fff; word-break: break-word; overflow:hidden;"> <?php echo $stats[0]; ?></text>
     <text style="position:absolute; font-size:5vw; top:158.5vw; left:<?php echo $stats_pos[1];?>vw; font-family:Silapakorn-Regular; color:#fff; word-break: break-word; overflow:hidden;"> <?php echo $stats[1]; ?></text>
     <text style="position:absolute; font-size:7vw; top:155.6vw; left:<?php echo $stats_pos[2];?>vw; font-family:Silapakorn-Bold; color:#999; word-break: break-word; overflow:hidden;"> <?php echo $stats[2]; ?></text>
     <text style="position:absolute; font-size:7vw; top:155.3vw; left:<?php echo $stats_pos[2]-0.3;?>vw; font-family:Silapakorn-Bold; color:#fff; word-break: break-word; overflow:hidden;"> <?php echo $stats[2]; ?></text>
     <text style="position:absolute; font-size:5vw; top:158.5vw; left:<?php echo $stats_pos[3]?>vw; font-family:Silapakorn-Regular; color:#fff; word-break: break-word; overflow:hidden;"> <?php echo $stats[3]; ?></text>
     <text style="position:absolute; font-size:5vw; top:158.5vw; left:<?php echo $stats_pos[4]?>vw; font-family:Silapakorn-Regular; color:#fff; word-break: break-word; overflow:hidden;"> <?php echo $stats[4]; ?></text>
   </div>

   <div class="desktop_featured">
     <?php
       $select_featured = "SELECT * FROM featured WHERE id = 'posts'";
       $query_featured = mysqli_query($conn,$select_featured);
       while ($row = mysqli_fetch_array($query_featured)) {
         $featured_posts = array($row['one']+0,$row['two']+0,$row['three']+0,$row['four']+0,$row['five']+0);
      }

      $select_post = "SELECT * FROM posts WHERE post_id = $featured_posts[0]";
      $query_post = mysqli_query($conn,$select_post);
      while ($row = mysqli_fetch_array($query_post)) {
        $post_id = $row['post_id'];
        $post_title = $row['post_title'];
        $post_author = $row['post_author'];
        $post_date = $row['post_date'];
        $post_image = $row['post_image'];
        $post_content = $row['post_content'];
    }
     ?>
     <a href="post.php?post=<?php echo $featured_posts[0];?>">
       <svg style="position:absolute; top:74vw; left:2vw;" height="8.5vw" width="46vw" viewBox="0 0 46 8.5">
         <rect x="0" y="0" width="46" height="10" fill="white" opacity="1"/>
         <rect x="1" y="1" height="6.5" width="11.56" fill="#eee"/>
         <image x="1" y="1" height="6.5" width="11.56" href="<?php echo $post_image; ?>"/>
       </svg>
       <text style="position:absolute; font-size:2.5vw; top:74vw; left:15.2vw; font-family:Silapakorn-Regular; color:#40826d; width:30vw; height:3vw; word-break: break-word; overflow:hidden;"> <?php echo $post_title; ?> </text>
       <text style="position:absolute; font-size:1.2vw; top:77vw; left:15.2vw; font-family:Silapakorn-Regular; color:#40826d;"> by <?php echo $post_author;?> on <?php echo $post_date;?> </text>
       <text style="position:absolute; font-size:1.2vw; top:78.7vw; left:15.2vw; font-family:Silapakorn-Regular; color:#40826d; width:32vw; height:3vw; line-height: 1.35; word-break: break-word; overflow:auto;"> <?php echo $post_content;if (strlen($post_content)==390) {echo"...";}?> </text>
     </a>

     <?php      $select_post = "SELECT * FROM posts WHERE post_id = $featured_posts[1]";

           $query_post = mysqli_query($conn,$select_post);

           while ($row = mysqli_fetch_array($query_post)) {
             $post_id = $row['post_id'];
             $post_title = $row['post_title'];
             $post_date = $row['post_date'];
             $post_image = $row['post_image'];
         }
      ?>
      <a href="post.php?post=<?php echo $featured_posts[1]?>">
        <svg style="position:absolute; top:82.5vw; left:2vw;" height="6vw" width="22.5vw" viewBox="0 0 22.5 6">
          <rect x="0" y="0" width="22.5" height="6" fill="white" opacity="1"/>
          <rect x="1" y="1" height="4" width="7.11" fill="#eee"/>
          <image x="1" y="1" height="4" width="7.11" href="<?php echo $post_image; ?>"/>
        </svg>
        <text style="position:absolute; font-size:2vw; top:82.5vw; left:11vw; font-family:Silapakorn-Regular; color:#40826d; width:14vw; height:2.6vw; word-break: break-word; overflow:hidden;"> <?php echo $post_title; ?> </text>
        <text style="position:absolute; font-size:1.4vw; top:85.5vw; left:11vw; font-family:Silapakorn-Regular; color:#40826d;"> on <?php echo $post_date;?> </text>
      </a>
      <?php      $select_post = "SELECT * FROM posts WHERE post_id = $featured_posts[2]";

            $query_post = mysqli_query($conn,$select_post);

            while ($row = mysqli_fetch_array($query_post)) {
              $post_id = $row['post_id'];
              $post_title = $row['post_title'];
              $post_date = $row['post_date'];
              $post_image = $row['post_image'];
          }
           ?>
       <a href="post.php?post=<?php echo $featured_posts[2]?>">
         <svg style="position:absolute; top:82.5vw; left:24.5vw;" height="6vw" width="22.5vw" viewBox="0 0 22.5 6">
           <rect x="0" y="0" width="22.5" height="6" fill="white" opacity="1"/>
           <rect x="1" y="1" height="4" width="7.11" fill="#eee"/>
           <image x="1" y="1" height="4" width="7.11" href="<?php echo $post_image; ?>"/>
         </svg>
         <text style="position:absolute; font-size:2vw; top:82.5vw; left:33.5vw; font-family:Silapakorn-Regular; color:#40826d; width:14vw; height:2.6vw; word-break: break-word; overflow:hidden;"> <?php echo $post_title; ?> </text>
         <text style="position:absolute; font-size:1.4vw; top:85.5vw; left:33.5vw; font-family:Silapakorn-Regular; color:#40826d;"> on <?php echo $post_date;?> </text>
       </a>
       <?php $select_post = "SELECT * FROM posts WHERE post_id = $featured_posts[3]";

             $query_post = mysqli_query($conn,$select_post);

             while ($row = mysqli_fetch_array($query_post)) {
               $post_id = $row['post_id'];
               $post_title = $row['post_title'];
               $post_date = $row['post_date'];
               $post_image = $row['post_image'];
           }
            ?>
        <a href="post.php?post=<?php echo $featured_posts[3]?>">
          <svg style="position:absolute; top:88.5vw; left:2vw;" height="6vw" width="22.5vw" viewBox="0 0 22.5 6">
            <rect x="0" y="0" width="22.5" height="6" fill="white" opacity="1"/>
            <rect x="1" y="1" height="4" width="7.11" fill="#eee"/>
            <image x="1" y="1" height="4" width="7.11" href="<?php echo $post_image; ?>"/>
          </svg>
          <text style="position:absolute; font-size:2vw; top:88.5vw; left:11vw; font-family:Silapakorn-Regular; color:#40826d; width:14vw; height:2.6vw; word-break: break-word; overflow:hidden;"> <?php echo $post_title; ?> </text>
          <text style="position:absolute; font-size:1.4vw; top:91.5vw; left:11vw; font-family:Silapakorn-Regular; color:#40826d;"> on <?php echo $post_date;?> </text>
        </a>
        <?php $select_post = "SELECT * FROM posts WHERE post_id = $featured_posts[4]";

              $query_post = mysqli_query($conn,$select_post);

              while ($row = mysqli_fetch_array($query_post)) {
                $post_id = $row['post_id'];
                $post_title = $row['post_title'];
                $post_date = $row['post_date'];
                $post_image = $row['post_image'];
            }
             ?>
         <a href="post.php?post=<?php echo $featured_posts[4]?>">
           <svg style="position:absolute; top:88.5vw; left:24.5vw;" height="6vw" width="22.5vw" viewBox="0 0 22.5 6">
             <rect x="0" y="0" width="22.5" height="6" fill="white" opacity="1"/>
             <rect x="1" y="1" height="4" width="7.11" fill="#eee"/>
             <image x="1" y="1" height="4" width="7.11" href="<?php echo $post_image; ?>"/>
           </svg>
           <text style="position:absolute; font-size:2vw; top:88.5vw; left:33.5vw; font-family:Silapakorn-Regular; color:#40826d; width:14vw; height:2.6vw; word-break: break-word; overflow:auto;"> <?php echo $post_title; ?> </text>
           <text style="position:absolute; font-size:1.4vw; top:91.5vw; left:33.5vw; font-family:Silapakorn-Regular; color:#40826d;"> on <?php echo $post_date;?> </text>
         </a>

        <?php

        $select_featured = "SELECT * FROM featured WHERE id = 'activities'";
        $query_featured = mysqli_query($conn,$select_featured);
        while ($row = mysqli_fetch_array($query_featured)) {
          $featured_activities = array($row['one']+0,$row['two']+0,$row['three']+0,$row['four']+0,$row['five']+0);
       }

         $select_acti = "SELECT * FROM activities WHERE acti_id = $featured_activities[0]";
         $query_acti = mysqli_query($conn,$select_acti);
         while ($row = mysqli_fetch_array($query_acti)) {
           $acti_id = $row['acti_id'];
           $acti_title = $row['acti_title'];
           $acti_author = $row['acti_author'];
           $acti_date = $row['acti_date'];
           $acti_image = $row['acti_image'];
           $acti_content = $row['acti_content'];
       }
        ?>
        <a href="activities.php?acti=<?php echo $featured_activities[0];?>">
          <svg style="position:absolute; top:74vw; left:52vw;" height="8.5vw" width="46vw" viewBox="0 0 46 8.5">
            <rect x="0" y="0" width="46" height="10" fill="white" opacity="1"/>
            <rect x="1" y="1" height="6.5" width="11.56" fill="#eee"/>
            <image x="1" y="1" height="6.5" width="11.56" href="<?php echo $acti_image; ?>"/>
          </svg>
          <text style="position:absolute; font-size:2.5vw; top:74vw; left:65.2vw; font-family:Silapakorn-Regular; color:#40826d; width:30vw; height:3vw; word-break: break-word; overflow:hidden;"> <?php echo $acti_title; ?> </text>
          <text style="position:absolute; font-size:1.2vw; top:77vw; left:65.2vw; font-family:Silapakorn-Regular; color:#40826d;"> by <?php echo $acti_author;?> on <?php echo $acti_date;?> </text>
          <text style="position:absolute; font-size:1.2vw; top:78.7vw; left:65.2vw; font-family:Silapakorn-Regular; color:#40826d; width:32vw; height:3vw; line-height: 1.35; word-break: break-word; overflow:auto;"> <?php echo $acti_content;if (strlen($acti_content)==390) {echo"...";}?> </text>
        </a>

        <?php $select_acti = "SELECT * FROM activities WHERE acti_id = $featured_activities[1]";
        $query_acti = mysqli_query($conn,$select_acti);
        while ($row = mysqli_fetch_array($query_acti)) {
          $acti_id = $row['acti_id'];
          $acti_title = $row['acti_title'];
          $acti_date = $row['acti_date'];
          $acti_image = $row['acti_image'];
            }
         ?>
         <a href="activities.php?acti=<?php echo $featured_activities[1]?>">
           <svg style="position:absolute; top:82.5vw; left:52vw;" height="6vw" width="22.5vw" viewBox="0 0 22.5 6">
             <rect x="0" y="0" width="22.5" height="6" fill="white" opacity="1"/>
             <rect x="1" y="1" height="4" width="7.11" fill="#eee"/>
             <image x="1" y="1" height="4" width="7.11" href="<?php echo $acti_image; ?>"/>
           </svg>
           <text style="position:absolute; font-size:2vw; top:82.5vw; left:61vw; font-family:Silapakorn-Regular; color:#40826d; width:14vw; height:2.6vw; word-break: break-word; overflow:hidden;"><?php echo $acti_title; ?> </text>
           <text style="position:absolute; font-size:1.4vw; top:85.5vw; left:61vw; font-family:Silapakorn-Regular; color:#40826d;"> on <?php echo $acti_date;?> </text>
         </a>

         <?php $select_acti = "SELECT * FROM activities WHERE acti_id = $featured_activities[2]";
         $query_acti = mysqli_query($conn,$select_acti);
         while ($row = mysqli_fetch_array($query_acti)) {
           $acti_id = $row['acti_id'];
           $acti_title = $row['acti_title'];
           $acti_date = $row['acti_date'];
           $acti_image = $row['acti_image'];
             }
          ?>
          <a href="activities.php?acti=<?php echo $featured_activities[2]?>">
            <svg style="position:absolute; top:82.5vw; left:74.5vw;" height="6vw" width="22.5vw" viewBox="0 0 22.5 6">
              <rect x="0" y="0" width="22.5" height="6" fill="white" opacity="1"/>
              <rect x="1" y="1" height="4" width="7.11" fill="#eee"/>
              <image x="1" y="1" height="4" width="7.11" href="<?php echo $acti_image; ?>"/>
            </svg>
            <text style="position:absolute; font-size:2vw; top:82.5vw; left:83.5vw; font-family:Silapakorn-Regular; color:#40826d; width:14vw; height:2.6vw; word-break: break-word; overflow:hidden;"> <?php echo $acti_title; ?> </text>
            <text style="position:absolute; font-size:1.4vw; top:85.5vw; left:83.5vw; font-family:Silapakorn-Regular; color:#40826d;"> on <?php echo $acti_date;?> </text>
          </a>

          <?php $select_acti = "SELECT * FROM activities WHERE acti_id = $featured_activities[3]";
          $query_acti = mysqli_query($conn,$select_acti);
          while ($row = mysqli_fetch_array($query_acti)) {
            $acti_id = $row['acti_id'];
            $acti_title = $row['acti_title'];
            $acti_date = $row['acti_date'];
            $acti_image = $row['acti_image'];
              }
           ?>
           <a href="activities.php?acti=<?php echo $featured_activities[3]?>">
             <svg style="position:absolute; top:88.5vw; left:52vw;" height="6vw" width="22.5vw" viewBox="0 0 22.5 6">
               <rect x="0" y="0" width="22.5" height="6" fill="white" opacity="1"/>
               <rect x="1" y="1" height="4" width="7.11" fill="#eee"/>
               <image x="1" y="1" height="4" width="7.11" href="<?php echo $acti_image; ?>"/>
             </svg>
             <text style="position:absolute; font-size:2vw; top:88.5vw; left:61vw; font-family:Silapakorn-Regular; color:#40826d; width:14vw; height:2.6vw; word-break: break-word; overflow:hidden;"><?php echo $acti_title; ?> </text>
             <text style="position:absolute; font-size:1.4vw; top:91.5vw; left:61vw; font-family:Silapakorn-Regular; color:#40826d;"> on <?php echo $acti_date;?> </text>
           </a>

           <?php $select_acti = "SELECT * FROM activities WHERE acti_id = $featured_activities[4]";
           $query_acti = mysqli_query($conn,$select_acti);
           while ($row = mysqli_fetch_array($query_acti)) {
             $acti_id = $row['acti_id'];
             $acti_title = $row['acti_title'];
             $acti_date = $row['acti_date'];
             $acti_image = $row['acti_image'];
               }
            ?>
            <a href="activities.php?acti=<?php echo $featured_activities[4]?>">
              <svg style="position:absolute; top:88.5vw; left:74.5vw;" height="6vw" width="22.5vw" viewBox="0 0 22.5 6">
                <rect x="0" y="0" width="22.5" height="6" fill="white" opacity="1"/>
                <rect x="1" y="1" height="4" width="7.11" fill="#eee"/>
                <image x="1" y="1" height="4" width="7.11" href="<?php echo $acti_image; ?>"/>
              </svg>
              <text style="position:absolute; font-size:2vw; top:88.5vw; left:83.5vw; font-family:Silapakorn-Regular; color:#40826d; width:14vw; height:2.6vw; word-break: break-word; overflow:hidden;"> <?php echo $acti_title; ?> </text>
              <text style="position:absolute; font-size:1.4vw; top:91.5vw; left:83.5vw; font-family:Silapakorn-Regular; color:#40826d;"> on <?php echo $acti_date;?> </text>
            </a>

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
        <svg style="position:absolute; top:106vw; left:<?php echo $i*20-10?>vw;" width="20vw" viewBox="0 0 20 16">
          <rect x="0" y="0" width="20" height="16" fill="#fff" opacity="1"/>
          <image x="0" y="0" width="20" height="12" href="<?php echo $about[1]?>" />
        </svg>
        <text style="color:#40826d; font-family:Silapakorn-Regular; font-size:2vw; position:absolute; top:118vw; left:<?php echo $i*20-10?>vw;"> <?php echo $about[0];?> </text>
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
        $facname[$i] = $row['fac_name_th'];
        $facpos[$i] = $row['fac_pos_th'];
        $facimg[$i] = $row['fac_image'];
      }
    }
     ?>


     <svg style="position:absolute; top:202vw; left:20vw;" height="15vw" width="10vw" viewBox="0 0 10 15">
       <image x="0" y="0" height="15" width="10" href="<?php echo $facimg[0]; ?>"/>
     </svg>
     <div class="center" style="background-color: #40826d; position:absolute; top:218vw; left:15vw;">
     </div>
     <div class="center2" style="position:absolute; top:218.5vw; left:15vw;">
        <a style="text-align:center; font-size:1.4vw; font-family:Silapakorn-Bold; color:white;"> <?php echo $facname[0];?> </a>
    </div>
    <div class="center2" style="position:absolute; top:220.5vw; left:15vw;">
       <a style="text-align:center; font-size:1.4vw; font-family:Silapakorn-Bold; color:white;"> <?php echo $facpos[0];?> </a>
   </div>
     <svg style="position:absolute; top:202vw; left:70vw;" height="15vw" width="10vw" viewBox="0 0 10 15">
       <image x="0" y="0" height="15" width="10" href="<?php echo $facimg[4]; ?>"/>
     </svg>
     <div class="center" style="background-color: #3d0bb7; position:absolute; top:218vw; left:65vw;">
     </div>
     <div class="center2" style="position:absolute; top:218.5vw; left:65vw;">
        <a style="text-align:center; font-size:1.4vw; font-family:Silapakorn-Bold; color:white;"> <?php echo $facname[4];?> </a>
    </div>
    <div class="center2" style="position:absolute; top:220.5vw; left:65vw;">
       <a style="text-align:center; font-size:1.4vw; font-family:Silapakorn-Bold; color:white;"> <?php echo $facpos[4];?> </a>
   </div>

   <div style="width:44.2vw; height: 5vw; background-color: #40826d; position:absolute; top:239.2vw; left:2.8vw;">
   </div>
   <div style="width:44.2vw; height: 5vw; background-color: #3d0bb7; position:absolute; top:239.2vw; left:52.8vw;">
   </div>
     <?php
     for($i=0;$i<3;$i++){
       ?>
     <svg style="position:absolute; top:225vw; left:<?php echo 6 + $i*14.5;?>vw;" height="13.5vw" width="9vw" viewBox="0 0 10 15">
       <image x="0" y="0" height="15" width="10" href="<?php echo $facimg[1+$i];?>"/>
     </svg>
     <div style="width: 20vw; height: 2vw; text-align: center; position:absolute; top:240vw; left:<?php echo 0.5+$i*14.5;?>vw;">
        <a style="text-align:center; font-size:1.2vw; font-family:Silapakorn-Bold; color:white;"> <?php echo $facname[1+$i];?> </a>
     </div>
     <div style=" width: 20vw; height: 2vw; text-align: center; position:absolute; top:242vw; left:<?php echo 0.5+$i*14.5;?>vw;">
       <a style="text-align:center; font-size:1vw; font-family:Silapakorn-Bold; color:white;"> <?php echo $facpos[1+$i];?> </a>
     </div>
     <?php

     }
     for($i=0;$i<3;$i++){
       ?>
     <svg style="position:absolute; top:225vw; left:<?php echo 56 + $i*14.5;?>vw;" height="13.5vw" width="9vw" viewBox="0 0 10 15">
       <image x="0" y="0" height="15" width="10" href="<?php echo $facimg[5+$i];?>"/>
     </svg>
     <div style="width: 20vw; height: 2vw; text-align: center; position:absolute; top:240vw; left:<?php echo 50.5+$i*14.5;?>vw;">
        <a style="text-align:center; font-size:1.2vw; font-family:Silapakorn-Bold; color:white;"> <?php echo $facname[5+$i];?> </a>
     </div>
     <div style=" width: 20vw; height: 2vw; text-align: center; position:absolute; top:242vw; left:<?php echo 50.5+$i*14.5;?>vw;">
       <a style="text-align:center; font-size:1vw; font-family:Silapakorn-Bold; color:white;"> <?php echo $facpos[5+$i];?> </a>
     </div>
     <?php
     }
     ?>
     <div style="width: 72vw; height: 5vw; background-color: #666; position:absolute; top:269vw; left:14.3vw;">
     </div>
     <?php
     for($i=0;$i<4;$i++){
       ?>
     <svg style="position:absolute; top:253vw; left:<?php echo 19.3 + $i*17;?>vw;" height="15vw" width="10vw" viewBox="0 0 10 15">
       <image x="0" y="0" height="15" width="10" href="<?php echo $facimg[8+$i];?>"/>
     </svg>

     <div style="width: 20vw; height: 2vw; text-align: center; position:absolute; top:269.5vw; left:<?php echo 14.3 + $i*17;?>vw;">
        <a style="text-align:center; font-size:1.4vw; font-family:Silapakorn-Bold; color:white;"> <?php echo $facname[8+$i];?> </a>
     </div>
     <div style=" width: 20vw; height: 2vw; text-align: center; position:absolute; top:271.5vw; left:<?php echo 14.3 + $i*17;?>vw;">
       <a style="text-align:center; font-size:1.4vw; font-family:Silapakorn-Bold; color:white;"> <?php echo $facpos[8+$i];?> </a>
     </div>
     <?php
    }
    ?>
   </div>
   <div class="links">
     <a href="news.php">
       <svg style="position:absolute; top:67vw; left:39vw;" height="5vw" width="10vw" viewBox="0 0 10 5">
         <rect x="0" y="0" width="10" height="5" fill="black" opacity="0.0"/>
       </svg>
     </a>
     <a href="acti.php">
       <svg style="position:absolute; top:67vw; left:89vw;" height="5vw" width="10vw" viewBox="0 0 10 5">
         <rect x="0" y="0" width="10" height="5" fill="black" opacity="0.0"/>
       </svg>
     </a>
     <a href="pers.php">
       <svg style="position:absolute; top:166vw; left:89vw;" height="5vw" width="10vw" viewBox="0 0 10 5">
         <rect x="0" y="0" width="10" height="5" fill="black" opacity="0.0"/>
       </svg>
     </a>
     <a href="pers.php">
       <svg style="position:absolute; top:272vw; left:89vw;" height="5vw" width="10vw" viewBox="0 0 10 5">
         <rect x="0" y="0" width="10" height="5" fill="black" opacity="0.0"/>
       </svg>
     </a>
     <a target="_blank" href="http://scius.most.go.th/project/match/view_data">
       <svg style="position:absolute; top:279vw; left:89vw;" height="5vw" width="10vw" viewBox="0 0 10 5">
         <rect x="0" y="0" width="10" height="5" fill="black" opacity="0.0"/>
       </svg>
     </a>
     <a target="_blank" href="http://scius.most.go.th/set/content/view_data/2">
       <svg style="position:absolute; top:323.5vw; left:49vw;" height="5vw" width="10vw" viewBox="0 0 10 5">
         <rect x="0" y="0" width="10" height="5" fill="black" opacity="0.0"/>
       </svg>
     </a>
     <a href="cont.php">
       <svg style="position:absolute; top:334vw; left:34vw;" height="5vw" width="10vw" viewBox="0 0 10 5">
         <rect x="0" y="0" width="10" height="5" fill="black" opacity="0.0"/>
       </svg>
     </a>
     <a target="_blank" href="https://www.facebook.com/scius.scsu">
       <svg style="position:absolute; top:363vw; left:30vw;" height="5vw" width="5vw" viewBox="0 0 5 5">
         <rect x="0" y="0" width="5" height="5" fill="black" opacity="0.0"/>
       </svg>
     </a>
     <a target="_blank" href="https://www.google.co.th/maps/place/13%C2%B049'08.8%22N+100%C2%B002'26.4%22E/@13.8190973,100.0401138,19z/data=!3m1!4b1!4m6!3m5!1s0x0:0x0!7e2!8m2!3d13.819096!4d100.0406607">
       <svg style="position:absolute; top:363vw; left:36vw;" height="5vw" width="5vw" viewBox="0 0 5 5">
         <rect x="0" y="0" width="5" height="5" fill="black" opacity="0.0"/>
       </svg>
     </a>
     <a target="_blank" href="https://www.facebook.com/SilpakornUniversityThailand">
       <svg style="position:absolute; top:364vw; left:51vw;" height="5vw" width="5vw" viewBox="0 0 5 5">
         <rect x="0" y="0" width="5" height="5" fill="black" opacity="0.0"/>
       </svg>
     </a>
     <a target="_blank" href="https://goo.gl/maps/1GoQFTmTrTjx1TTFA">
       <svg style="position:absolute; top:364vw; left:57vw;" height="5vw" width="5vw" viewBox="0 0 5 5">
         <rect x="0" y="0" width="5" height="5" fill="black" opacity="0.0"/>
       </svg>
     </a>
     <a target="_blank" href="http://www.sc.su.ac.th/">
       <svg style="position:absolute; top:359vw; left:52vw;" height="3vw" width="10vw" viewBox="0 0 10 3">
         <rect x="0" y="0" width="10" height="3" fill="black" opacity="0.0"/>
       </svg>
     </a>
     <a target="_blank" href="https://www.facebook.com/PricessSirindhornCollege">
       <svg style="position:absolute; top:364vw; left:76vw;" height="5vw" width="5vw" viewBox="0 0 5 5">
         <rect x="0" y="0" width="5" height="5" fill="black" opacity="0.0"/>
       </svg>
     </a>
     <a target="_blank" href="http://www.psc.ac.th/">
       <svg style="position:absolute; top:359vw; left:77vw;" height="3vw" width="9vw" viewBox="0 0 9 3">
         <rect x="0" y="0" width="9" height="3" fill="black" opacity="0.0"/>
       </svg>
     </a>
     <a target="_blank" href="https://goo.gl/maps/pg2d58BxVhUQKpZC9">
       <svg style="position:absolute; top:364vw; left:82vw;" height="5vw" width="5vw" viewBox="0 0 5 5">
         <rect x="0" y="0" width="5" height="5" fill="black" opacity="0.0"/>
       </svg>
     </a>

   </div>

   <div class="footer" style="position:absolute; top:372vw;">
     <a href="admin/login.php" style="color:white;">Login as administrator</a>
   </div>

  </div>
 <div id="mobile_elements">

   <div class="mobile_banner">
     <img style="position:absolute; top:5vw;" width="100%" src="resources/Banner.jpg" alt="">
   </div>

   <div class="crop">
     <img id="mobile_farewell" style="position:absolute; top:215vw; left:0vw;" width="100%" src="img/farewell1.jpg">
     <img style="position:absolute; top:70vw;" width= "100%"src="img/sciussu home mobile.svg">
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



   <div class="mobile_featured">
     <?php
       $select_featured = "SELECT * FROM featured WHERE id = 'posts'";
       $query_featured = mysqli_query($conn,$select_featured);
       while ($row = mysqli_fetch_array($query_featured)) {
         $featured_posts = array($row['one']+0,$row['two']+0,$row['three']+0,$row['four']+0,$row['five']+0);
      }

      $select_post = "SELECT * FROM posts WHERE post_id = $featured_posts[0]";
      $query_post = mysqli_query($conn,$select_post);
      while ($row = mysqli_fetch_array($query_post)) {
        $post_id = $row['post_id'];
        $post_title = $row['post_title'];
        $post_author = $row['post_author'];
        $post_date = $row['post_date'];
        $post_image = $row['post_image'];
        $post_content = $row['post_content'];
    }
     ?>
     <a href="post.php?post=<?php echo $featured_posts[0];?>">
       <svg style="position:absolute; top:82vw; left:2vw;" width="100vw" viewBox="0 0 46 8.5">
         <rect x="0" y="0" width="46" height="10" fill="white" opacity="1"/>
         <rect x="1" y="1" height="6.5" width="11.56" fill="#eee"/>
         <image x="1" y="1" height="6.5" width="11.56" href="<?php echo $post_image; ?>"/>
       </svg>
       <text style="position:absolute; font-size:4vw; top:84vw; left:32vw; font-family:Silapakorn-Regular; color:#40826d; width:65vw; height:5vw; word-break: break-word; overflow:hidden;"> <?php echo $post_title; ?> </text>
       <text style="position:absolute; font-size:2vw; top:89vw; left:32vw; font-family:Silapakorn-Regular; color:#40826d;"> by <?php echo $post_author;?> on <?php echo $post_date;?> </text>
       <text style="position:absolute; font-size:3vw; top:93vw; left:32vw; font-family:Silapakorn-Regular; color:#40826d; width:65vw; height:4vw; line-height: 1.35; word-break: break-word; overflow:auto;"> <?php echo $post_content;if (strlen($post_content)==390) {echo"...";}?> </text>
     </a>

     <?php      $select_post = "SELECT * FROM posts WHERE post_id = $featured_posts[1]";

           $query_post = mysqli_query($conn,$select_post);

           while ($row = mysqli_fetch_array($query_post)) {
             $post_id = $row['post_id'];
             $post_title = $row['post_title'];
             $post_date = $row['post_date'];
             $post_image = $row['post_image'];
         }
      ?>
      <a href="post.php?post=<?php echo $featured_posts[1]?>">
        <svg style="position:absolute; top:100vw; left:2vw;" width="50vw" viewBox="0 0 22.5 6">
          <rect x="0" y="0" width="22.5" height="6" fill="white" opacity="1"/>
          <rect x="1" y="1" height="4" width="7.11" fill="#eee"/>
          <image x="1" y="1" height="4" width="7.11" href="<?php echo $post_image; ?>"/>
        </svg>
        <text style="position:absolute; font-size:3vw; top:102vw; left:21vw; font-family:Silapakorn-Regular; color:#40826d; width:30vw; height:3.5vw; word-break: break-word; overflow:hidden;"> <?php echo $post_title; ?> </text>
        <text style="position:absolute; font-size:2vw; top:106vw; left:21vw; font-family:Silapakorn-Regular; color:#40826d;"> on <?php echo $post_date;?> </text>
      </a>
      <?php      $select_post = "SELECT * FROM posts WHERE post_id = $featured_posts[2]";

            $query_post = mysqli_query($conn,$select_post);

            while ($row = mysqli_fetch_array($query_post)) {
              $post_id = $row['post_id'];
              $post_title = $row['post_title'];
              $post_date = $row['post_date'];
              $post_image = $row['post_image'];
          }
           ?>
           <a href="post.php?post=<?php echo $featured_posts[2]?>">
             <svg style="position:absolute; top:100vw; left:48vw;" width="50vw" viewBox="0 0 22.5 6">
               <rect x="0" y="0" width="22.5" height="6" fill="white" opacity="1"/>
               <rect x="1" y="1" height="4" width="7.11" fill="#eee"/>
               <image x="1" y="1" height="4" width="7.11" href="<?php echo $post_image; ?>"/>
             </svg>
             <text style="position:absolute; font-size:3vw; top:102vw; left:67vw; font-family:Silapakorn-Regular; color:#40826d; width:30vw; height:3.5vw; word-break: break-word; overflow:hidden;"> <?php echo $post_title; ?> </text>
             <text style="position:absolute; font-size:2vw; top:106vw; left:67vw; font-family:Silapakorn-Regular; color:#40826d;"> on <?php echo $post_date;?> </text>
           </a>
           <?php

           $select_featured = "SELECT * FROM featured WHERE id = 'activities'";
           $query_featured = mysqli_query($conn,$select_featured);
           while ($row = mysqli_fetch_array($query_featured)) {
             $featured_activities = array($row['one']+0,$row['two']+0,$row['three']+0,$row['four']+0,$row['five']+0);
          }

            $select_acti = "SELECT * FROM activities WHERE acti_id = $featured_activities[0]";
            $query_acti = mysqli_query($conn,$select_acti);
            while ($row = mysqli_fetch_array($query_acti)) {
              $acti_id = $row['acti_id'];
              $acti_title = $row['acti_title'];
              $acti_author = $row['acti_author'];
              $acti_date = $row['acti_date'];
              $acti_image = $row['acti_image'];
              $acti_content = $row['acti_content'];
          }
           ?>
           <a href="activities.php?acti=<?php echo $featured_activities[0];?>">
             <svg style="position:absolute; top:131vw; left:2vw;"  width="100vw" viewBox="0 0 46 8.5">
               <rect x="0" y="0" width="46" height="10" fill="white" opacity="1"/>
               <rect x="1" y="1" height="6.5" width="11.56" fill="#eee"/>
               <image x="1" y="1" height="6.5" width="11.56" href="<?php echo $acti_image; ?>"/>
             </svg>
             <text style="position:absolute; font-size:4vw; top:133vw; left:32vw; font-family:Silapakorn-Regular; color:#40826d; width:30vw; height:5vw; word-break: break-word; overflow:hidden;"> <?php echo $acti_title; ?> </text>
             <text style="position:absolute; font-size:2vw; top:138vw; left:32vw; font-family:Silapakorn-Regular; color:#40826d;"> by <?php echo $acti_author;?> on <?php echo $acti_date;?> </text>
             <text style="position:absolute; font-size:3vw; top:142vw; left:32vw; font-family:Silapakorn-Regular; color:#40826d; width:32vw; height:3vw; line-height: 1.35; word-break: break-word; overflow:auto;"> <?php echo $acti_content;if (strlen($acti_content)==390) {echo"...";}?> </text>
           </a>

           <?php $select_acti = "SELECT * FROM activities WHERE acti_id = $featured_activities[1]";
           $query_acti = mysqli_query($conn,$select_acti);
           while ($row = mysqli_fetch_array($query_acti)) {
             $acti_id = $row['acti_id'];
             $acti_title = $row['acti_title'];
             $acti_date = $row['acti_date'];
             $acti_image = $row['acti_image'];
               }
            ?>
            <a href="activities.php?acti=<?php echo $featured_activities[1]?>">
              <svg style="position:absolute; top:149vw; left:2vw;" width="50vw" viewBox="0 0 22.5 6">
                <rect x="0" y="0" width="22.5" height="6" fill="white" opacity="1"/>
                <rect x="1" y="1" height="4" width="7.11" fill="#eee"/>
                <image x="1" y="1" height="4" width="7.11" href="<?php echo $acti_image; ?>"/>
              </svg>
              <text style="position:absolute; font-size:3vw; top:151vw; left:21vw; font-family:Silapakorn-Regular; color:#40826d; width:30vw; height:3.6vw; word-break: break-word; overflow:hidden;"><?php echo $acti_title; ?> </text>
              <text style="position:absolute; font-size:2vw; top:155vw; left:21vw; font-family:Silapakorn-Regular; color:#40826d;"> on <?php echo $acti_date;?> </text>
            </a>

            <?php $select_acti = "SELECT * FROM activities WHERE acti_id = $featured_activities[2]";
            $query_acti = mysqli_query($conn,$select_acti);
            while ($row = mysqli_fetch_array($query_acti)) {
              $acti_id = $row['acti_id'];
              $acti_title = $row['acti_title'];
              $acti_date = $row['acti_date'];
              $acti_image = $row['acti_image'];
                }
             ?>
             <a href="activities.php?acti=<?php echo $featured_activities[2]?>">
               <svg style="position:absolute; top:149vw; left:48vw;" width="50vw" viewBox="0 0 22.5 6">
                 <rect x="0" y="0" width="22.5" height="6" fill="white" opacity="1"/>
                 <rect x="1" y="1" height="4" width="7.11" fill="#eee"/>
                 <image x="1" y="1" height="4" width="7.11" href="<?php echo $acti_image; ?>"/>
               </svg>
               <text style="position:absolute; font-size:3vw; top:151vw; left:67vw; font-family:Silapakorn-Regular; color:#40826d; width:30vw; height:3.6vw; word-break: break-word; overflow:hidden;"> <?php echo $acti_title; ?> </text>
               <text style="position:absolute; font-size:2vw; top:155vw; left:67vw; font-family:Silapakorn-Regular; color:#40826d;"> on <?php echo $acti_date;?> </text>
             </a>


   </div>
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
        <svg style="position:absolute; top:<?php echo 185+floor(($i-1)/2)*20;?>vw; left:<?php echo (($i)%2)*35+14?>vw;" width="35vw" viewBox="0 0 35 20">
          <image x="0" y="0" width="35" height="20" href="<?php echo $about[1]?>" />
          <rect x="0" y="13" width="35" height="7" fill="#000" opacity="0.6"/>
        </svg>
        <text style="color:#fff; font-family:Silapakorn-Regular; font-size:3.4vw; position:absolute; top:<?php echo 199.5+floor(($i-1)/2)*20;?>vw; left:<?php echo (($i)%2)*35+15?>vw;"> <?php echo $about[0];?> </text>
      </a>
     <?php } ?>
   </div>

   <svg style="position:absolute; top:278vw; width:100vw;" viewBoX="0 0 100 30">
     <text dominant-baseline="middle" text-anchor="middle" x="12" y="6.5" font-size="0.4rem" style="font-family:Silapakorn-Regular; fill:#fff;">  <?php echo $stats[0]; ?> </text>
     <text dominant-baseline="middle" text-anchor="middle" x="30.5" y="16.5" font-size="0.4rem" style="font-family:Silapakorn-Regular; fill:#fff;">  <?php echo $stats[3]; ?> </text>
     <text dominant-baseline="middle" text-anchor="middle" x="51" y="5.5" font-size="0.5rem" style="font-family:Silapakorn-Bold; fill:#aaa;">  <?php echo $stats[2]; ?> </text>
     <text dominant-baseline="middle" text-anchor="middle" x="50.5" y="5" font-size="0.5rem" style="font-family:Silapakorn-Bold; fill:#fff;">  <?php echo $stats[2]; ?> </text>
     <text dominant-baseline="middle" text-anchor="middle" x="70.5" y="16.5" font-size="0.4rem" style="font-family:Silapakorn-Regular; fill:#fff;">  <?php echo $stats[4]; ?> </text>
     <text dominant-baseline="middle" text-anchor="middle" x="89.5" y="6.5" font-size="0.4rem" style="font-family:Silapakorn-Regular; fill:#fff;">  <?php echo $stats[1]; ?> </text>

   </svg>

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
        $facname[$i] = $row['fac_name_th'];
        $facpos[$i] = $row['fac_pos_th'];
        $facimg[$i] = $row['fac_image'];
      }
    }
     ?>


     <svg style="position:absolute; top:338vw; left:15vw;" height="30vw" width="20vw" viewBox="0 0 10 15">
       <image x="0" y="0" height="15" width="10" href="<?php echo $facimg[0]; ?>"/>
     </svg>
     <div style="width: 40vw; height: 10vw; text-align: center; background-color: #40826d; position:absolute; top:368vw; left:5vw;">
     </div>
     <div style="width: 40vw; height: 5vw; text-align: center; position:absolute; top:369vw; left:5vw;">
        <a style="text-align:center; font-size:2.5vw; font-family:Silapakorn-Bold; color:white;"> <?php echo $facname[0];?> </a>
    </div>
    <div style="width: 40vw; height: 5vw; text-align: center; position:absolute; top:373vw; left:5vw;">
       <a style="text-align:center; font-size:2.5vw; font-family:Silapakorn-Bold; color:white;"> <?php echo $facpos[0];?> </a>
   </div>
     <svg style="position:absolute; top:338vw; left:65vw;" height="30vw" width="20vw" viewBox="0 0 10 15">
       <image x="0" y="0" height="15" width="10" href="<?php echo $facimg[4]; ?>"/>
     </svg>
     <div style="width: 40vw; height: 10vw; text-align: center; background-color: #3d0bb7; position:absolute; top:368vw; left:55vw;">
     </div>
     <div style="width: 40vw; height: 5vw; text-align: center; position:absolute; top:369vw; left:55vw;">
        <a style="text-align:center; font-size:2.5vw; font-family:Silapakorn-Bold; color:white;"> <?php echo $facname[4];?> </a>
    </div>
    <div style="width: 40vw; height: 5vw; text-align: center; position:absolute; top:373vw; left:55vw;">
       <a style="text-align:center; font-size:2.5vw; font-family:Silapakorn-Bold; color:white;"> <?php echo $facpos[4];?> </a>
   </div>
     <div style="width: 90vw; height: 8vw; background-color: #666; position:absolute; top:411vw; left:5vw;">
     </div>
     <?php
     for($i=0;$i<4;$i++){
       ?>
     <svg style="position:absolute; top:390vw; left:<?php echo 10 + $i*22;?>vw;" height="21vw" width="14vw" viewBox="0 0 10 15">
       <image x="0" y="0" height="15" width="10" href="<?php echo $facimg[8+$i];?>"/>
     </svg>

     <div style="width: 22.5vw; height: 2vw; text-align: center; position:absolute; top:411.5vw; left:<?php echo 5 + $i*22.5;?>vw;">
        <a style="text-align:center; font-size:1.8vw; font-family:Silapakorn-Bold; color:white;"> <?php echo $facname[8+$i];?> </a>
     </div>
     <div style=" width: 22.5vw; height: 2vw; text-align: center; position:absolute; top:414vw; left:<?php echo 5 + $i*22.5;?>vw;">
       <a style="text-align:center; font-size:1.8vw; font-family:Silapakorn-Bold; color:white;"> <?php echo $facpos[8+$i];?> </a>
     </div>
     <?php
    }
    ?>


   </div>


   <div class="links">
     <a href="news.php">
       <svg style="position:absolute; top:71vw; left:76vw;" height="10vw" width="20vw" viewBox="0 0 10 5">
         <rect x="0" y="0" width="10" height="5" fill="black" opacity="0"/>
       </svg>
     </a>
     <a href="acti.php">
       <svg style="position:absolute; top:121vw; left:76vw;" height="10vw" width="20vw" viewBox="0 0 10 5">
         <rect x="0" y="0" width="10" height="5" fill="black" opacity="0"/>
       </svg>
     </a>
     <a href="pers.php">
       <svg style="position:absolute; top:295vw; left:80vw;" height="10vw" width="20vw" viewBox="0 0 10 5">
         <rect x="0" y="0" width="10" height="5" fill="black" opacity="0"/>
       </svg>
     </a>
     <a href="pers.php">
       <svg style="position:absolute; top:420vw; left:80vw;" height="10vw" width="20vw" viewBox="0 0 10 5">
         <rect x="0" y="0" width="10" height="5" fill="black" opacity="0"/>
       </svg>
     </a>
     <a target="_blank" href="http://scius.most.go.th/project/match/view_data">
       <svg style="position:absolute; top:445vw; left:80vw;" height="10vw" width="20vw" viewBox="0 0 10 5">
         <rect x="0" y="0" width="10" height="5" fill="black" opacity="0"/>
       </svg>
     </a>
     <a href="cont.php">
       <svg style="position:absolute; top:648vw; left:70vw;" height="10vw" width="20vw" viewBox="0 0 10 5">
         <rect x="0" y="0" width="10" height="5" fill="black" opacity="0"/>
       </svg>
     </a>
     <a target="_blank" href="https://www.facebook.com/scius.scsu">
       <svg style="position:absolute; top:707vw; left:57vw;" height="10vw" width="10vw" viewBox="0 0 5 5">
         <rect x="0" y="0" width="5" height="5" fill="black" opacity="0"/>
       </svg>
     </a>
     <a target="_blank" href="https://www.google.co.th/maps/place/13%C2%B049'08.8%22N+100%C2%B002'26.4%22E/@13.8190973,100.0401138,19z/data=!3m1!4b1!4m6!3m5!1s0x0:0x0!7e2!8m2!3d13.819096!4d100.0406607">
       <svg style="position:absolute; top:707vw; left:68vw;" height="10vw" width="10vw" viewBox="0 0 5 5">
         <rect x="0" y="0" width="5" height="5" fill="black" opacity="0"/>
       </svg>
     </a>
     <a target="_blank" href="https://www.facebook.com/SilpakornUniversityThailand">
       <svg style="position:absolute; top:770vw; left:4vw;" height="10vw" width="10vw" viewBox="0 0 5 5">
         <rect x="0" y="0" width="5" height="5" fill="black" opacity="0"/>
       </svg>
     </a>
     <a target="_blank" href="https://goo.gl/maps/1GoQFTmTrTjx1TTFA">
       <svg style="position:absolute; top:770vw; left:15vw;" height="10vw" width="10vw" viewBox="0 0 5 5">
         <rect x="0" y="0" width="5" height="5" fill="black" opacity="0"/>
       </svg>
     </a>
     <a target="_blank" href="http://www.sc.su.ac.th/">
       <svg style="position:absolute; top:760vw; left:4vw;" height="9vw" width="30vw" viewBox="0 0 10 3">
         <rect x="0" y="0" width="10" height="3" fill="black" opacity="0"/>
       </svg>
     </a>
     <a target="_blank" href="https://www.facebook.com/PricessSirindhornCollege">
       <svg style="position:absolute; top:772vw; left:54vw;" height="10vw" width="10vw" viewBox="0 0 5 5">
         <rect x="0" y="0" width="5" height="5" fill="black" opacity="0"/>
       </svg>
     </a>
     <a target="_blank" href="http://www.psc.ac.th/">
       <svg style="position:absolute; top:762vw; left:54vw;" height="10vw" width="30vw" viewBox="0 0 9 3">
         <rect x="0" y="0" width="9" height="3" fill="black" opacity="0"/>
       </svg>
     </a>
     <a target="_blank" href="https://goo.gl/maps/pg2d58BxVhUQKpZC9">
       <svg style="position:absolute; top:770vw; left:65vw;" height="10vw" width="10vw" viewBox="0 0 5 5">
         <rect x="0" y="0" width="5" height="5" fill="black" opacity="0"/>
       </svg>
     </a>

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
         <a href="index-en.php" height="15vw" width="15vw">
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


   <div class="footer" style="position:absolute; top:784vw;">
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

   var x = document.documentElement.clientWidth;
   var y = document.documentElement.clientHeight;
   var k = -0.85;
   var h = window.pageYOffset;

     var elem = document.getElementById('desktop_farewell');
     var pos = 50*y/x+k*(100*h/x - 100 + 50 *y/x);
     elem.style.top  = pos + 'vw';



   if(document.body.scrollLeft > 0 || document.documentElement.scrollLeft > 0){
    setTimeout(function(){ window.scrollBy(-100,0); }, 500);
}
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
