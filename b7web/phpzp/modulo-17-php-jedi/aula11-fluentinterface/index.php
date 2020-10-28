<?php
class Person
{
    private $name;
    private $lastname;
    private $age;

    public function setName($n)
    {
        $this->name = $n;
        return $this;
    }

    public function setLastName($n)
    {
        $this->lastname = $n;
        return $this;
    }

    public function setAge($n)
    {
        $this->age = $n;
        return $this;
    }

    public function getFullName()
    {
        return $this->name . ' ' .$this->lastname . ' = Age ' . $this->age;
    }
}

$person = new Person();
$person->setName('Rogerio')->setLastName('Alves Silva')->setAge(30);

echo $person->getFullName();