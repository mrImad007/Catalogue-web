<?php
require_once('../Model/database.model.php');

class add extends dataB{
        
    public function adding($productImage,$productName,$productPrice,$productCategory){
        $data = new dataB();
        $pdo=$data->connectPdo();  

        $query = "INSERT INTO `products` (`Pimage`, `Pname`, `Pprice`, `Pcategory`) VALUES ('$productImage', '$productName', '$productPrice', '$productCategory');";
        $exe = $pdo->prepare($query);
        $exe->execute();
    }
}

?>