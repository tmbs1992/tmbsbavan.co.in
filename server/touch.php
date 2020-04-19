
<?php include '../server/config.php'; ?>

<?php

 if(isset($_POST['submit']))
 {
// create a variable

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$comments=$_POST['comments'];
//Execute the query
$sql="INSERT INTO info(first_name,last_name,phone,email,comments) VALUES (:first_name,:last_name,:phone,:email,:comments)";			
$query = $dbh->prepare($sql);
$query->bindParam(':first_name',$first_name,PDO::PARAM_STR);
$query->bindParam(':last_name',$last_name,PDO::PARAM_STR);
$query->bindParam(':phone',$phone,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':comments',$comments,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo"<script>alert('Thank you for contacting us. We will be in touch with you very soon.');
		  window.location.href = '../index.php';</script>";
}
else 
{
echo"<script>alert('Something went wrong. Please try again');
	window.location.href = '../contact.php';</script>";
}

}
?>