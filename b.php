<?php
  include('config.php');  
  if(isset($_POST['submit']))
  {
    $name = $_POST['name'];  
    $username = $_POST['username'];  
    $phone = $_POST['phone'];

    $password = $_POST['password'];   
$sql = "insert into admin (name,username,phone,password ) VALUES ('$name','$username',$phone,'$password')";
$result=mysqli_query($conn ,$sql);
if($result)
   {
    echo "<h1><center> alert('Login successful') </center></h1>";  
    header("Location: http://localhost/r/");
}  
else
{  
    echo "<h1> alert('Login failed. Invalid username or password.')</h1>";  
    header("Location: http://localhost/r1/");
} 
  }     

?>
