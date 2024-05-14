<?php
    spl_autoload_register(function($class){
        if (file_exists('config/app/' . $class . '.php')) {
            require 'config/app/' . $class . '.php';
        }

    })
?>