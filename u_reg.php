<?php
include 'db_connect.php';
   
if(isset($_POST['reg']))
{
//$id=autoid("table_registration","baby_id");
	//$lid=autoid("table_login","login_id");
	
  //  $flag=0;
	//$id,$name,$phno,$ano,$mailid,$cname,$dob,$gender,$hname,$sname,$zipcode,$city,$state,$country,$password,$cpassword
    
	$id=autoid("login","lid");
	$cid=autoid("customer","cid");
	
    $name=$_POST['fname'];
    $address=$_POST['address'];
    $town=$_POST['town'];
    $state=$_POST['state'];
    $zipcode=$_POST['zip'];
    $phno=$_POST['ph'];
    $email=$_POST['email'];
    
	$password=$_POST['password'];



      $sql="INSERT INTO `customer`(cid,name,address,town,state,zipcode,phone,loginid) VALUES ('$cid','$name','$address','$town','$state','$zipcode','$phno','$id')";
  // echo $sql;
            if(mysql_query($sql,$con))
            {
                $sql1="INSERT INTO `login`(lid,email,password,user,status)VALUES ('$id','$email','$password','user',3)";

            // echo $sql1;
                if(mysql_query($sql1,$con))
                {
                    echo"<script>alert('Account created ! Please login ');</script>";
                   

                    header("Location:login.php");
                }
            }


      //       $sql1="select lid from login where email='$email' and password='$password'";
      //       echo $sql1;
      //       $result = mysql_query($sql1,$con);
      //      if($result)
      //       {
            	
      //       	while($row = mysql_fetch_array($result)) {
    		// 	$lid= $row['lid'];
  					

  				// $sql2="Update customer set loginid='$lid' where email='$email' and password='$password'";
  				// mysql_query($sql2);
      //            header("Location:login.php");
  			 //   }
      //       }
      //       else{
      //           echo "Update failed";
      //       }

}



            ?>