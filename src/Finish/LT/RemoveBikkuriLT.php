<?php /** @noinspection NonAsciiCharacters */

namespace Finish\LT;

class RemoveBikkuriLT
{
    public function start(): void
    {
        $this->コンテキストが大量に含まれている例を述べる();
        $this->コンテキストを少しずつ分割し、ビックリを取り除いていく();
        $this->ビックリしない例を述べる();
    }

    private function コンテキストが大量に含まれている例を述べる(): void
    {
        echo 'いくぞ！';
        echo '123';
        echo 'ダー！';

        echo '気合だ！気合だ！気合だ！気合だ！';
        echo 'オイ！オイ！オイ！オイ！';

        echo 'オイルｉｎハンバーグ';
        echo '食べたら';
        echo '口内あぶらでギットギト〜';
    }

    private function コンテキストを少しずつ分割し、ビックリを取り除いていく(): void
    {
        // 省略
    }

    private function ビックリしない例を述べる(): void
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