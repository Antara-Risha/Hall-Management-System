<?php

$StudentID = filter_input(INPUT_GET,'student_id');
$password = filter_input(INPUT_GET,'password');

 if( !empty($StudentID)){
if( !empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "dormido";

$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);

if(mysqli_connect_error()){
die("Connect Error".mysqli_connect_error() );
}
else{
	echo "connect successfully";
$sql = "INSERT INTO logging2 (student_id,password) values ('$StudentID','$password')";
if($conn->query($sql)){
echo "logged In successfully.";
}
 else{
echo "Error: ".$sql."<br>".$conn->error;
}
$conn->close();
}
} 
else{
      echo "Password should not be empty." ;
       die();
}
  }
else{
    echo "StudentID shouldnot be empty." ;
    die();
}
  
?>