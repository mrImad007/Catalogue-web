<?php

include('../Model/update.model.php');

class updateConfirmation extends update {
    public function changing(){
        
        if(isset($_POST['id'])){
            $productId = $_POST['id'];

            $productName = $_POST['name'];
            $productPrice = $_POST['price'];
            $productImage = $_POST['image'];
            $productCategory = $_POST['category'];
            

            $executing = new update();
            $executing->updating($productName,$productPrice,$productImage,$productCategory,$productId);

            header('Location: ../view/dashboard.php');
        }
        
    }
}

$action = new updateConfirmation();
$action->changing();

?>