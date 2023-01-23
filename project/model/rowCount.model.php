<?php
require_once('../Model/database.model.php');

class getRows extends dataB{
        
    public function AllRows(){
        $data = new dataB();
        $pdo=$data->connectPdo();  

        $query = "SELECT * FROM products";
        $exe = $pdo->prepare($query);
        $exe->execute();

        $count = $exe->rowCount();

        return $count;

    }
}
?>