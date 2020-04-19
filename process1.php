<?php include 'conn.php'; ?>

<?php
 
// create a variable
$first_name=mysqli_real_escape_string($connction,$_POST['first_name']);
$last_name=mysqli_real_escape_string($connction,_POST['last_name']);
$Brahmin=mysqli_real_escape_string($connction,_POST['Brahmin']);
$Birth_date=mysqli_real_escape_string($connction,_POST['Birth_date']);
$Gothra=mysqli_real_escape_string($connction,_POST['Gothra']);
$Gender=mysqli_real_escape_string($connction,_POST['Gender']);
$email=mysqli_real_escape_string($connction,_POST['email']);
$password=md5($_POST['password']); 
$Phone=mysqli_real_escape_string($connction,_POST['Phone']);
$Village=mysqli_real_escape_string($connction,_POST['Village']);
$City=mysqli_real_escape_string($connction,_POST['City']);
$State=mysqli_real_escape_string($connction,_POST['State']);
$PinCode=mysqli_real_escape_string($connction,_POST['PinCode']);

//Execute the query
 
 
mysqli_query($connect,"INSERT INTO register (first_name,last_name,Brahmin,Birth_date,Gothra,Gender,email,password,Phone,Village,City,State,PinCode)
		        VALUES ('$first_name','$last_name','$Brahmin','$Birth_date','$Gothra','$Gender','$email','$password','$Phone','$Village','$City','$State','$PinCode')");
				
	if(mysqli_affected_rows($connect) > 0){
	      echo"<script>alert('Thank you for contacting us. We will be in touch with you very soon.');
		  window.location.href = 'index.php';</script>";
} else {
	echo"<script>alert('Something went wrong. Please try again');
	window.location.href = 'Register.php';</script>";
	echo mysqli_error ($connect);
}