<?php

namespace Three\DakyoCase;

class LTEvent
{
    public function start(): void
    {
        $presenter = new TakegawaPresenter();
        $presenter->startLT();
    }
}

