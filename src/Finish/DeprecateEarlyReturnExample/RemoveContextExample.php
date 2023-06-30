<?php

namespace Finish\EarlyReturnExample;


class RemoveContextExample
{
    public function checkTargetUser(): UserType
    {
        $user = User::getLoginUser();

        if (is_null($user)) {
            return $this->checkNoLoginUser();
        } else {
            return $this->checkAge($user);
        }
    }

    private function checkAge(User $user): UserType
    {
        if ($user->over20old()) {
            return UserType::NoTargetUser;
        } else {
            return UserType::TargetUser;
        }
    }

    private function checkNoLoginUser(): UserType
    {
        return UserType::NoLogin;
    }

}



