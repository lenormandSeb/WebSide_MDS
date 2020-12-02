<?php

require_once('includes/header.php');
require_once('includes/fakeData/artisans.php');
//artisans Array;
foreach($artisans as $artisant) {
?>
<div class="container" style="border: 1px solid;height: 100px">
    <p><?php echo $artisant['categorie']['title']; ?></p>
    <img src="<?php echo ASSET_IMG.'artisans/'.$artisant['categorie']['img']; ?>" height="50px" width="50px"/>
    <div class="row">
        <?php
        for($i = 0 ; $i < 2 ; $i++){
            ?>
            <div class="col-md-6" style="border: 1px solid; height:50px">
                <p><?php echo $artisant[$i]['name']; ?></p>
                <p><?php echo $artisant[$i]['description']; ?></p>
                <span><?php echo $artisant[$i]['address']['place'] ?> - <?php echo $artisant[$i]['address']['tel'] ;?></span>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<?php
}
require_once('includes/footer.php');