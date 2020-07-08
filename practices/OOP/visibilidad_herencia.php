<?php

class Person {
    // Atributes
    public $name;
    private $lastName;
    protected $age;

    //Methods
    public function __construct($name, $lastName, $age) {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function getPerson(){
        return [
            $this->name,
            $this->lastName,
            $this->age
        ];
    }
}

class Student extends Person {
    /*
    public function __construct($name, $lastName, $age){
        parent::__construct($name, $lastName, $age);
    }
    */

    public function getLastName(){
        return $this->lastName;
    }

    public function getAge(){
        return $this->age;
    }
}

$student = new Student('German', 'Ceballos', 27);
echo $student->name.'<br>';
//echo $student->lastName;
//echo $student->age;
echo $student->getLastName().'<br>';
echo $student->getAge().'<br>';

/*

Conclusión:
La visibilidad en las propiedades de las clases padres pueden ser accedidas desde las clases hijas cuando:

public: se puede llamar directamente o utilizando un método.
private: desde un método de la misma clase padre, desde un método de la clase hija no se puede.
protected: se puede llamar con un método de la clase hija.

*/

?>