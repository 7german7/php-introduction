<?php

/*Ejercicios de Programación Orientada a Objetos: Creando una clase*/

class Person {
    // Atributes
    public $name;
    public $lastName;
    public $age;

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

$per1 = new Person('German', 'Ceballos', 27);
$data = $per1->getPerson();
var_dump($data);
?>