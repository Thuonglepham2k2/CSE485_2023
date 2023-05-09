
<form id="student-form">
  <label for="id">ID:</label>
  <input type="text" id="id" name="id" required><br>

  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required><br>

  <label for="age">Age:</label>
  <input type="number" id="age" name="age" required><br>


  <label for="address">Grade:</label>
  <input type="text" id="grade" name="grade" required><br>

  <input type="submit" value="Submit">
</form>

<?php
  class Student {
    public $id;
    public $name;
    public $age;
    private $grade;
    
    public function __construct($id,$name,$age,$grade)
    {
      $this->id=$id;
      $this->name=$name;
      $this->age=$age;
      $this->grade = $grade;
    }

    public function getId(){
      return $this->id;
    }
    public function getName(){
      return $this->name;
    }
    public function getAge(){
      return $this->age;
    }
    public function getGrade(){
      return $this->grade;
    }
    
    public function setId($id){
      $this->id=$id;
    }
    public function setName($name){
      $this->name=$name;
    }
    public function setAge($age){
      $this->age=$age;
    }
    public function setGrade($grade){
      $this->grade=$grade;
    }
    
    
  }

//   class StudentDAO {
//     private $students;

//     public function __construct() {
//         $this->students = array();
//     }

//     public function create($student) {
//         array_push($this->students, $student);
//     }

//     public function read($id) {
//         foreach ($this->students as $student) {
//             if ($student->getId() == $id) {
//                 return $student;
//             }
//         }
//         return null;
//     }

//     public function update($student) {
//         $key = array_search($student, $this->students);
//         if ($key !== false) {
//             $this->students[$key] = $student;
//         }
//     }

//     public function delete($student) {
//         $key = array_search($student, $this->students);
//         if ($key !== false) {
//             unset($this->students[$key]);
//         }
//     }

//     public function getAll() {
//         return $this->students;
//     }
// }

  
?>