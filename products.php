<?php

require_once('includes/header.php');
require_once('includes/fakeData/products.php');
require_once('includes/fakeData/sidebar.php');

?>
<div class="product_text">
    From decoration to stationery, including table artsn discover the products offered be The Artisans of Christmas.
</div>
<div class="row">
    <div class="col-md-3 product_left" style="background-color: #e0e0eb">
        <?php
        foreach($sidebar as $side => $sideValue){
            echo '<p class="product_left_text_strong"><strong>'. strtoupper($side).'</strong></p>';
            for($i = 0; $i < count($sideValue); $i++) {
                if ($side == "Color") {
                    echo '<span class="dot" style="background-color: '.$sideValue[$i].'"></span>';
                } else {
                    echo '<p class="product_left_text">'. $sideValue[$i] .'</p>';
                }
            }
        }
        ?>
    </div>
    <div class="col-md-9">
        <div class="row">
        <?php
        foreach($products as $product) {
            ?>
            <div class="col-md-4">
                <img height="350px" width="100%" src="<?php echo ASSET_IMG.'Products/'.$product['img']; ?>">
                <div style="text-align: center;">
                    <p class="product_left_title"><strong><?php echo $product['name'];?></strong></p>
                    <p class="price"><strong><?php echo $product['price'];?> €</strong></p>
                </div>
            </div>
            <?php
        }
        ?>
        </div>
    </div>
</div>

<?php

require_once('includes/footer.php');