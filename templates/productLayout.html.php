<main>
    <?php foreach ($productData as $product) { ?>
        <div class = "productContainer">
            <div class="mainImage">
                <img src="../images/placeholder-6.png" alt="Placeholder Image"  width = "300" height = "200"/>
            </div>
            <div class="priceDesc">
                <div class ="price">
                    <p>Price: £<?=$product['Price']?></p>
                </div>
                <div class="productDesc">
                    <h3><?=$product['Name']?></h3>
                    <p><?=$product['Description']?></p>
                </div>
                <div class="moreinfo">
                    <h4>More info</h4>
                    <p>Provider: <?=$product['Provider']?></p>
                </div>
            </div>
            <div class="imagesReviews">
                <div class="extraImages">
                    <img src="../images/placeholder-6.png" alt="Placeholder Image"  width = "100" height = "100"/>
                    <img src="../images/productpage2.png" alt="Placeholder Image"  width = "100" height = "100" />
                    <img src="../images/productpage3.png" alt="Placeholder Image"   width = "100" height = "100"/>
                </div>
            </div>
                <div class="stars"></div>
                <div class="reviews">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere distinctio obcaecati ex id eaque nihil commodi quaerat accusantium laborum? Aliquid ad eum doloribus ut laboriosam tempora aut natus facere provident.</p>
                </div>
            </div>
        </div>
    <?php } ?>
</main>