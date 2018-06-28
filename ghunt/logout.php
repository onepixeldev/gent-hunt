<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: ghunt-admin-login.php");
   }
?>