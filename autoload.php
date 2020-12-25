<?php

spl_autoload_register(function ($class_name) {
    if(file_exists('classes/'.$class_name . '.php'))
        include 'classes/'.$class_name . '.php';
});