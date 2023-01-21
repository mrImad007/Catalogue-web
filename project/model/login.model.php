<?php
    require_once('../Model/database.model.php');

    class logInnn extends dataB{

        public function check($name,$password){

            $log = new dataB;
            $pdo = $this->connectPdo();

            $query = "SELECT * FROM `admin` WHERE username = '$name' AND `password` = '$password' ";
            $stet = $pdo->prepare($query);
            $stet->execute();
            $user = $stet->fetchAll(PDO::FETCH_ASSOC);

            return $user;
            }
        }

          
?>