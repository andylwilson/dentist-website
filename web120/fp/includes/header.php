<?php include "fp-config.php"?>
<!DOCTYPE html>
<html lang='en'>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title><?=$title?></title>
   <link rel="icon" type="image/png" href="images/favicon.png">

    
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
   <script src="js/script.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nav-styles.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/form.css" />
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
</head>
<body>

    <div id="wrapper">
        <nav>
            <a href="index.php"><img class="logo" src="images/logo.png" alt="logo"></a>
        <div id="cssmenu" class="align-right">
          <ul>
             <li><a href="../fp/contact.php">Contact Us</a></li>
             <li><a href="#">Patient Information</a></li>
             <li class="has-sub"><a href="#">Our Services</a>
                <ul>
                   <li><a href="../fp/preventative.php">Preventative Dentistry</a></li>
                   <li><a href="#">Restorative Dentistry</a></li>
                   <li><a href="#">Cosmetic Dentistry</a></li>
                   <li><a href="../fp/childrens.php">Children's Dentistry</a></li>
                   <li><a href="../fp/invisalign.php">Invisalign</a></li>
                   <li><a href="#">Teeth Whitening</a></li>
                </ul>
             </li>
             <li class="active has-sub"><a href="#">Our Office</a>
                <ul>
                   <li><a href="#">Meet the Staff</a></li>
                   <li><a href="#">About Our Office</a></li>
                </ul>
             </li>
          </ul>
        </div> <!--end cssmenu-->
        </nav>
        
        <header>
            <div id="hero-textbox">
                <h3 class="baskerville">Welcome to 2200 Westlake Dentistry...<br>Expect Excellence</h3>
            </div>
        </header>
    <!--END header.php include here-->