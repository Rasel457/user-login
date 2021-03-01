<!DOCTYPE html>
<html>
<head>
	<title>Registration Form Action</title>
</head>
<body>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
         if(empty ($_POST['fname']) && empty($_POST['lname'])&&empty($_POST['gender'])&&empty($_POST['email'])&&empty($_POST['uname'])&&empty($_POST['password'])&&empty($_POST['recemail'])){
         	echo "fill up the from properly";
         }
         else{
         	$firstName=$_POST['fname'];
	        $lastName=$_POST['lname'];
	        $gender=$_POST['gender'];
	        $email =$_POST['email'];
	        $user=$_POST['uname'];
	        $password=$_POST['password'];
	        $Remail=$_POST['recemail'];
	        echo "Firset Name:  $firstName "."<br>";
	        echo "Last Name:  $lastName "."<br>";
	        echo"Gender:  $gender" ."<br>";
	        echo"Email:  $email" ."<br>";
	        echo"User Name:  $user" ."<br>";
	        echo "Password:  $password" ."<br>"; 
	        echo"Recovary Email:  $Remail" ."<br>";
	        echo "<h2>Successful</h2> ";
	        $W=fopen("Information.txt","a");
	        fwrite($W,$firstName ."\n");
	        fwrite($W,$lastName ."\n");
            fwrite($W,$gender ."\n");
	        fwrite($W,$email."\n");
	        fwrite($W,$user."\n");
	        fwrite($W,$password ."\n");
	        fwrite($W,$Remail."\n");
	       





         }
		
	}
	

	


	?>

</body>
</html>