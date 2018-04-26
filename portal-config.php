<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

// echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

// echo THIS_PAGE;

// die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "Andy's WEB120 Title Page";
        $logo = 'fa-compass';
        $PageID = 'Welcome!';        
    break;
        
    case 'contactme.php':
        $title = "Andy's Contact Page";
        $logo = 'fa-comments';
        $PageID = 'Contact me!';        
    break;
        
    case 'aia.php':
        $title = "Andy's AIA Page";
        $logo = 'fa-handshake-o';
        $PageID = 'Research!';        
    break;
        
    case 'flowchart.php':
        $title = "Andy's Flowchart Page";
        $logo = 'fa-sitemap';
        $PageID = 'Charts that flow!';        
    break;
        
        
        
    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
        
}

$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = 'AIA';
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Me";
    
/*
here we're creating a function to generate links
and keep the highlight on the current page

      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Andy</a></li>
*/

function makeLinks ($nav1) {
    
    $myReturn = '';
    foreach($nav1 as $url => $text) {
        
        if($url == THIS_PAGE) {
            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";    
        } else {
            $myReturn .= "<li><a href=\"$url\">$text</a></li>";
        }   
    }
    return $myReturn; 
}


?>