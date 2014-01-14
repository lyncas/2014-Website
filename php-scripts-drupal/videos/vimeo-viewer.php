<?php
//////// CODE by DiscoBots - discobots.org   ///////////
//////// Please do not remove this title,  //////
/////// this works well with Drupal       ///////////
//////// feel free to modify or copy this software ///////////
/////// this is a video viewer reciever page (you will need the video scraper page to send to viewer ///// 


$name = $_GET['name'];
  
if($name != ""){
     print '<center><object width="700" height="525"><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="movie" value="http://vimeo.com/moogaloop.swf?clip_id='.$name.'&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=0&amp;show_portrait=0&amp;color=00ADEF&amp;fullscreen=1" /><embed src="http://vimeo.com/moogaloop.swf?clip_id='.$name.'&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=0&amp;show_portrait=0&amp;color=00ADEF&amp;fullscreen=1" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="700" height="525"></embed></object><br><br><a href="/node/5">Return to Video List</a></center>';
     $search = 'vimeo_'.$name;
     $count = variable_get($search);
     $count++;
     variable_set($search,$count);
} else {
      print '<br><br><br><center>Please go back to the <a href="/node/5">Video</a> List and select a video</center><br><br><br>';
}

?>

