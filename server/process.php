
<?php include '../server/config.php'; ?>

<?php

 if(isset($_POST['submit']))
 {
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
$sql="INSERT INTO register(first_name,last_name,Brahmin,Birth_date,Gothra,Gender,email,password,Phone,Village,City,State,PinCode) 
									VALUES (:first_name,:last_name,:Brahmin,:Birth_date,:Gothra,:Gender,:email,:password,:Phone,:Village,:City,:State,:PinCode)";
$query = $dbh->prepare($sql);
$query->bindParam(':first_name',$first_name,PDO::PARAM_STR);
$query->bindParam(':last_name',$last_name,PDO::PARAM_STR);
$query->bindParam(':Brahmin',$Brahmin,PDO::PARAM_STR);
$query->bindParam(':Birth_date',$Birth_date,PDO::PARAM_STR);
$query->bindParam(':Gothra',$Gothra,PDO::PARAM_STR);
$query->bindParam(':Gender',$Gender,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->bindParam(':phone',$phone,PDO::PARAM_STR);
$query->bindParam(':Village',$Village,PDO::PARAM_STR);
$query->bindParam(':City',$City,PDO::PARAM_STR);
$query->bindParam(':State',$State,PDO::PARAM_STR);
$query->bindParam(':PinCode',$PinCode,PDO::PARAM_STR);				
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
	echo "Thank you for contacting us";		  
}
else 
{
	echo "Something went wrong. Please try again";
}
}
?>