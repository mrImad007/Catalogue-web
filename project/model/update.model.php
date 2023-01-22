<?php
require_once('../Model/database.model.php');

class update extends dataB{
        
    public function updating($productName,$productPrice,$productImage,$productCategory,$productId){

        $data = new dataB();
        $pdo=$data->connectPdo();  

        $query = "UPDATE `products` 
                    SET `Pimage`='$productImage', `Pname` = '$productName', `Pprice` = '$productPrice', `Pcategory` = '$productCategory'
                    WHERE `id` = '$productId';";
                    
        $exe = $pdo->prepare($query);
        $exe->execute();

    }
}

?>