<?php
require_once 'userFunctions.php';
if(isset($_POST["username"])) {
    $value = trim($_POST["username"]);
    $Records = new Records();
    echo $Records->searchDate($value);
}
