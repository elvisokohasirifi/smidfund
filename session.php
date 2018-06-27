<?php
   if(!isset($_SESSION['userid'])){
      header("location:index.html");
   }

   $inactive = 600;
   if(isset($_SESSION['timeout'])){
         $session_life = time() - $_SESSION['timeout'];
         if($session_life > $inactive){
            session_destroy();
            header("Location:index.html");
         }
   }
   $_SESSION['timeout'] = time();
?>
