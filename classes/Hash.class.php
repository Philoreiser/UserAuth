<?php

/**
 * Hash class
 */

class Hash {

    private function __construct() {} // disallow creating a new object of the class with 'new Hash()'
    
    private function __clone() {} // disallow cloning the class

    /**
     * Get a hash of text
     * @param string $text  the clear text
     * @return string       the hash
     */
    public static function make($text) {
        return password_hash($text, PASSWORD_DEFAULT);
    }

    /**
     * Compare text to the hash
     * @param string $text  The clear text
     * @param string $hash  The hash
     * @return boolean
     */
    public static function check($text, $hash) {
        return password_verify($text, $hash);
    }


} 