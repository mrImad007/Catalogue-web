<?php
    include('../Model/login.model.php');

    class connecting extends logInnn{
        
        public function direction(){

            
                if(isset($_POST['email'])){

                    $email = $_POST['email'];
                    $password = $_POST['password']; 

                    $result = $this->check($email,$password);

                    if(!$result){
                        header('Location: ../view/signin.forms.php');
                    }
                    else{
                        header('Location: ../view/dashboard.php');
                    }
                }else{
                    header('Location: ../view/index.com');
                }
            }
        }
    
        $conn = new connecting();
        $conn->direction(); 
?>