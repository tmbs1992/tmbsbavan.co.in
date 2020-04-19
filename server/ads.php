
<?php include '../server/config.php'; ?>

<?php

 if(isset($_POST['submit']))
 {
// create a variable

$first_name=$_POST['first_name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$file= addslashes(file_get_contents($_FILES["image_location"]["tmp_name"]));
//Execute the query
$sql="INSERT INTO tbl_ads(first_name,phone,email,image_location) VALUES (:first_name,:phone,:email,:file)";			
$query = $dbh->prepare($sql);
$query->bindParam(':first_name',$first_name,PDO::PARAM_STR);
$query->bindParam(':phone',$phone,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':file',$file,PDO::PARAM_STR);
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
	window.location.href = '../index.php';</script>";
}

}
?>