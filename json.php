<?php
include 'config.php';
include 'class.browser.php';
header('Content-Type: application/json');
$browser = new browser();
$list=$browser->get_browser();
echo "{\"browser\":";
echo json_encode($list);
echo "}";
?>
