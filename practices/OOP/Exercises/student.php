<?php

namespace Practices\OOP\Exercices;

class Student extends Person {
    public $carrera;

    public function __construct($id, $name, $lastName, $carrera) {
        parent::__construct($id, $name, $lastName);
        $this->carrera = $carrera;
    }
}

?>