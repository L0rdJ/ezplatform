<?php

namespace AppBundle\ContentVariables;

use ContextualCode\EzPlatformContentVariables\Variable\Value\Callback;

class CurrentYear extends Callback
{
    protected $identifier = 'current_year';

    public function getValue(): string
    {
        return date('Y');
    }
}