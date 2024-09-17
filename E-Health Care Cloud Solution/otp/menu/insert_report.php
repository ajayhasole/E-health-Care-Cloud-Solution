<?php

session_start();
$adhar1=$_SESSION['adhar'];


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
$adhar=str_openssl_dec($row['adhar'],$iv);
if(isset($_POST['submit']))
{    $iv=openssl_random_pseudo_bytes(16);
     $fname = $_POST['dname'];
	  $user = $_POST['remark'];
	   $id = $_POST['date'];
	    $file =$_POST['file'];
		
		
		$fname=str_openssl_enc($fname,$iv);
	 $user=str_openssl_enc($user,$iv);
	   $id=str_openssl_enc($id,$iv);
	 

		
		$filename = basename($_FILES['healthfile']['name']);
   $newname = $folder_path . $filename;

   if (move_uploaded_file($_FILES['healthfile']['tmp_name'], $newname)) {
      if ($_FILES['healthfile']['type'] != "application/pdf") {

          echo "<p>Class notes must be uploaded in PDF format.</p>";
      } else {
              
	$iv=bin2hex($iv);
	if(strcmp(adhar,adhar1))
	{
     $sql = "INSERT INTO regp (dname,remark,date1,file,iv1)
     VALUES ('$fname','$user','$id','$phone','$iv')";
    if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
			

                   header("Location:./index.php");
                    } 

       
                  else{
                    echo "ERROR: Hush! Sorry $sql. " 
                         . mysqli_error($conn);
             }
	}else {
		
		echo "Error";
          $fileresult = mysql_query($filesql, $con).die(mysql_error());
     }
	  }
	
        
        mysqli_close($conn);
	}
	
}
}
  ?>