<?php

namespace Finish\EarlyReturnExample;

enum UserType: string
{
    case TargetUser = 'target_user';
    case NoTargetUser = 'no_target_user';
    case NoLogin = 'no_login';
}
