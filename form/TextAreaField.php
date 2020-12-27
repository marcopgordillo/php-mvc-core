<?php

namespace App\core\form;

use App\core\Model;

class TextAreaField extends BaseField
{
    public const TYPE_TEXT = "text";
    public const TYPE_EMAIL = "email";
    public const TYPE_PASSWORD = "password";
    public const TYPE_NUMBER = "number";

    public function __construct(Model $model, string $attribute)
    {
        parent::__construct($model, $attribute);
    }

    public function renderInput(): string
    {
        return sprintf('<textarea id="%s" name="%s" class="form-control%s" rows="3">%s</textarea>',
            $this->attribute, 
            $this->attribute,
            $this->model->hasError($this->attribute) ? ' is-invalid' : '',
            $this->model->{$this->attribute},
        );
    }
}