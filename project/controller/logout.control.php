<?php
    include('../controller/login.control.php');

    class loginOut extends connecting {
        public function breaking()
        {
            session_start();
            session_unset();
            session_destroy();
            header('Location: ../view/index.php');
        }
    }

    $execute = new loginOut;
    $execute->breaking();
?>