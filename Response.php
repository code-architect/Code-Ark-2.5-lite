<?php
namespace codearchitect\codearklite;

/**
 * Class Response
 * @author: Indranil Samanta (code-architec)
 * @package codearchitect\codearklite
 */
class Response
{
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }
}