<?php
include('../Model/add.model.php');

class addConfirmation extends add{
    
    public function confirmation(){
        if(isset($_POST['productName'], $_POST['productPrice'],$_POST['productImage'])){
            $productName = $_POST['productName'];
            $productPrice = $_POST['productPrice'];
            $productImage = $_POST['productImage'];

            $executing = new add();
            $executing->adding($productName,$productPrice,$productImage);
        }
        header('Location: ../view/dashboard.php');
    }
}

$action = new addConfirmation();
$action->confirmation()

?>