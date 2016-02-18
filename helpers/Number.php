<?php

    namespace nox\helpers;

    /**
     * Class Number
     *
     * @package nox\helpers
     */
    class Number
    {
        /**
         * Recebe uma string formatada e retorna apenas os seus números.
         *
         * @param string $content
         *
         * @return string
         *
         * @see StringHelper::justNumbers
         */
        public static function justNumbers($content = '')
        {
            return Text::justNumbers($content);
        }

        /**
         * @param int      $value
         * @param bool|int $upper
         *
         * @return string
         *
         * @see StringHelper::toSpelled
         */
        public static function toSpelled($value = 0, $upper = false)
        {
            return Text::toSpelledNumber($value, $upper);
        }

        /**
         * @param float $amount
         * @param bool  $withPrefix
         *
         * @return string
         *
         * @see StringHelper::toMoney
         */
        public static function toMoney($amount, $withPrefix = true)
        {
            return Text::toMoney($amount, $withPrefix);
        }
    }
