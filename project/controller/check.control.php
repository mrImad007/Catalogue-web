<?php

    include('../Controller/login.control.php');
    class checklogin extends connecting{

        public function checking(){
            session_start();
            if(!isset($_SESSION['login'])){
                header('Location: ../view/signin.forms.php');
            }
            else if(isset($_SESSION['login'])){
                header('Location: ../view/dashboard.php');
            }
        }
    }

    $execute = new checklogin;
    $execute->checking();
?>