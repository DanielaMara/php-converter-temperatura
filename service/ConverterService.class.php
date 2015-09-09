<?php
class ConverterService 
{
    public static function convertToFahrenheit($celsius) 
    {
        return ($celsius * 1.8) + 32;
    }
}
?>