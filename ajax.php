<?php
require('includes/common.php');

if($_GET['action'] == 'setLang') {
    $lang = 'EN';
    if ($_GET['lang'] == 'fr') {
        $lang = 'FR';
    }
    return 'ok';
}