<?php

namespace FuseSource\Stomp\Exception;

use Exception;

class UnsupportedProtocolException extends \RuntimeException
{
    public function __construct($message = "", $code = 0, Exception $previous = null)
    {
        parent::__construct(rtrim('unsupported protocol level(s) ' . $message), $code, $previous);
    }

}