<?php
require_once 'ProcessOOP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = trim($_POST["id"]);
  $name = trim($_POST["name"]);
  $age = trim($_POST["age"]);
  $grade = trim($_POST["grade"]);
  
  $students = new StudentDAO();

  // Kiểm tra xem id đã tồn tại hay chưa
  if ($students->read($id)) {
    echo "Student ID already exists";
  } else {
    $student = new Student($id, $name, $age, $grade);
    $students->create($student);

    // Ghi vào file DSSV.txt
    $file = fopen("DSSV.txt","a");
    fwrite($file, "\n" . $id . "," . $name . "," . $age . "," . $grade);
    fclose($file);

    echo "Student added successfully";
  }
}
?>