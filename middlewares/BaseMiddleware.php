<?php

namespace marcopgordillo\phpmvc\middlewares;

abstract class BaseMiddleware
{
    abstract public function execute();
}