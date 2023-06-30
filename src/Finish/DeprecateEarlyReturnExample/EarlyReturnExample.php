<?php

namespace Finish\EarlyReturnExample;

class EarlyReturnExample
{
    public function run(): UserType
    {
        $user = User::getLoginUser();

        if (is_null($user)) {
            return UserType::NoLogin;
        }

        if ($user->over20old()) {
            return UserType::NoTargetUser;
        }

        return UserType::TargetUser;
    }
}



