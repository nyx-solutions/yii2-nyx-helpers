<?php

    namespace nox\helpers\exceptions;

    use Throwable;
    use yii\base\Exception;

    /**
     * Class InvalidVariableTypeException
     *
     * @package nox\helpers\exceptions
     */
    class InvalidVariableTypeException extends Exception
    {
        /**
         * @inheritdoc
         */
        public function __construct($message = "", $code = 0, Throwable $previous = null)
        {
            $message = "The variable must be of the type \"{$message}\".";

            parent::__construct($message, $code, $previous);
        }
    }
