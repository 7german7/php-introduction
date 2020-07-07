<?php

/*Ejercicios de Programación Orientada a Objetos: Creando una clase*/

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

    public function getLastName(){
        return $this->lastName;
    }

    public function getAge(){
        return $this->age;
    }
}

$per1 = new Person('German', 'Ceballos', 27);
$data = $per1->getPerson();
echo '<h1>Imprimiendo atributos desde metodo de la clase</h1><br>';
var_dump($data);

echo '<h1>Imprimiendo atributos de la clase directamente</h1><br>';
echo $per1->name.'<br>';
//echo $per1->lastName;
//echo $per1->age;
echo $per1->getLastName().'<br>';
echo $per1->getAge().'<br>';

/*

Conclusión:
La visibilidad en las propiedades de las clases pueden ser accedidas desde fuera cuando:

public: se puede llamar directamente o utilizando un método.
private: desde un método de la misma clase.
protected: desde un método de la misma clase.

*/

?>