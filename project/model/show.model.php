<?php
require_once('../Model/database.model.php');

class affichage extends dataB{
        
    public function showAllProducts(){
        $data = new dataB();
        $pdo=$data->connectPdo();  

        $query = "SELECT * FROM `products`";
        $exe = $pdo->prepare($query);
        $exe->execute();

        $allProducts = $exe->fetchAll(PDO::FETCH_ASSOC);
        return $allProducts;
    }
}

?>