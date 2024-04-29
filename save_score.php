<?php
  // Append the new score at end of file
  $fp = fopen("memory_highscore.dat", "a");
  foreach($HTTP_GET_VARS as $var) { 
    fputs($fp, "$var" . chr(9)); 
  }
  fputs($fp, chr(10)); 
  fclose($fp);
  
  include("show_score.php")
?>