<?php
session_start();
$adhar=$_SESSION['adhar'];

?>
<!DOCTYPE html> 

 <html lang="en"> 

    <head>  

      <meta charset="UTF-8">  

      <meta name="viewport" content="width=device-width, initial-scale=1.0">                <title>Treatment</title>  

     <link rel="stylesheet" href="rs.css">  

      <meta name="viewport" content="width=device-width, initial-scale=1"> 

    </head>

    <body> 

        <div>   

          <form action="insert_report.php" method="post">    

            <h4 class="text-warning text-center pt-5">Treatment</h4>  

            

            <label>     

             <input type="text" class="input" name="dname" placeholder="Doctor Name"/>                   <div class="line-box">          

              <div class="line"></div>        

              </div>    

            </label>     

            

            <label>     

              <input 

                     type="text" 

                     class="input" 

                     name="remark"        

                     placeholder="Remark"/>        

              <div class="line-box">         

                <div class="line"></div>        

              </div>    

            </label>     

            

            <label>     

              <input 

                     type="date" 

                   class="input" 

                     name="date" 

                     placeholder="Date"/>        

             <div class="line-box">          

                <div class="line"></div>        

              </div>    

            </label>     

            

            <label>    

            File Upload:<input type="file" name="file">
<input type="submit" name="submit" value="upload">
        <div class="line-box">          

                <div class="line"></div>        

              </div>    

            </label>     


            <button type="submit">submit</button>  

         </form> 

      </div> 

    </body> 

</html>