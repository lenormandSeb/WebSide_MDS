<?php

define('PATH', './');
define('ASSET_IMG', PATH.'includes/images/');
require_once PATH.'includes/classes/AutoLoader.php';
require_once('page.php');

AutoLoader::register();
translate::build($page);
