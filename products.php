<?php

require_once('includes/header.php');
require_once('includes/products.php');

foreach($products as $product) {
    echo '<pre>';
    var_dump($product);
    echo 'product id : ' . $product.id;
    echo '</pre>';
}
//product Array;
//product loop;
?>



<?php

require_once('includes/footer.php');