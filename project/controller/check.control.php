<?php
    include('../Controller/login.control.php');
    session_start();

    class checklogin extends connecting{

        public function checking(){

             if(isset($_SESSION['username'])){
                header('Location : ../view/dashboard.php');
             }
             else{
                header('Location : ../view/signin.php');
             }
        }
    }
    $check = new checklogin();
    $check->checking();
?>