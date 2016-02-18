<?php

    namespace nox\helpers;

    /**
     * Class Html
     *
     * @category Html
     * @author   Jonatas Sas
     *
     * @package  nox\helpers
     */
    class Html extends \yii\helpers\Html
    {
        /**
         * @param string $glyph
         * @param string $content
         * @param string $prefix
         * @param string $suffix
         *
         * @return string
         */
        public static function glyphicon($glyph, $content = '', $prefix = '', $suffix = ' ')
        {
            return $prefix.static::tag('span', $content, ['class' => 'glyphicon glyphicon-'.$glyph]).$suffix;
        }
    }
