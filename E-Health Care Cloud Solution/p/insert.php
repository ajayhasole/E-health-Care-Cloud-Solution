<?php
include_once 'dbcon.php';
ini_set("SMTP","smtp.gmail.com");
ini_set("sendmail_from","<email-address>@gmail.com>");
function str_openssl_enc($str,$iv){
	$key='army1234565214army';
	$chiper="AES-128-CTR";
	$options=0;
	$str=openssl_encrypt($str,$chiper,$key,$options,$iv);
	return $str;
}
if(isset($_POST['submit']))
{    $iv=openssl_random_pseudo_bytes(16);
     $fname = $_POST['First_Name'];
	  $mname = $_POST['Middle_Name'];
	   $lname = $_POST['Last_Name'];
	    $day =$_POST['Birthday_day'];
         $month = $_POST['Birthday_Month'];
		   $year = $_POST['Birthday_Year'];
		    $mail = $_POST['Email_Id'];
			 $moblie = $_POST['Mobile_Number'];
	$adhar = $_POST['Adhar_Number'];
	  $gender = $_POST['Gender'];
	   $address = $_POST['Address'];
	    $city =$_POST['City'];
         $pin = $_POST['Pin_Code'];
		   $state = $_POST['State'];
		    $height = $_POST['height'];
			 $disease = $_POST['Anemia_d'];
			 $operations = $_POST['no_v'];
			 $current = $_POST['Exercise_Never'];
           
		      $date = $year.'-'.$month.'-'.$date;

    $fname=str_openssl_enc($fname,$iv);
	 $mname=str_openssl_enc($mname,$iv);
	   $lname=str_openssl_enc($lname,$iv);
	    $mail=str_openssl_enc($mail,$iv);
	      $moblie=str_openssl_enc($moblie,$iv);
	
	     $adhar=str_openssl_enc($adhar,$iv);
	   $gender=str_openssl_enc($gender,$iv);
	 $address=str_openssl_enc($address,$iv);
	 $date=str_openssl_enc($date,$iv);
	 
	 
	 
	 
    $city=str_openssl_enc($city,$iv);
	 $pin=str_openssl_enc($pin,$iv);
	   $state=str_openssl_enc($state,$iv);
	    $height=str_openssl_enc($height,$iv);
	      $disease=str_openssl_enc($disease,$iv);
	
	     $operations=str_openssl_enc($operations,$iv);
	   $current=str_openssl_enc($current,$iv);
	
	 
	 
	
	$iv=bin2hex($iv);
     $sql = "INSERT INTO regp (fname,mname,lname,date,email,moblie,adhar,gender,address,city,pin,state,height,disease,operations,current,iv)
     VALUES ('$fname','$mname','$lname','$date','$mail','$moblie','$adhar','$gender','$address','$city','$pin','$state','$height','$disease','$operations','$current','$iv')";
    if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
			

                 $to_email =$_POST['Email_Id'];
                  $subject = "E-HEALTH CARE CLOUD SOLUTION:Regstration Successful";
                   $body = "Dear ".$_POST['First_Name']." Thank you for registering with E-HEALTH CARE CLOUD SOLUTION \n Your ID=".$_POST['Adhar_Number']."\n" 
                         ."Your Password=".$_POST['Last_Name']."\n";				   
				   
				   
                    $headers = "From: ehealth.cloud.care@gmail.com";

                  if (mail($to_email, $subject, $body, $headers)) {
   	                    header("Location:./login.php");
                    } else {
                         echo "Email sending failed...";
                            }

       
                 } else{
                    echo "ERROR: Hush! Sorry $sql. " 
                         . mysqli_error($conn);
             }
          
        
        mysqli_close($conn);
		
		
}
  ?>
  
  