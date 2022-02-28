<?php


namespace codearchitect\codearklite\exception;

/**
 * @author: Indranil Samanta (code-architec)
 * Class ForbiddenException
 * @package codearchitect\codearklite\exception
 */
class ForbiddenException extends \Exception
{
    protected $code = 403;
    protected $message = "You don't have permission to access this page";
}