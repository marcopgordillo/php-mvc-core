<?php

namespace marcopgordillo\phpmvc;

use marcopgordillo\phpmvc\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}