<?php

include_once 'colorable.php';
class Square implements colorable
{
    public function __construct()
    {
    }

     public function howToColor()
    {
        return "Color all four sides";
    }
}