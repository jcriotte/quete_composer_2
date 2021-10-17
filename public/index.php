<?php
require '../vendor/autoload.php';
use src\Wcs\Hello;

$hello = new Hello;

echo $hello->talk();

?>