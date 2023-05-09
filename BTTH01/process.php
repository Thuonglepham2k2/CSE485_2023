<?php

class Student {
    private $id;
    private $name;
    private $age;

    // getters and setters for id
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    // getters and setters for name
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    // getters and setters for age
    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }
}
class StudentDao{
    private $students = array();

    // create a new student
    public function create(Student $student) {
        $this->students[] = $student;
    }

    // read a student by id
    public function read($id) {
        foreach ($this->students as $student) {
            if ($student->getId() == $id) {
                return $student;
            }
        }
        return null;
    }

    // update a student
    public function update(Student $student) {
        foreach ($this->students as &$s) {
            if ($s->getId() == $student->getId()) {
                $s = $student;
            }
        }
    }

    // delete a student by id
    public function delete($id) {
        foreach ($this->students as $key => $student) {
            if ($student->getId() == $id) {
                unset($this->students[$key]);
            }
        }
    }

    // get all students
    public function getAll() {
        return $this->students;
    }
}
?>