<?php
require_once('../Model/database.model.php');

class delete extends dataB{
        
    public function deleting($productId){
        $data = new dataB();
        $pdo=$data->connectPdo();  

        $query = "DELETE FROM `products` WHERE id = '$productId' ";
        $exe = $pdo->prepare($query);
        $exe->execute();
    }
}

?>