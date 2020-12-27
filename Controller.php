<?php

namespace App\core;

use App\core\middlewares\BaseMiddleware;

abstract class Controller
{
    public string $layout = 'main';
    public string $action = '';

    /**
     * @var BaseMiddleware
     */
    protected array $middlewares = [];

    protected function render($view, $params = [])
    {
        return Application::$app->view->renderView($view, $params);
    }

    protected function setLayout($layout)
    {
        $this->layout = $layout;
    }

    protected function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}