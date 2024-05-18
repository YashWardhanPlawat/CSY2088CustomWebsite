<main>
<div class="container">
<h1>Capitano d'italia</h1>
<p>Lusso su Misura (Luxury made to measure)</p>
<?php
$products = showRandomProducts('csy2088', 'csy2088');
if ($products!== null) {
    // Loop through the products
    echo '<div class="product-row">';
    foreach ($products as $product) {
        // Generate the HTML for each product
        echo '<div class="product">';
        // Construct the image path based on the product ID or name
        //$imagePath = '../images/'. $product['Name']. '.png';
        echo '<img src="../images/'.$product['Name']. '.png" '.' alt="'. $product['Name']. '" class="image-size" />';
        echo '</div>';
    }
    echo '</div>';
} else {
    // Handle the case where the query failed
    echo 'Failed to fetch products.';
}

$categories = showRandomCategories('csy2088','csy2088');
$pdo = setMysqlDatabase('csy2088','csy2088','csy2088');
$productQuery = 'SELECT * FROM products WHERE Category = :Category';

if ($categories != null){
	foreach($categories as $category){ 
	$productQueryData = ['Category' => $category['categories'] ];
    $productData = queryMysqlDatabase($pdo, $productQuery, $productQueryData)->fetchAll(PDO::FETCH_ASSOC);?>
	<h2> | <?=$category['categories']?> |</h2>
  <div class="category">
		<?php foreach($productData as $product){ ?>
		<div class="category-image">
			<a href="ProductPage.php?<?=$product['Name']?>"><img src="../images/<?=$product['Name']?>.png" alt="<?=$product['Name']?>" class="image-size"/></a>
		</div>
    <?php } ?>
  	</div>
	<?php }
}
?>

    

</main>