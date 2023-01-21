<?php
require_once('../Model/database.model.php');

class add extends dataB{
        
    public function adding($productName,$productPrice,$productImage){
        $data = new dataB();
        $pdo=$data->connectPdo();  

        $query = "INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES (NULL, '$productName', '$productPrice', '$productImage');";
        $exe = $pdo->prepare($query);
        $exe->execute();
    }
}

?>