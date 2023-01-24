<?php
include('../model/database.model.php');

class searching extends dataB{
    public function looking($Pname){
        $data = new dataB();
        $pdo=$data->connectPdo(); 

        $query = "SELECT * FROM `products` where `Pname` LIKE '%$Pname%'";
        $exe = $pdo->prepare($query);
        $exe->execute();

        $all = $exe->fetchAll(PDO::FETCH_ASSOC);
        
        return $all;

    }
}
?>