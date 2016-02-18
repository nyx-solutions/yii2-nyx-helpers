<?php

    namespace nox\helpers\exceptions;

    use yii\base\Exception;

    /**
     * Class InvalidVariableTypeException
     *
     * @package nox\helpers\exceptions
     */
    class InvalidVariableTypeException extends Exception
    {
        /**
         * @param string $type
         */
        public function __construct($type)
        {
            $this->message = "The variable must be of the type \"{$type}\".";
            $this->code    = 0;
        }
    }
