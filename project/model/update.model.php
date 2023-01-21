<?php
require_once('../Model/database.model.php');

class update extends dataB{
        
    public function updating($productName,$productPrice,$productImage,$productId){

        $data = new dataB();
        $pdo=$data->connectPdo();  

        $query = "UPDATE `products` 
                    SET `name` = '$productName', `price` = '$productPrice', `image`='$productImage'
                    WHERE `id` = '$productId';";
                    
        $exe = $pdo->prepare($query);
        $exe->execute();

    }
}

?>