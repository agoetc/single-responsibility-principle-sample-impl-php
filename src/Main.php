<?php

namespace Main;


class Main
{
    function run()
    {
        $login_user = LoginUser::getLoginUser();

        if (is_null($login_user)) {
            // 未ログイン時のロジック
            // 未ログイン時のロジック
            // 未ログイン時のロジック
            // 未ログイン時のロジック
            return; // 未ログイン時の返り値
        }

        if ($login_user->isSSO()) {
            // SSO時のロジック
            // SSO時のロジック
            // SSO時のロジック
            // SSO時のロジック
            return; // SSO時の返り値
        }


        return; // 上記すべてに当てはまらなかった場合のロジック
    }

    function hoge(): string
    {
        if ($is_login) {
            return 'login.html';
        } else {
            return 'no_login.html';
        }
    }

    function run()
    {
        if ($is_login) {
            return 'no_login';
        } else {
            return $this->logined_fun();
        }
    }

    function logined_fun()
    {
        if ($is_kddi) {
            return $this->kddi_fun();
        } else {
            return $this->nomal_fun();
        }
    }

    function kddi_fun(): string
    {
        return 'kddi';
    }

    function nomal_fun(): string
    {
        return 'nomal';
    }

}


class 早期によるコンテキストの引き継ぎ
{

}

class Hoge
{

}