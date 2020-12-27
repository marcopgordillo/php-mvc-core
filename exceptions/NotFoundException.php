<?php

namespace marcopgordillo\phpmvc\exceptions;

use Exception;

class NotFoundException extends Exception
{
    public function __construct()
    {
        parent::__construct("Not found", 404);
    }
}