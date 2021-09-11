<?php

namespace Main;

abstract class User
{

    public function name()
    {
        return 'User has a name <br/>  ';
    }

    public function email()
    {
        return 'User has an email <br/>';
    }


    public function subscriptionToSocialMedia(Subscribe $subscribe)
    {
        return $subscribe->subscriptionJobs();
    }
}