<?php

namespace Practices\OOP\Exercices;

class Professor extends Person {
    public $specialty;

    public function __construct($id, $name, $lastName, $specialty) {
        parent::__construct($id, $name, $lastName);
        $this->specialty = $specialty;
    }
}

?>