<?php
 session_start();
 session_unset();
 session_destroy();
 header('location:https://sltclasith.000webhostapp.com/index.php');

?>