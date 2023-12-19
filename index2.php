<?php
$Studentname = $Fathername=$Mothername =$gender = $email = $birthday = $Address = "";
$_SERVER['REQUEST_METHOD'] === 'TRUE';
$Studentname = $_POST['studentname'];
$Fathername = $_POST['fathername'];
$Mothername = $_POST['mothername'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$Address = $_POST['address'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reg";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO students (studentname , fathername, mothername,gender, email , birthday, address )
VALUES ('$Studentname', '$Fathername', '$Mothername' , '$gender','$email' ,'$birthday' ,'$Address')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>