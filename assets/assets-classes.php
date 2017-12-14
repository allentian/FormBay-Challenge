<?php

spl_autoload_register( function ($class_name) {
        $CLASSES_DIR = __DIR__ . '/../';
        $fileName = $CLASSES_DIR .str_replace("\\", "/", $class_name) . ".php";
        if( file_exists( $fileName ) ) include $fileName;
} );