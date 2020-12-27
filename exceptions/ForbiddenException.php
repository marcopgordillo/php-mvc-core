<?php

namespace App\core\exceptions;

use Exception;

class ForbiddenException extends Exception
{
    public function __construct()
    {
        parent::__construct("You don't have permission to access this page.", 403);
    }
}