<?php

class User
{
    protected $firstName;
    protected $lastName;
    protected $email;
    public function setFirstName($name)
    {
        $this->firstName = $name;
        return $this;
    }
    public function setLastName($last)
    {
        $this->lastName = $last;
        return $this;
    }
        public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
        public function __toString()
    {
        return $this->firstName . ' ' . $this->lastName . "< " . $this->email . '>';
    }

}
$user = new User();
$user->setFirstName('John')
    ->setLastName('Doe')
    ->setEmail('john.doe@example.com');
echo $user;





