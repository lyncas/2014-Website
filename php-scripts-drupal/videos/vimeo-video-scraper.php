<?php 

<?php
//////// CODE by DiscoBots - discobots.org   ///////////
//////// Please do not remove this title,   this works well with Drupal       ///////////
//////// feel free to modify or copy this software ///////////
/////// this is the main select page, you also need a reciever page to recieve the video ///// 
//
////// modify the VIMEO video IDs and add your own image icons in the proper location  ///////


$title = array(); $desc = array(); $name = array(); $picture = array(); $index = 0;


$title[$index] = "2013 VEX Robot";
$name[$index] = "64294108";
$desc[$index] = "2013 Reveal Video for sack attack worlds, ";
$picture[$index] = "circle.jpg";
$index++;

$title[$index] = "2013 Chairman's Video";
$name[$index] = "63832974";
$desc[$index] = "The video submission for our 2013 chairman's award";
$picture[$index] = "chairmans.jpg";
$index++;

$title[$index] = "Disk Jockey ";
$name[$index] = "60354829";
$desc[$index] = "Robot Reveal for 2013 FIRST Robotics Competition ";
$picture[$index] = "lsr09.gif";
$index++;

$title[$index] = "VEX Solar Panel Tracker - 2013";
$name[$index] = "56839170";
$desc[$index] = "Video showcasing our entry to the VEX sustainable challenge";
$picture[$index] = "2011discoSlide.png";
$index++;

$title[$index] = "Mini-Dragon 2012";
$name[$index] = "40536229";
$desc[$index] = "Preparing for 2012 VEX Wolrd Championship Robot video";
$picture[$index] = "vexComp.jpg";
$index++;

$title[$index] = "Laser Dragon";
$name[$index] = "37359670";
$desc[$index] = "2012 Final Reveal Robot Video";
$picture[$index] = "chairmans.jpg";
$index++;

$title[$index] = "Disco Slide - 2011 Logomotion";
$name[$index] = "20596362";
$desc[$index] = "Showcase for the completed 2011 Robot";
$picture[$index] = "2011discoSlide.png";
$index++;

$title[$index] = "Parody Video of Robonauts - 2011";
$name[$index] = "19985121";
$desc[$index] = "Week 5 feature of 2011 Robot with homage to our neighbors, team 118";
$picture[$index] = "2011week5.png";
$index++;

$title[$index] = "2010 Chairman's Video";
$name[$index] = "10625132";
$desc[$index] = "The video element of our entry for the 2010 Chairman's Award. The Chairman's Award is the highest honor a FIRST team can receive.";
$picture[$index] = "chairmans.jpg";
$index++;

$title[$index] = "Enter The Discobots";
$name[$index] = "9906403";
$desc[$index] = "Our 2010 Team Promotional Video for the VEX Robotics Competition- 3rd Place at Worlds!";
$picture[$index] = "2010kicker.jpg";
$index++;

$title[$index] = "2010 Animation: Help Fred the Fish";
$name[$index] = "9538966";
$desc[$index] = "The DiscoBots first foray into Animation - Save the world from Air Pollution";
$picture[$index] = "10animation.jpg";
$index++;

$title[$index] = "2009 Robot Video";
$name[$index] = "4105551";
$desc[$index] = "Overview of our robot features displayed during the Lone Star Regional";
$picture[$index] = "lsr09.gif";
$index++;

$title[$index] = "2009 Chairman's Video";
$name[$index] = "3803560";
$desc[$index] = "The video submission for our 2009 chairman's award";
$picture[$index] = "chairmans.jpg";
$index++;

$title[$index] = "2008 VEX Robotics Competition";
$name[$index] = "2984546";
$desc[$index] = "The VEX Competition at Lamar High School";
$picture[$index] = "vexComp.jpg";
$index++;

// |||||||||||||| DO NOT EDIT ANYTHING BELOW THIS unless you understand it ||||||||||||||||| //
$numDocs = count($title);
print '<table cell padding="3px" cell spacing="3px" style="font-size:10pt">';
for($counter = 0; $counter < $numDocs; $counter ++){

     $search = 'vimeo_'.$name[$counter];
     $count = variable_get($search);
     if($count == 0) $text = 'No views';
     else if($count == 1) $text = '1 view';
     else $text = $count.' views';
     
     print '<tr><td><a href="/node/29?name='.$name[$counter].'"><img src="/images/video/'.$picture[$counter].'" align="left"></a> </td>';
     print '<td><span style="font-weight:bold; font-size:11pt"><a href="/node/29?name='.$name[$counter].'">'.$title[$counter].'</a></span><br>';
     print $text.'<br>';
     print $desc[$counter].'';
     print '</td></tr>';
}
print '</table>';
print '<br><a href="/node/4">Go to Photo Gallery</a>';
?>

