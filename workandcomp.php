<?php
	$host="127.0.0.1";
	$username="ca17";
	$password="Nstatehs_1";
	$dbname="ca_es17";
	$tname="workandcomp";
	$con= mysqli_connect("$host","$username","$password","$dbname");
	if($con->connect_errno)
	{
		echo 'connection failed '.$con->connect_error ;
	}
	
	if($stmt=$con->prepare("Insert into workandcomp(fname,lname,college,email,gender,event,phone) values (?,?,?,?,?,?,?)")){
		$stmt->bind_param('sssssss',$fname,$lname,$college,$email,$gender,$event,$phone);
		$fname=mysqli_real_escape_string($con,$_POST['fname']);
		$lname=mysqli_real_escape_string($con,$_POST['lname']);
		$college=mysqli_real_escape_string($con,$_POST['collegename']);
		$email=mysqli_real_escape_string($con,$_POST['email']);
		$gender=mysqli_real_escape_string($con,$_POST['gender']);
		$event=mysqli_real_escape_string($con,$_POST['competition']);
		$phone=mysqli_real_escape_string($con,$_POST['phone']);
		
		if($stmt->execute()){
			if($stmt->affected_rows){
				echo "Registration Successfull.Check your mail.";
				 
         $to = $email;
         $subject = "Congratulations ! Registration Successful.";
         
         $message = "Hello ".$name.".";
         $message .= "You have successfully Registered for E-Summit'17.";
         $header = "From:drive.esummit@gmail.com \r\n";
         
         
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "If email not found, Check you spam folder";
         }else {
            echo "Message could not be sent...";
         }
      
			}
			else{
				echo "Already Registered or Try Registration Again";
			}
		}
		else{
			  echo "Already Registered or Try Registration Again";
		}
	$stmt->close();
	$con->close();
	}
	else{
		echo "stmt not running";
	}
	
	
	
		
?>
