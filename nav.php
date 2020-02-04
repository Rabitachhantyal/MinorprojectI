
<?php

session_start();
if(!isset($_SESSION['userId']))
{
  include 'nav0.php';
}
else
{
 include 'nav1.php';
}

?>