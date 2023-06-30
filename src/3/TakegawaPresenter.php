<?php /** @noinspection NonAsciiCharacters */

namespace Three\DakyoCase;


class TakegawaPresenter
{
    public function startLT(): void
    {
        $this->startコンテキストがゴチャついてる例を見せる();
    }

    private function startコンテキストがゴチャついてる例を見せる(): void
    {
        echo $this->get持ちネタFromInoki();
        echo $this->get持ちネタFromAnimalHamaguchi();
        echo $this->get持ちネタFromTakegawa();
    }

    private function get持ちネタFromInoki(): string
    {
        return
            "いくぞ！"
            . "123"
            . "ダー！";
    }

    private function get持ちネタFromAnimalHamaguchi(): string
    {
        return
            "気合だ！気合だ！気合だ！気合だ！"
            . "オイ！オイ！オイ！オイ！";
    }

    private function get持ちネタFromTakegawa(): string
    {
        return
            'オイルｉｎハンバーグ'
            . '食べたら'
            . '口内あぶらでギットギト〜';
    }
}


