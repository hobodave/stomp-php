<?php

namespace FuseSource\Stomp\Exception;

use Exception;

class ProtocolErrorConnectException extends \RuntimeException
{
    public function __construct($message = "", $code = 0, Exception $previous = null)
    {
        parent::__construct(rtrim('protocol error on CONNECT ' . $message), $code, $previous);
    }

}