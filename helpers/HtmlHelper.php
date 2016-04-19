<?php

    namespace nox\helpers;

    use yii\helpers\Html;

    /**
     * Class HtmlHelper
     *
     * @category Html
     * @author   Jonatas Sas
     *
     * @package  nox\helpers
     */
    class HtmlHelper extends Html
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
