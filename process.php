<html>
    <title>kips</title>
    <body>
<?php
        
$name = $_POST['name'];
$email =$_POST['email'];
$phone =$_POST['phone']; 
        
         echo "Welcome ".$name;

$connect=mysqli_connect('localhost','root','','kips');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

 mysqli_query($connect,"INSERT INTO ajax (name,email,phone)
		        VALUES ('$name','$email','$phone')");
if(mysqli_affected_rows($connect) > 0){
	echo "<p>Employee Added</p>";
} else {
	echo "Employee NOT Added<br />";
	echo mysqli_error ($connect);
}
   
?>
 </body>       
</html>       