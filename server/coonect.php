
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
$sql = $dbh->prepare("INSERT INTO register(first_name,last_name,Brahmin,Birth_date,Gothra,Gender,email,password,Phone,Village,City,State,PinCode) 
	VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
$query = $dbh->prepare();
$query->bind_param("sssssssssssss",$first_name, $last_name, $Brahmin, $Birth_date, $Gothra, $Gender, $email, $password, $Phone, $Village, $City, $State, $PinCode);
$query->execute();
if($query)
{
	echo "Thank you for contacting us";		  
}
else 
{
	echo "Something went wrong. Please try again";
}
$query->close();
$dbh->close();
}
?>