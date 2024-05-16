<?php 
$pdo = setMysqlDatabase('csy2088','csy2088','csy2088');
$productQuery = 'SELECT * FROM csy2088.products';
$productData = queryMysqlDatabase($pdo, $productQuery, null)->fetchAll(PDO::FETCH_ASSOC);
?>

<main class="product-list">
<?php foreach ($productData as $product) { ?>
    <div class="searchproduct">
    <img src="../images/<?=$product['Name']?>.png" class="image-placeholder" alt="<?=$product['Name']?>">
    <h3><?=$product['Name']?></h3>
    <p><?=$product['Category'] | $product['Provider']?></p>
    <p><?=$product['Price']?></p>
    </div>
<?php } ?>
</main>