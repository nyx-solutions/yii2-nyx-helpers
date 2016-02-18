<?php

    namespace common\components\helpers\exceptions;

    use Exception;

    /**
     * Class InvalidVariableTypeException
     *
     * @package common\components\helpers\exceptions
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
