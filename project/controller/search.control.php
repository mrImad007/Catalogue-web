<?php
include('../model/search.model.php');

class confirmation extends searching {
    public function goSearching(){
        if(isset($_GET['search'])){
            $Pname = $_GET['search'];

            $test = new searching;
            $return = $test->looking($Pname);

            var_dump($return);
        }
    }
}

$execution = new confirmation;
$execution->goSearching()

?>