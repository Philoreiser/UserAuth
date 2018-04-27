<?php

/**
 * Initialization
 */

// Register autoload function
spl_autoload_register('myClassAutoloader');

/**
 * Autoloader
 * @param string $className - the name of the class
 * @return void
 */
function myClassAutoloader($className) {
    require dirname(dirname(__FILE__)) . '/' . 'classes'. '/' . $className . '.class.php'; 
}
