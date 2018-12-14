<?php

/**
 * @file class Ts2Php_String_Helper
 * @author cxtom (cxtom@gmail.com)
 */

class Ts2Php_Helper {

    /**
     * replace once helper for string.prototype.replace
     * @param $needle {string}
     * @param $replace {string}
     * @param $haystack {string}
     * @return {string}
     */
    static public function str_replace_once($needle, $replace, $haystack) {
        $pos = strpos($haystack, $needle);
        if ($pos === false) {
            return $haystack;
        }
        return substr_replace($haystack, $replace, $pos, strlen($needle));
    }

}