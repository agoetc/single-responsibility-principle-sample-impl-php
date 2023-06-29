<?php /** @noinspection NonAsciiCharacters */

namespace Three;

use Three\JokeBook\AnimalHamaguchiJoKeBook;
use Three\JokeBook\InokiJokeBook;
use Three\JokeBook\TakegawaJokeBook;

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




