<?php

namespace App\core\exceptions;

use Exception;

class NotFoundException extends Exception
{
    public function __construct()
    {
        parent::__construct("Not found", 404);
    }
}