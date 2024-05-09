<main>
    <?php foreach ($productData as $product) { ?>
        <div class = "productContainer">
            <div class="mainImage">
                <img src="../corteiz_black.png" alt="Placeholder Image" />
            </div>
            <div class="priceDesc">
                <div class ="price">
                    <p>'$'<?=$product['Price']?></p>
                </div>
                <div class="productDesc">
                    <h3><?=$product['Name']?></h3>
                    <p><?=$product['Description']?></p>
                </div>
                <div class="moreinfo">
                    <h4>More info</h4>
                    <p>Provider<?=$product['Provider']?></p>
                </div>
            </div>
            <div class="imagesReviews">
                <div class="extraImages">
                    <img src="placeholder-1.png" alt="Placeholder Image" />
                    <img src="placeholder-2.png" alt="Placeholder Image" />
                    <img src="placeholder-3.png" alt="Placeholder Image" />
                </div>
                <div class="stars"></div>
                <div class="reviews">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere distinctio obcaecati ex id eaque nihil commodi quaerat accusantium laborum? </p>
                </div>
            </div>
        </div>
    <?php } ?>
</main>