
<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$number = $_POST['number'];
$date=$_POST['date'];
$cuisine = $_POST['cuisine'];
$gender = $_POST['gender'];
$r1 = $_POST['r1'];
$r2 = $_POST['r2'];
$r3 = $_POST['r3'];
$text=$_POST['text'];

$con = new mysqli('localhost', 'root', '','registeration');

if($con->connect_error)
{
	die("connection failed".$con->connect_error);
}
else{
	$stmt=$con->prepare("insert into register(fname, lname, email, number,date,cuisine,gender,r1,r2,r3,text) 
	VALUES (?,?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("sssssss",$fname,$lname $email, $number,$date,$cuisine,$gender,$r1,$r2,$r3,$text);
	$stmt->execute();
	echo "successfully submitted";
	$stmt->close();
	$con->close();
// echo $sql;")
}
?>