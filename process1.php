<?php
require_once 'userFunctions1.php';
if(isset($_POST["search-password"])) {
    $value = trim($_POST["search-password"]);
    $Records = new Records();
    echo $Records->searchDate($value);
}
