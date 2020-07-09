<?php  

namespace Practices\OOP\Exercices;

class Person implements Metodos {
    public $id;
    public $name;
    public $lastName;

    public function __construct($id, $name, $lastName) {
        $this->id = $id;
        $this->name = $name;
        $this->lastName = $lastName;
    }

    public function hello_stud(){
        echo 'Hello Students';
    }

    public function hello_prof(){
        echo 'Hello Professors';
    }
}

?>