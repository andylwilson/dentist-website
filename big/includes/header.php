<?php include "big-config.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/big.css" />
<link rel="stylesheet" href="css/form.css" />
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
<script src="js/script.js"></script>

<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Comfortaa:400,700|Open+Sans|Patua+One|Poiret+One" rel="stylesheet">
</head>
<body>
    
<!-- START WRAPPER -->
<div class="wrapper">
    <header>
      <h1><a href="index.php"><i class="logo fa <?=$logo?>"></i> Andy Wilson's SCC WEB120 Portal</a></h1>
      <nav id="cssmenu">
          <ul>
             <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> WEB120</span></a></li>
             <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> BIG</span></a></li>
              <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Web Dev Research Topics</span></a>
                <ul>
                   <li><a href="flexbox.php"><span><i class="fa fa-fw fa-cube"></i> Flexbox</span></a></li>
                   <li><a href="parallax.php"><span><i class="fa fa-fw fa-fighter-jet"></i> Parallax</span></a></li>
                   <li><a href="shoppingcarts.php"><span><i class="fa fa-fw fa-shopping-basket"></i> Shopping Carts</span></a></li>
                   <li><a href="siteapp.php"><span><i class="fa fa-fw fa-html5"></i> Site vs App</span></a></li>
                   <li><a href="galleries.php"><span><i class="fa fa-fw fa-camera-retro"></i> Galleries</span></a></li>
                </ul>
             <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Google Apps</span></a>
                <ul>
                   <li><a href="calendar.php"><span><i class="fa fa-fw fa-calendar"></i> Calendar</span></a></li>
                   <li><a href="map.php"><span><i class="fa fa-fw fa-map-o"></i> Map</span></a></li>
                   <li><a href="youtube.php"><span><i class="fa fa-fw fa-youtube-square"></i> YouTube</span></a></li>
                </ul>
             </li>
             <li><a href="webcam.php"><span><i class="fa fa-fw fa-eye"></i> Web Cam</span></a></li>
          </ul>
      </nav>
    </header>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID"><?=$PageID?></h2>
    <!--END header.php include here-->