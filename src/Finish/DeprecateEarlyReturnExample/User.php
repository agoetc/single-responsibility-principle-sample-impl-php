<?php

namespace Finish\EarlyReturnExample;


class User {
    public function __construct()
    {
    }

    static function getLoginUser(): ?User
    {
        return new User();
    }

    public function isPaidPlan():bool
    {
        return true;
    }

    public function over20old():bool
    {
        return true;
    }
}
