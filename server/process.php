<?php include '../server/promo.php'; ?>

<?php
 
// create a variable
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$Brahmin=$_POST['Brahmin'];
$Birth_date=$_POST['Birth_date'];
$Gothra=$_POST['Gothra'];
$Gender=$_POST['Gender'];
$email=$_POST['email'];
$password=md5($_POST['password']); 
$Phone=$_POST['Phone'];
$Village=$_POST['Village'];
$City=$_POST['City'];
$State=$_POST['State'];
$PinCode=$_POST['PinCode'];

//Execute the query
 
 
mysqli_query($connect,"INSERT INTO register (first_name,last_name,Brahmin,Birth_date,Gothra,Gender,email,password,Phone,Village,City,State,PinCode)
		        VALUES ('$first_name','$last_name','$Brahmin','$Birth_date','$Gothra','$Gender','$email','$password','$Phone','$Village','$City','$State','$PinCode')");
				
	if(mysqli_affected_rows($connect) > 0){
	      echo"<script>alert('Registration Successful');
		  window.location.href = '../index.php';</script>";
} else {
	echo"<script>alert('Something went wrong. Please try again');
	window.location.href = '../Register.php';</script>";
	echo mysqli_error ($connect);
}