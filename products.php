<?php

require_once('includes/header.php');
require_once('includes/fakeData/products.php');
require_once('includes/fakeData/sidebar.php');

?>
<div>
    Texte
</div>
<div class="row">
    <div class="col-md-3" style="background-color: #e0e0eb;text-align:center">
        <?php
        foreach($sidebar as $side => $sideValue){
            echo '<p><strong>'. strtoupper($side).'</strong></p>';
            for($i = 0; $i < count($sideValue); $i++) {
                if ($side == "Color") {
                    if ($i % 4 == 0){
                        echo '<br>';
                    }
                    echo '<span class="dot" style="background-color: '.$sideValue[$i].'"></span>';
                } else {
                    echo '<p>'. $sideValue[$i] .'</p>';
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
                <img height="100px" width="100px" src="<?php echo ASSET_IMG.'Products/'.$product['img']; ?>">
                <p class="title"><?php echo $product['name'];?></p>
                <p class="price"><?php echo $product['price'];?> €</p>
            </div>
            <?php
        }
        ?>
        </div>
    </div>
</div>

<?php

require_once('includes/footer.php');