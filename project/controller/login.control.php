<?php
    include('../Model/login.model.php');

    class connecting extends logInnn{
        
        public function direction(){

            
                if(isset($_POST['email'])){

                    $name = $_POST['email'];
                    $password = $_POST['password']; 

                    $result = $this->check($name,$password);

                    print_r($result);
                }
            }
        }
    
        $conn = new connecting();
        $conn->direction(); 
?>