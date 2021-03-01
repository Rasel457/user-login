<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Log In Form</title>
</head>

<body>
   
  <?php
  $user=$password="";
  if ($_SERVER["REQUEST_METHOD"] == "GET") {
         if(empty($_GET['uname'])||empty($_GET['password'])){
          echo "<h2>Fill up the from properly</h2>";
         }
         else{
         
          $user=trim($_GET['uname']);
          $password=trim($_GET['password']);
          //echo"User Name:  $user" ."<br>";
          //echo "Password:  $password" ."<br>"; 
          
           
        }
       
    
  }?>
  
  <?php
  if(isset($_GET['uname'])){
     
     $_SESSION['name']=$_GET['uname'];
     $f=fopen("Information.txt", "r");
     $data=fread($f,filesize("Information.txt"));
     $data_filter=explode("\n",$data);


     $_SESSION['fname']=$data_filter[0];
     $_SESSION['lname']=$data_filter[1];
     $_SESSION['email']=$data_filter[3];
     echo $_SESSION['name']."<br>";
     echo $_SESSION['fname']."<br>";
     echo $_SESSION['lname']."<br>";
     echo $_SESSION['email']."<br>";
  }


  ?>


	<h2>Login Form</h2>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="GET">
	 <div>
    <label for="uname"><b>Username</b></label><br>	
    <input type="text" placeholder="Enter Username" name="uname" required>
    <br><br>

    <label for="psw"><b>Password </b></label><br>	
    <input type="password" placeholder="Enter Password" name="password" required>
    <br><br>
        
    <button type="submit">Login</button>
    <br>
    
  </div>

  <div >
  	<br>
    <button type="button">Cancel</button>
  
  </div>


	</form>

</body>
</html>