<?php
    include('../model/rowCount.model.php');

    class rows extends getRows{
        public function numberOfRows(){

            $before = new getRows();
            $num = $before->AllRows(); 

            return $num;
        }
    }

    $ee = new rows;
    $num = $ee->numberOfRows();
?>