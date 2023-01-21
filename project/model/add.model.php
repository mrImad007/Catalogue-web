<?php
require_once('../Model/database.model.php');

class add extends dataB{
        
    public function adding($productName,$productPrice,$productImage){
        $data = new dataB();
        $pdo=$data->connectPdo();  

        $query = "INSERT INTO `products` (`id`, `Pimage`, `Pname`, `Pprice`) VALUES (NULL, '$productImage', '$productName', '$productPrice');";
        $exe = $pdo->prepare($query);
        $exe->execute();
    }
}

?>