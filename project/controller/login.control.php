<?php
    include('../Model/login.model.php');

    class connecting extends logInnn{
        
        public function direction(){

            
                if(isset($_POST['email']) && isset($_POST['password'])){

                    $email = $_POST['email'];
                    $password = md5($_POST['password']);

                    $result = $this->check($email,$password);

                    if(!$result){
                        header('Location: ../view/signin.forms.php');
                    }
                    else{
                        session_start();
                        $_SESSION['login'] = $email;
                        header('Location: ../view/dashboard.php');
                    }
                }else{
                    header('Location: ../view/signin.forms.php');
                }
            }
        }
    
        $conn = new connecting();
        $conn->direction(); 
?>