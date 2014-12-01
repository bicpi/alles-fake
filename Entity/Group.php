<?php

class Group
{
    public $barfoo;
    private $user;

    public function setUser(User $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }
}