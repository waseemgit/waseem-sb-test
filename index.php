<?php
ini_set('display_errors', TRUE);
error_reporting(E_ALL);
 /*** define the site path constant ***/
$site_path = realpath(dirname(__FILE__));
define ('__SITE_PATH', $site_path);
define('BASE_DIR', str_replace(dirname(__DIR__),"",__DIR__));
include 'includes/init.php'; 
?>