<?php
class ConverterService 
{
    public static function getIndex($celsius) 
    {
        return ($celsius * 1.8) + 32;
    }
}
?>