<main>
<div class="container">
<h1>Capitano d'italia</h1>
<p>Lusso su Misura (Luxury made to measure)</p>
<?php
$products = showRandomProducts('csy2088', 'csy2088');
if ($products!== null) {
    // Loop through the products
    foreach ($products as $product) {
        // Generate the HTML for each product
        echo '<div class="product">';
        // Construct the image path based on the product ID or name
        $imagePath = '../images/'. $product['Name']. '.jpg';
        echo '<img src="'. $imagePath. '" alt="'. $product['name']. '" class="image-size" />';
        echo '</div>';
    }
} else {
    // Handle the case where the query failed
    echo 'Failed to fetch products.';
}

$categories = showRandomCategories('csy2088','csy2088');
if ($categories!== null){
  foreach($categories as $category){
    echo '<div class="category">';
    echo '<h2> |'. $category['categories']. '| </h2>';
    if (($product['category']==$category['categories'])&& ($imagePath==$product)){
      echo '<a href=#><img src="'. $imagePath. '" alt="'. $product['name']. '" class="image-size" /></a>';
    }
    echo '</div>';
  }
}

?>

      <div class="category">
        <h2>│ Category │</h2>
        <div class="category-image2">
          <img src="../images/placeholder-5.png" alt="Placeholder Image" />
        </div>
        <div class="category-image2">
          <img src="../images/placeholder-6.png" alt="Placeholder Image" />
        </div>
        <div class="category-image2">
          <img src="../images/placeholder-7.png" alt="Placeholder Image" />
        </div>
        <div class="category-image2">
          <img src="../images/placeholder-8.png" alt="Placeholder Image" />
        </div>
      </div>
    </div>
</main>