<?php

    namespace common\components\helpers;

    /**
     * Class Html
     *
     * @category Html
     * @author   Jonatas Sas
     *
     * @package  common\components\helpers
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
            return $prefix.self::tag('span', $content, ['class' => 'glyphicon glyphicon-'.$glyph]).$suffix;
        }

        /**
         * @param string       $image
         * @param string       $label
         * @param string|array $url
         *
         * @return string
         */
        public static function getProfessionalSearchMenuItem($image, $label, $url)
        {
            return static::a(static::img($image).static::tag('p', $label), $url);
        }
    }
