<?php

namespace Main;

class LoginUser
{
    public function __construct(
        Profile $user
    )
    {
    }


    static public function getLoginUser(): ?LoginUser
    {
        return new LoginUser(new Profile());
    }

    public function isSSO(): bool {
        return false; // mock
    }
}