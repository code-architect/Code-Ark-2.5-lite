<?php


namespace codearchitect\codearklite;

use codearchitect\codearklite\middlewares\BaseMiddleware;

/**
 * Class Controller
 *
 * @author: Indranil Samanta (code-architec)
 * @package codearchitect\codearklite
 */
class Controller
{
    public string $layout = "main";
    public string $action = '';
    /**
     * @var BaseMiddleware[]
     */
    protected array $middlewares = [];

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function render($view, $params = [])
    {
        return Application::$app->view->renderView($view, $params);
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    /**
     * @return BaseMiddleware[]
     */
    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }

    /**
     * @param BaseMiddleware[] $middlewares
     */
    public function setMiddlewares(array $middlewares): void
    {
        $this->middlewares = $middlewares;
    }


}