<?php
include('../Model/add.model.php');

class addConfirmation extends add{
    
    public function confirmation(){
        if(isset($_POST['name'], $_POST['price'],$_POST['image'], $_POST['category'])){
            $productName = $_POST['name'];
            $productPrice = $_POST['price'];
            $productImage = $_POST['image'];
            $productCategory = $_POST['category'];

            $executing = new add();
            $executing->adding($productImage,$productName,$productPrice,$productCategory);
        }
        header('Location: ../view/dashboard.php');
    }
}

$action = new addConfirmation();
$action->confirmation()

?>