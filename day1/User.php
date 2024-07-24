<?php

class User
{
    protected $firstName;
    protected $lastName;
    protected $email;
    public function setFirstName($name)
    {
        $this->firstName = $name;
    }
    public function setLastName($last)
    {
        $this->lastName = $last;
    }
        public function setEmail($email)
    {
        $this->email = $email;
    }


}
$user = new User();
$user->setFirstName('John');
$user->setLastName('Doe');
$user->setEmail('john.doe@example.com');
