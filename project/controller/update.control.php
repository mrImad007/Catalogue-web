<?php

include('../Model/update.model.php');

class updateConfirmation extends update {
    public function changing(){
        
        if(isset($_POST['productId'])){
            $productId = $_POST['productId'];

            $productName = $_POST['productName'];
            $productPrice = $_POST['productPrice'];
            $productImage = $_POST['productImage'];
            

            $executing = new update();
            $executing->updating($productName,$productPrice,$productImage,$productId);

            header('Location: ../view/dashboard.php');
        }
        
    }
}

$action = new updateConfirmation();
$action->changing();

?>