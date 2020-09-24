<html>
<head>
<title>Sign In form</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
	function myfunction() {
		var x=document.getElementById("select-user-form");
	if (x.style.display =="none") {
		x.style.display="block";
	}
	else{
		x.style.display="none";
	}
	}
	
</script>


</head>
<body>
<div class="sign-in-form">
<img src="usericon.png">
<h1>Sign In</h1>
<form method="get">
<input type="student_id" class="input-box" name="student_id" placeholder="your Student_Id" required >
<input type="password" class="input-box" name="password" placeholder="your password" required >
<input type="radio"class="check-box" name="check-box"><span> Forget password </span>
<button type="Submit" class="signIn-btn" a href="file:///C:/xampp/htdocs/index2.html" >sign In
</button>
<hr>
<p
	class="or">OR
</p>
</form>

<p class="message">NOT Registered? <button id="btn" onclick="myfunction()">Register</button></p>



<div id="select-user-form">
<h1>Select User</h1>
<form >
<input type="radio" id="admin" class="check-box" name="Select User" value="admin">Admin
<label for="admin"></label><br> 
<input type="radio" id="staff" class="check-box" name="Select User" value="staff">Staff
<label for="staff"></label><br>
<input type="radio" id="student" class="check-box" name="Select User" value="student">Student
<label for="student"></label><br>
 <a href="http://localhost/index2.html" class=button >Submit </a></button>

<script src="https://code.jquery.com/jquery-3.4.1.min.j"></script>
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
</form>
</div>


</div>



</body>
</html> 