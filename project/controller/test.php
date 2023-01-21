<?
include('../model/login.model.php');

    class test extends logInnn {
        public function sh(){
            $name = $_POST['email'];
            $password = $_POST['password'];

            $var=$this->check($name,$password);

            print_r($var);
        }
    }

    $shsh = new test();
    $shsh->sh();
?>