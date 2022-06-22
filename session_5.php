<?php
echo "ishika"."\n";
 session_start();
  

 $_SESSION['logged_in_user_id'] = '1';
 $_SESSION['logged_in_user_name'] = 'siddhant gulati';
 

 echo $_SESSION['logged_in_user_id'];
 echo "<br>";
 echo $_SESSION['logged_in_user_name'];
 ?>
