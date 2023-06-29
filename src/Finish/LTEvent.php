<?php

namespace Finish;

class LTEvent
{
    public function start(): void
    {
        $presenter = new TakegawaPresenter();
        $presenter->startLT();
    }
}

