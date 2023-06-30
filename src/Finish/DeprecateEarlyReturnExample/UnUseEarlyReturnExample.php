<?php

namespace Finish\EarlyReturnExample;


class UnUseEarlyReturnExample
{
    public function run(): UserType
    {
        $nullable_user = User::getLoginUser();

        if (is_null($nullable_user)) {
            return UserType::NoLogin;
        } else {
            if ($nullable_user->over20old()) {
                return UserType::NoTargetUser;
            } else {
                return UserType::TargetUser;
            }
        }
    }

}



