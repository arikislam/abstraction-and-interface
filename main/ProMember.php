<?php

namespace Main;

class ProMember extends User
{
    public function canPostJobs()
    {
        return 'I Can post jobs';
    }
}