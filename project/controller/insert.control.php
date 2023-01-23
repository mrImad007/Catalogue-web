<?php
include('../Model/add.model.php');

class addConfirmation extends add{
    
    public function confirmation(){
        if(isset($_POST['name'], $_POST['price'],$_POST['image'], $_POST['category'])){
    
            $num = count($_POST['name']);
            $executing = new add();
            for ($i=0 ; $i<$num ; $i++){
                $executing->adding($_POST['image'][$i],$_POST['name'][$i],$_POST['price'][$i],$_POST['category'][$i]);
            }
        }
        header('Location: ../view/dashboard.php');
    }
}

$action = new addConfirmation();
$action->confirmation()

?>