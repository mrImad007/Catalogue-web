<?php
    include('../Model/show.model.php');

    $prod = new affichage;
    $products=$prod->showAllProducts();

?>