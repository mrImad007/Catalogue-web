<?php
    // database connection class
    class dataB{
        private $root = 'root';
        private $pswd = '';
        private $host = "mysql:host=localhost;port=3306;dbname=Glowguru";

        protected function connectPdo(){
            
            $pdo = new PDO($this->host,$this->root,$this->pswd,);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            return $pdo;
        }
    }
?>