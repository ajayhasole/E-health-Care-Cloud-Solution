	<?php
include('dbcon.php');
function str_openssl_dec($str,$iv){
	$key='army1234565214army';
	$chiper="AES-128-CTR";
	$options=0;
	$str=openssl_decrypt($str,$chiper,$key,$options,$iv);
	return $str;
}
        $res=mysqli_query($conn,"select * from regp ");
	
		while($row=mysqli_fetch_assoc($res)){
		$iv=hex2bin($row['iv']);
		 $adhar1=str_openssl_dec($row['adhar'],$iv);
		$fname=str_openssl_dec($row['fname'],$iv);
		$lname=str_openssl_dec($row['lname'],$iv);
		$height=str_openssl_dec($row['height'],$iv);
		$date=str_openssl_dec($row['date'],$iv);
		$phone=str_openssl_dec($row['email'],$iv);
		$email=str_openssl_dec($row['moblie'],$iv);
		$adhar=str_openssl_dec($row['adhar'],$iv);
		$password=str_openssl_dec($row['address'],$iv);
		
if(isset($_POST['submit']))
{       session_start();
         
                      $adhar2=$_POST['adharno'];
       if(strcmp($adhar2,$adhar1)==0)
		{        session_start();
			    $_SESSION['fname']=$fname;
				$_SESSION['lname']=$lname;
				$_SESSION['height']=$height;
				  $_SESSION['date']=$date;
				$_SESSION['phone']=$phone;
				$_SESSION['email']=$email;
				  $_SESSION['adhar']=$adhar;
				$_SESSION['address']=$password;
				;
               header("Location:./menu/index.php"); 
		}
		else
		{
			echo "Invaild User";
			
		}

}
		}
?>