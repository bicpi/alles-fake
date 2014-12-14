<?php

class Team
{
    private $name;

    private $lead;

    private $members;

    public function setName($title)
    {
        $this->name = $title;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setLead(User $lead)
    {
        $this->lead = $lead;
    }

    public function getLead()
    {
        return $this->lead;
    }

    public function setMembers(array $members)
    {
        $this->members = $members;
    }

    public function addMember(User $member)
    {
        $this->members[] = $member;
    }

    public function getMembers()
    {
        return $this->members;
    }
}