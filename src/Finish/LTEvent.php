<?php

namespace Finish;

use Finish\Presenter\InokiPresenter;
use Finish\Presenter\OtherPresenter;
use Finish\Presenter\TakegawaPresenter;

class LTEvent
{
    public function start(): void
    {
        $inoki_presenter = new InokiPresenter();
        $inoki_presenter->startLT();

        $presenter = new TakegawaPresenter();
        $presenter->startLT();

        $other_presenter = new OtherPresenter();
        $other_presenter->startLT();
    }
}

