<?php
include('../Model/delete.model.php');

class deleteConfirmation extends delete{

    public function confirmation(){
        
        if(isset($_POST['productId'])){
            $productId = $_POST['productId'];

            $executing = new delete();
            $executing->deleting($productId);
        }
        header('Location: ../view/dashboard.php');
    }
}

$action = new deleteConfirmation();
$action->confirmation();


?>