<main>
    <div class="productContainer">
        <div class="mainImage">
            <img src="../images/placeholder-6.png" alt="Placeholder Image" width="300" height="200"/>
        </div>
        <div class="priceDesc">
            <div class="price">
                <p>Price: £<?=$products['Price']?></p>
            </div>
            <div class="productDesc">
                <h3><?=$products['Name']?></h3>
                <p><?=$products['Description']?></p>
            </div>
            <div class="moreinfo">
                <h4>More info</h4>
                <p>Provider: <?=$products['Provider']?></p>
            </div>
        </div>
        <div class="imagesReviews">
            <div class="extraImages">
                <img src="../images/<?=$products['Name']?>.png" alt="<?=$products['Name']?>" class="image-size"/>
                <img src="../images/placeholder-6.png" alt="Placeholder Image" width="100" height="100"/>
                <img src="../images/productpage2.png" alt="Placeholder Image" width="100" height="100"/>
                <img src="../images/productpage3.png" alt="Placeholder Image" width="100" height="100"/>
            </div>
        </div>
        <div class="stars"></div>
        <div class="reviews">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere distinctio obcaecati ex id eaque nihil commodi quaerat accusantium laborum?</p>
        </div>
    </div>
</main>
