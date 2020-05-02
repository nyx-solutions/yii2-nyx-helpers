<?php

    namespace nox\helpers;

    /**
     * Class SlugHelper
     *
     * @package nox\helpers
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
