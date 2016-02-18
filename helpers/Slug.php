<?php

    namespace nox\bool\helpers;

    use Yii;

    /**
     * Class Slug
     *
     * @package nox\helpers
     */
    class Slug extends Text
    {
        /**
         * @param string  $value
         * @param string  $spaces
         * @param integer $case
         *
         * @return string
         */
        public static function convert($value = '', $spaces = '-', $case = MB_CASE_LOWER)
        {
            return static::asSlug($value, $spaces, $case);
        }
    }
