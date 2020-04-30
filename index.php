<h1>This is index.php file</h1>
<?php
function show_product($cat_id,$product_id){
	$porducts = [
		['cat_id'=>115,'product_id'=>1,'name'=>"Samsung Galaxy 7"],
		['cat_id'=>112,'product_id'=>8,'name'=>"Macbook"],
		['cat_id'=>113,'product_id'=>9,'name'=>"office 365"],
		['cat_id'=>114,'product_id'=>6,'name'=>"Oppo f7"]
	];
	foreach ($porducts as $product) {
		if($product['cat_id']==$cat_id and $product['product_id']==$product_id){
			return $product;
		}
	}
	return false;
}
if(isset($_GET['url'])){
	echo "<pre>";
	print_r($_GET);
	$url=$_GET['url'];
	$url=explode("/", $url);
	print_r($url);
	if($url[0]=='show_product'){
		$cat_id=$url[1];
		$product_id=$url[2];
		$product=show_product($cat_id,$product_id);
		if($product){
		echo "<pre>";
		print_r($product);
	}else{
		echo "not found";
	}
}
}


?>