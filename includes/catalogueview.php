<?php

class CatalogueView{
	public function render($oProductType){
		$sHTML = '';

		$sHTML .= '<ul id="catalogue">';

		for($iCount=0;$iCount<count($oProductType->products);$iCount++){
			$oCurrentProduct = $oProductType->products[$iCount];
			$sHTML .= '<li>
				<a href="productdetails.php?productID='.$oCurrentProduct->ID.'">
				<img class="productImage" src="assets/images/'.$oCurrentProduct->photo.'" />
				<div class="categorystyle">
					<h2 class="productTitle">'.$oCurrentProduct->name.'</h2></a>
					<p>$'.number_format($oCurrentProduct->price,2).'</p>
					<p><a href="#">add to cart</a></p>
				</div>
			</li>';
		}

		$sHTML .= '</ul>';

		return $sHTML;
	}
}

?>