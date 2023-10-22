<?php

namespace Blocks\System\Helper;

use Exception;

class StringsArrayParam {

    /**
     * Param converter
     *
     * @param string or array
     *
     * @return array of strings
     */
    public static function get(string|array $param) {
        $results = [];

        if ( is_array($param) ) {
            foreach ($param as $item) {
                if ( is_string($item) ) {
                    $results[] = $item;
                } else {
                    throw new Exception('A single item of the passed array is not a string');
                }
            }

        } elseif ( is_string($param) ) {
            $results[] = $item;

        } else {
            throw new Exception('The passed argument is neither an array of strings, nor a string');
        }

        return $results;
    }

}
