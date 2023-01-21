<?php
require_once('../Model/database.model.php');

class affichageSingle extends dataB{
        
    public function showSingleProduct($productId){
        $data = new dataB();
        $pdo=$data->connectPdo();  

        $query = "SELECT * FROM `products` where id='$productId'";
        $exe = $pdo->prepare($query);
        $exe->execute();

        $product = $exe->fetchAll(PDO::FETCH_ASSOC);
        return $product;
    }
}

?>