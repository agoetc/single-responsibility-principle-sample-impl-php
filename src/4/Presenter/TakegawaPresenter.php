<?php /** @noinspection NonAsciiCharacters */

namespace Four\Presenter;

use Four\LT\RemoveBikkuriLT;
use Four\LT\SplitContextLT;

class TakegawaPresenter
{
    public function startLT(): void
    {
        $removeBikkuriLT = new RemoveBikkuriLT();
        $lt = new SplitContextLT($removeBikkuriLT);

        $lt->start();
    }
}


