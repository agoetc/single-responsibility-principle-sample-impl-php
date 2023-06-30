<?php /** @noinspection NonAsciiCharacters */

namespace Finish\Presenter;

use Finish\LT\RemoveBikkuriLT;
use Finish\LT\SplitContextLT;

class TakegawaPresenter
{
    public function startLT(): void
    {
        $removeBikkuriLT = new RemoveBikkuriLT();
        $splitContextLT = new SplitContextLT($removeBikkuriLT);

        $splitContextLT->start();
    }
}
