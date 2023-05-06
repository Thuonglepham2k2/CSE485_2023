
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
    //public $grade;
    
    public function __construct($id,$name,$age)
    {
      $this->id=$id;
      $this->name=$name;
      $this->age=$age;
      //$this->grade=$grade;
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
    // public function getGrade(){
    //   return $this->grade;
    // }
    
    public function setId($id){
      $this->id=$id;
    }
    public function setName($name){
      $this->name=$name;
    }
    public function setAge($age){
      $this->age=$age;
    }
    // public function setGrade($grade){
    //   $this->grade=$grade;
    // }
    
    
  }

  class StudentDAO {
    public Student $student;
      // $student =array(); 
    public $grade;

    public function __construct(Student $student, $grade)
    {
      $this->student=$student;
      $this->grade=$grade;
    }
    // public function read(){

    // }


  
  }

  
?>