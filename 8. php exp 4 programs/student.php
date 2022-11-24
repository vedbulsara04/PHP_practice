<?php

interface Student
    {
public function getStudent();
}
interface Faculty
    {
public function getFaculty();
}
interface Admin
    {
public function getAdmin();
}

class StakeHolder implements Student,Faculty,Admin{
public function getStudent()
        {
echo "Ved <br>";
}
public function getFaculty()
        {
echo "Kabir <br>";
}
public function getAdmin()
        {
echo "Omkar <br>";
}
}

$obj= new StakeHolder();
$obj->getStudent();
$obj->getFaculty();
$obj->getAdmin();

?>