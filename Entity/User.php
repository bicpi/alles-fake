<?php

/**
 * @\Doctrine\ORM\Mapping\Entity()
 */
class User
{
    /**
     * @\Doctrine\ORM\Mapping\Column(type="integer")
     * @\Doctrine\ORM\Mapping\Id()
     * @\Doctrine\ORM\Mapping\GeneratedValue()
     */
    private $id;

    /**
     * @\Doctrine\ORM\Mapping\Column()
     */
    private $name;

    /**
     * @\Doctrine\ORM\Mapping\Column()
     */
    private $email;

    /**
     * @\Doctrine\ORM\Mapping\Column()
     */
    private $street;

    /**
     * @\Doctrine\ORM\Mapping\Column()
     */
    private $zip;

    /**
     * @\Doctrine\ORM\Mapping\Column()
     */
    private $favoriteColor;

    /**
     * @\Doctrine\ORM\Mapping\Column()
     */
    private $timezone;

    /**
     * @\Doctrine\ORM\Mapping\Column(type="text", nullable=true)
     */
    private $bio = null;

    /**
     * @\Doctrine\ORM\Mapping\Column(type="array")
     */
    private $skills;

    /**
     * @\Doctrine\ORM\Mapping\Column(type="datetime", nullable=true)
     */
    private $lastLogin = null;

    public function getId()
    {
        return $this->id;
    }

    public function setBio($bio = null)
    {
        $this->bio = $bio;

        return $this;
    }

    public function getBio()
    {
        return $this->bio;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setFavoriteColor($favoriteColor)
    {
        $this->favoriteColor = $favoriteColor;

        return $this;
    }

    public function getFavoriteColor()
    {
        return $this->favoriteColor;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setSkills(array $skills)
    {
        $this->skills = $skills;

        return $this;
    }

    public function getSkills()
    {
        return $this->skills;
    }

    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    public function getTimezone()
    {
        return $this->timezone;
    }

    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    public function getZip()
    {
        return $this->zip;
    }

    public function setLastLogin(\DateTime $lastLogin = null)
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    public function getLastLogin()
    {
        return $this->lastLogin;
    }
}