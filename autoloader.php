<?php
class Autoloader
{
    static function autoload($class)
    {
        require 'Model/' . $class . '.php';
    }
    static function register()
    {
        spl_autoload_register('Autoloader::autoload');
        //spl_autoload_register(array(__CLASS__, 'autoload'));


    }



}


/*?> ommis car PHP only */