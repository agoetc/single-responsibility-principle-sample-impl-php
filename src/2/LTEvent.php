<?php

namespace Two;

class LTEvent
{
    public function start(): void
    {
        $presenter = new TakegawaPresenter();
        $presenter->startLT();
    }
}

