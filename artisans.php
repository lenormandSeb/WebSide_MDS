<?php

require_once('includes/header.php');
require_once('includes/artisans.php');
//artisans Array;
foreach($artisans as $artisant) {
    echo '<pre>';
    var_dump($artisan);
    echo 'artisans name : ' . $artisant.name;
    echo '</pre>';
}
//artisans loop;
?>



<?php

require_once('includes/footer.php');