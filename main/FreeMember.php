<?php

namespace Main;

class FreeMember extends User
{

    public function canNotPostJobs()
    {
        return 'I Can not post jobs <br/> ';
    }
}