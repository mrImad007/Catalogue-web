<?php
    include('../Model/login.model.php');

    class connecting extends logInnn{
        
        public function direction(){

            session_start();

            if(!isset($_SESSION['username'])){
                if(isset($_POST['username'])){

                    $name = $_POST['username'];
                    $password = $_POST['password']; 

                    $result = $this->check($name,$password);

                    if(!$result){
                        header('Location: ../view/signin.php');
                    }
                    else{
                        header('Location: ../view/dashboard.php');
                    }
                }
            }
        }
    }
        $conn = new connecting();
        $conn->direction(); 
?>