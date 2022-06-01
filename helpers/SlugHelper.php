<?php

    namespace nyx\helpers;

    /**
     * Class SlugHelper
     *
     * @package nyx\helpers
     */
    class SlugHelper extends StringHelper
    {
        /**
         * @param string  $value
         * @param string  $spaces
         * @param integer $case
         * @param bool    $singleSpace
         *
         * @return string
         */
        public static function convert($value = '', $spaces = '-', $case = MB_CASE_LOWER, $singleSpace = true)
        {
            return static::asSlug($value, $spaces, $case, $singleSpace);
        }
    }
