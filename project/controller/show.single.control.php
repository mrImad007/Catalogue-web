<?php
        include('../Model/show.single.php');
		class single extends affichageSingle{
			public function execute(){
	
				$productId = $_POST['productId'];
		
				$prod = new affichageSingle;
				$singleProduct=$prod->showSingleProduct($productId);
	
				return $singleProduct;
			}    
		}
	
		$return = new single();
		$exe=$return->execute();

?>