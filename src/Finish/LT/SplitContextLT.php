<?php /** @noinspection NonAsciiCharacters */

namespace Finish\LT;

class SplitContextLT
{
    public function __construct(
        private readonly RemoveBikkuriLT $removeBikkuriLT
    )
    {
    }

    public function start(): void
    {
        $this->大量のコンテキストが含まれている例から、コンテキストを分割する実演をする($this->removeBikkuriLT);
        $this->責務を１つにしたコードの良い点を述べる();
        $this->責務を分割すると、コメント無くても読めることを証明する();
        $this->「単一責任の原則」の説明をする();
        return;
    }

    private function 大量のコンテキストが含まれている例から、コンテキストを分割する実演をする(RemoveBikkuriLT $removeBikkuriLT): void
    {
        $removeBikkuriLT->start();
    }

    private function 責務を１つにしたコードの良い点を述べる(): void
    {
        echo '初見でもビックリしない';
        echo 'コメントなしでもまぁ読める';
        echo 'コードの再利用性が上がる';
        echo 'テストが書きやすくなる';
    }


    private function 責務を分割すると、コメント無くても読めることを証明する(): void
    {
        // now
    }

    private function 「単一責任の原則」の説明をする(): void
    {
        echo 'クラスは１つの責務を持つべき';
        echo 'メソッドは１つの責務を持つべき';
    }

}