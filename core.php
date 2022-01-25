<?php
$mileage = isset($_POST['mileage']) ? $_POST['mileage'] : 0;
$price = isset($_POST['price']) ? $_POST['price'] : 0;
$games = "";
$totalCost = "";

$games = $mileage / 20;
$games = round($games);
$totalCost = $games * $price;
?>