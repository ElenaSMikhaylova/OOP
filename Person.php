<?php
class Person
{
    // здоровье человека не может быть больше 100
    private $name;
    private $lastname;
    private $age;
    private $hp;
    private $mother;
    private $father;



    function __construct($name, $lastname, $age, $mother = null, $father = null)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->mother = $mother;
        $this->father = $father;
        $this->hp = 100;
    }
    function sayHi($name)
    {
        return "Hi, $name, I m " . $this->name;
    }
    function setHP($hp)
    {
        if ($this->hp + $hp >= 100) $this->hp = 100;
        else $this->hp = $this->hp + $hp;
    }
    function getHP()
    {
        return $this->hp;
    }
    function getAge()
    {
        return $this->age;
    }
    function getName()
    {
        return $this->name;
    }
    function getLastname()
    {
        return $this->lastname;
    }
    function getMother()
    {
        return $this->mother;
    }
    function getFather()
    {
        return $this->father;
    }
    function getInfo()
    {
        return "<h3>Несколько слово обо мне</h3>"
            . "<br> Мое имя: " . $this->getName()
            . "<br> Моя фамилия: " . $this->getLastname()
            . "<br> Мою маму зовут : " . $this->getMother()->getName()
            . "<br>  Ей: " . $this->getMother()->getAge()
            . "<br> Мамину маму зовут : " . $this->getMother()->getMother()->getName()
            . "<br>  Ей: " . $this->getMother()->getMother()->getAge()
            . "<br> Маминого папу зовут : " . $this->getMother()->getFather()->getName()
            . "<br>  Ему: " . $this->getMother()->getFather()->getAge()
            . "<br> Моего папу зовут : " . $this->getFather()->getName()
            . "<br> Ему : " . $this->getFather()->getAge()
            . "<br> Папину маму зовут : " . $this->getFather()->getMother()->getName()
            . "<br>  Ей: " . $this->getFather()->getMother()->getAge()
            . "<br> Папиного папу зовут : " . $this->getFather()->getFather()->getName()
            . "<br>  Ему: " . $this->getFather()->getFather()->getAge()


            . " ";
    }
}


$max = new Person("Максим", "Иванов", 62);
$mary = new Person("Мария", "Иванова", 63);
$igor = new Person("Игорь", "Петров", 68);
$inna = new Person("Инна", "Петрова", 65);
$alex = new Person("Алексей", "Иванов", 42, $mary, $max);
$olga = new Person("Ольга", "Иванова", 42, $inna, $igor);
$valera = new Person("Валера", "Иванов", 15, $olga, $alex);

echo $valera->getInfo();

/* 
echo $valera->getMother()->getName();
echo $valera->getMother()->getFather()->getName();

 
$medKit = 50;
$alex->setHP(-30); //упал
echo $alex->getHP() . "<br>";
$alex->setHP($medKit);  //нашел аптечку"
echo $alex->getHP(); 

echo $alex->sayHi($igor->name);
$alex->name = "Alex";
echo $alex->name;  */
