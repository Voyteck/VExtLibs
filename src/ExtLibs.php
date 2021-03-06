<?php
namespace Voyteck;

/**
 * This class provides basic functions that are beeing used in further classes provided within Voyteck namespace
 *
 * @author Wojciech Zielinski
 * @link https://github.com/Voyteck/VExtLibs
 * @license MIT License
 *        
 */
class ExtLibs
{
    
    /**
     * Function returns true if specific byte within a provided value is on
     * Otherwise returns false
     * 
     * @param int $value
     * @param int ...$bytes
     * @return boolean
     */
    public static function byteOn(int $value, int ...$bytes) {
        $returnValue = false;
        foreach($bytes as $byte)
            $returnValue = $returnValue || (($value & $byte) == $byte);
        return $returnValue;
    }
    
    /**
     * Allows to create random string of various length
     * @link https://stackoverflow.com/questions/4356289/php-random-string-generator
     * 
     * @param number $length
     * @return string
     */
    public static function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}

