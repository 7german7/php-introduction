<?php

namespace Practices\OOP\Exercices;

require_once 'interfaces.php';
require_once 'person.php';
require_once 'professor.php';
require_once 'student.php';

$prof = new Professor(1, 'German', 'Ceballos', 'Systems Engineer');
echo $prof->id.'<br>';
echo $prof->name.'<br>';
echo $prof->lastName.'<br>';
echo $prof->specialty.'<br>';

echo '<h1>Hello!</h1><br>';
$prof->hello_prof();
$prof->hello_stud();
?>