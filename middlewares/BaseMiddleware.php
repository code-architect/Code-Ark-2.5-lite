<?php


namespace codearchitect\codearklite\middlewares;

/**
 * @author: Indranil Samanta (code-architec)
 * Class BaseMiddleware
 * @package codearchitect\codearklite\middlewares
 */
abstract class BaseMiddleware
{
    abstract public function execute();
}