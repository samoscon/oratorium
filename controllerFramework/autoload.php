<?php
spl_autoload_register(function ($class_name) {
    if(preg_match('/\\\\/', $class_name)) {
        $class_name = str_replace('\\', DIRECTORY_SEPARATOR, $class_name);
    }
    if(file_exists("vendor".DIRECTORY_SEPARATOR."oratorium".DIRECTORY_SEPARATOR."controllerFramework".DIRECTORY_SEPARATOR."{$class_name}.php")) {
        require_once "vendor".DIRECTORY_SEPARATOR."oratorium".DIRECTORY_SEPARATOR."controllerFramework".DIRECTORY_SEPARATOR."{$class_name}.php";
    }
    if(file_exists("MVCFramework".DIRECTORY_SEPARATOR."{$class_name}.php")) {
        require_once "MVCFramework".DIRECTORY_SEPARATOR."{$class_name}.php";
    }
    if(file_exists("vendor".DIRECTORY_SEPARATOR."oratorium".DIRECTORY_SEPARATOR."membersactivitiesFramework".DIRECTORY_SEPARATOR."{$class_name}.php")) {
        require_once "vendor".DIRECTORY_SEPARATOR."oratorium".DIRECTORY_SEPARATOR."membersactivitiesFramework".DIRECTORY_SEPARATOR."{$class_name}.php";
    }
});