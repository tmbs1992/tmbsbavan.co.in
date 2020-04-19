<?php include 'conn.php'; ?>
 
<?php
 
// create a variable
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$comments=$_POST['comments'];
//Execute the query
 
 
mysqli_query($connect,"INSERT INTO info (first_name,last_name,phone,email,comments)
		        VALUES ('$first_name','$last_name','$phone','$email','$comments')");
				
	if(mysqli_affected_rows($connect) > 0){
	      echo"<script>alert('Thank you for contacting us. We will be in touch with you very soon.');
		  window.location.href = 'index.html';</script>";
} else {
	echo"<script>alert('Something went wrong. Please try again');
	window.location.href = 'contact.html';</script>";
	echo mysqli_error ($connect);
}