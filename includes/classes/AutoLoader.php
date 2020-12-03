<?php

class AutoLoader
{
    /**
     * Registers Autoloader as an SPL autoloader.
     */
    public static function register()
    {
        spl_autoload_register(array(new self, 'autoload'));
    }

    /**
     * Handles autoloading of classes.
     *
     * @param string $class A class name.
     */
    public static function autoload($class)
    {
        $folder = PATH.'includes/classes';

        // Managers
        if (strpos($class, 'Manager') !== false) {
            $folder = PATH.'includes/managers';
        }

        if (is_file($file = $folder.'/'.str_replace(array('_', "\0"), array('/', ''), $class).'.php')) {
            require $file;
        }
    }
}