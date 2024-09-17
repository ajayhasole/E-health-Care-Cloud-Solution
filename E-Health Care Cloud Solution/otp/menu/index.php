
 <?php 
	       session_start();
	       $fname=$_SESSION['fname'];
		    $lname=$_SESSION['lname'];
				$height=$_SESSION['height'];
				 $date=$_SESSION['date'];
				$phone=$_SESSION['phone'];
				$email=$_SESSION['email'];
				  $adhar=$_SESSION['adhar'];
				$password=$_SESSION['address'];
	
	  
	  ?>
<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <!-- <title> Responsive Drop Down Navigation Menu | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
 <table style="  
width: 20%;  
   padding: 100px;  
"  
>
  <nav>
    <div class="navbar">
      <i class='bx bx-menu'></i>
      <div class="logo"><a href="#">E-Health</a></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name">E-Health</span>
          <i class='bx bx-x' ></i>
        </div>
        <ul class="links">
          <li><a href="\health\otp\search.php">HOME</a></li>
          <li>
            <a href="\health\otp\menu\shows.php">Previous History</a>
            
          </li>
          <li>
            <a href="\health\otp\menu\reprot.php">Current Treatment</a>
            
          </li>
          <li style="color:red";>Patient Name: <?php echo "$fname $lname" ?></li>
       
        </ul>
      </div>
      <div class="search-box">
        <i class='bx bx-search'></i>
        <div class="input-box">
          <input type="text" placeholder="Search...">
        </div>
      </div>
	  <
  </nav>
     <?php
    			echo "<table>
  <tr>
    <th>Name</th>
    <th>Adhar</th>
    <th>Date</th>
  </tr>
  <tr>
    <td>".fname." ".lname."</td>
    <td>".$adhar."</td>
    <td>".$date."</td>
  </tr>";
	 ?>
	    
	  </table>
  <script src="script.js"></script>
  
	     
</body>
</html>
      