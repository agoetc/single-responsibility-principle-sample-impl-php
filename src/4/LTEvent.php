<?php

namespace Four;

use Four\Presenter\TakegawaPresenter;

class LTEvent
{
    public function start(): void
    {
        $presenter = new TakegawaPresenter();
        $presenter->startLT();
    }
}

