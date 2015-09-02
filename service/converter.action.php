<?php
require 'ConverterService.class.php';

$celsius = $_GET['celsius'];
$index = 0.0;

if(is_numeric($celsius))
{
    $index = ConverterService::getIndex($celsius);
}

echo $index;
?>