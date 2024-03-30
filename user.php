<!doctype html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>User_Data</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
         <style>
         #ques {
        min-height: 675px;
        
    }
    </style>
 </head>

 <body>
     <?php
            include('components/database.php');
             include('components/header.php');?>
    
     <div class="container" id="ques">
      

     
    

     <?php
      
      $myid =$_GET['ThreadUserId'];
            
             
      $myrow="SELECT * FROM `threads` Where thread_user_id=$myid";
      $myconn=mysqli_query($myconnect,$myrow);
      $user_id=mysqli_num_rows($myconn);
      echo '<p>no of threds</p> $user_id' ;
      mysqli_num_rows($result);
     
     
     
     
     
     
     
     
     
     
     ?>
     </div>

     <?php include('components/footer.php');?>




     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
     </script>
 </body>

 </html>