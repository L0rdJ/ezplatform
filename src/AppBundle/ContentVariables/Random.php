<?php

namespace AppBundle\ContentVariables;

use ContextualCode\EzPlatformContentVariables\Variable\Value\Callback;

class Random extends Callback
{
    protected $identifier = 'random';

    public function getValue(): string
    {
        return rand(0, 100);
    }
}