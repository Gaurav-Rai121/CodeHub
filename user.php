<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User_Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
     #question {
         min-height: 675px; 
         display:flex;
         justify-content:center; 
        align-content:center;
    } 

    /* #container123{
        display:flex;
        justify-content:center;
        align-content:center;
    } */



   #container123 {
        text-align: center;
        color: green;
        width: 50vw;
        height: 50vh;
    }

    #container123 img {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        margin-bottom: 20px;
    }  
    
header {
    background-color: white;
    color: black;
    padding: 20px;
    text-align: center;
 
}
    </style>
</head>

<body>
    <?php
            include('components/database.php');
             include('components/header.php');?>
          <div id="question">
            <div class="container profile bg-light mt-5" id="container123">
        <header class="bg-light">
            <h1>User Profile</h1> 
            <hr>
        </header>
       
            <img src="components/images/user.jpg" alt="Profile Picture">
            <h2>Username</h2>
            <p>Email: user@example.com</p>
            <p>Joined: January 1, 2024</p>
            <p>Posts: 10</p>
            <!-- Additional user details can be added here -->

<!-- //class="border-bottom-0" -->



            <?php
      
    //   $myid =$_GET['ThreadUserId'];
            
             
    //   $myrow="SELECT * FROM `threads` Where thread_user_id=$myid";
    //   $myconn=mysqli_query($myconnect,$myrow);
    //   $user_id=mysqli_num_rows($myconn);
    //   echo '<p>no of threds</p> $user_id' ;
    //   mysqli_num_rows($result);
     
     
     
     
     
     
     
     
     
     
     ?>
        </div>
    </div>
    <?php include('components/footer.php');?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>