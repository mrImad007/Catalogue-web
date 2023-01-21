<?php
    require_once('../Model/database.model.php');

    class logInnn extends dataB{

        public function check($email,$password){

            $log = new dataB;
            $pdo = $log->connectPdo();

            $query = "SELECT * FROM `admin` WHERE `email` = '$email' AND `password` = '$password' ";
            $stet = $pdo->prepare($query);
            $stet->execute();
            $user = $stet->fetchAll(PDO::FETCH_ASSOC);

            return $user;
            }
        }

          
?>