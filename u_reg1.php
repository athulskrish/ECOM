<?php
include('db_connect.php');


if(isset($_POST['reg']))
{

	$name=$_POST['fname'];
    $address=$_POST['address'];
    $town=$_POST['town'];
    $state=$_POST['state'];
    $zipcode=$_POST['zip'];
    $phno=$_POST['ph'];
    $email=$_POST['email'];    
	$password=$_POST['password'];


	$id=autoid()

	$sql="INSERT INTO `login`(lid,email,password,user,status) values('$id','$email','$password','user',3)";
	$result=mysql_query($sql,$con);
	if($result){
		$sql1="INSERT into `customer`(name,address,town,state,zipcode,phone,loginid) VALUES('$name','$address','$town',     '$state','$zipcode','$phno','$id')";
		$m=mysql_query($sql1);
		if($m){
		header('Location:login.php');
	}


	}


}


?>