<?php

require_once('includes/header.php');
require_once('includes/fakeData/artisans.php');
//artisans Array;
foreach ($artisans as $artisant) {
?>
    <div class="container-custom" style="text-align: center;">
        <div>
            <?php if ($artisant['right']) { ?>
                <div class="jumbotron customize"><?php echo $artisant['categorie']['title']; ?></div>
                <img style="float:left"src="<?php echo ASSET_IMG . 'artisans/' . $artisant['categorie']['img']; ?>" class="img_custom"/>
            <?php } else { ?>
                <img src="<?php echo ASSET_IMG . 'artisans/' . $artisant['categorie']['img']; ?>" class="img_custom2"/>
                <div class="jumbotron customize2"><?php echo $artisant['categorie']['title']; ?></div>
            <?php } ?>
        </div>
        <div style="clear:both;"></div>
        <div class="row">
            <?php
            for ($i = 0; $i < 2; $i++) {
            ?>
                <div class="col-md-6 <?php if($i == 0) { echo 'blue-border';} ?>">
                    <p class="name_artisant"><?php echo $artisant[$i]['name']; ?></p>
                    <p class="description_artisant"><?php echo $artisant[$i]['description']; ?></p>
                    <div style="margin-top: 73px;">
                        <div class="address">
                            <p><?php echo $artisant[$i]['address']['place'] ?></p>
                            <p><?php echo $artisant[$i]['address']['city'] ?></p>
                        </div>
                        <div class="tel">
                            <p>Phone : <?php echo $artisant[$i]['address']['tel']; ?></p>
                        </div>
                    </div>
                    <!-- <div style="clear: both;"></div> -->
                </div>
            <?php
            }
            ?>
        </div>
    </div>
<?php
}
require_once('includes/footer.php');
