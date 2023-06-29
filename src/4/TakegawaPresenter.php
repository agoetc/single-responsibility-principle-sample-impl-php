<?php /** @noinspection NonAsciiCharacters */

namespace Four;

use Four\JokeBook\AnimalHamaguchiJoKeBook;
use Four\JokeBook\InokiJokeBook;
use Four\JokeBook\TakegawaJokeBook;

class TakegawaPresenter
{
    public function startLT(): void
    {
        echo InokiJokeBook::getダー();
        echo InokiJokeBook::get苦しいときこそ過激に();
        echo AnimalHamaguchiJoKeBook::get気合();
        echo TakegawaJokeBook::getオイルinハンバーグ();
    }
}




