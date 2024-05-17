<?php 
//$pdo = setMysqlDatabase('csy2088','csy2088','csy2088');
//$productQuery = 'SELECT * FROM csy2088.products';
//$productData = queryMysqlDatabase($pdo, $productQuery, null)->fetchAll(PDO::FETCH_ASSOC);
?>

<main class="product-list">
<?php 
if (isset($_GET["ProductORFree"])){
    if ($_GET["ProductORFree"] == "freelancer_accounts"){
        foreach ($productData as $product) {?>
            <div class="searchproduct">
                <a href="FreeLancerPortfo.php?FreeLancerID=<?=$product['ID']?>">
                    <img src="../images/<?=$product['Name']?>.png" class="image-placeholder" alt="">
                    <h3><?=$product['Name']?></h3>
                    <p><?=$product['Email']?></p>
                </a>
            </div>
        <?php }
    }elseif($_GET["ProductORFree"] == "products"){
        foreach ($productData as $product) { ?>
            <div class="searchproduct">
                <a href="product.php?id=<?=$product['ID']?>">
                    <img src="../images/<?=$product['Name']?>.png" class="image-placeholder" alt="<?=$product['Name']?>">
                    <h3><?=$product['Name']?></h3>
                    <p><?=$product['Category']?> | <?=$product['Provider']?></p>
                    <p><?=$product['Price']?></p>
                </a>
            </div>
        <?php }
    }
}else{
    foreach ($productData as $product) {?>
        <div class="searchproduct">
            <a href="product.php?id=<?=$product['ID']?>">
                <img src="../images/<?=$product['Name']?>.png" class="image-placeholder" alt="<?=$product['Name']?>">
                <h3><?=$product['Name']?></h3>
                <p><?=$product['Category']?> | <?=$product['Provider']?></p>
                <p><?=$product['Price']?></p>
            </a>
        </div>
    <?php }
}
?>
</main>
