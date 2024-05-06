<?php
foreach ($productDetails as $product):
<main>
<div class = "productContainer">

<div class="mainImage">
    <img src="../corteiz_black.png" alt="Placeholder Image" />
</div>


<div class="priceDesc">
<div class ="price">
    <p><?php echo '$'. $product['Price'];?></p>
</div>
<div class="productDesc">
    <h3><?php echo $product['Name'];?></h3>
    <p><?php echo $product['Description'];?></p>
</div>
<div class="moreinfo">
<h4>More info</h4>
<p><?php echo 'Provider' . $product['Provider'];?></p>
</div>
</div>


<div class="imagesReviews">
<div class="extraImages">
<img src="placeholder-1.png" alt="Placeholder Image" />
<img src="placeholder-2.png" alt="Placeholder Image" />
<img src="placeholder-3.png" alt="Placeholder Image" />
</div>
<div class="stars">
</div>
<div class="reviews">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere distinctio obcaecati ex id eaque nihil commodi quaerat accusantium laborum? Aliquid ad eum doloribus ut laboriosam tempora aut natus facere provident.</p>
</div>
</div>

</div>
</main>
endforeach;?>