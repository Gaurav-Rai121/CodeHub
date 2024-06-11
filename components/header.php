<?php  session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    /* nav{

      background-image: url("components/images/background.jpg");
             opacity: 2;
             color:white;
  
  } */
    .navbar a {
        text-decoration: none;

    }

    .profile {
        margin-left: 20px;
        margin-right: 5px
    }
    </style>
</head>

<body>


    <?php

include('components/signin_modal.php');
include('components/login_modal.php');


 if(isset( $_SESSION['loggedin'])  )
 {
    $loggedin=true;
 }
 else
 {
  $loggedin=false;
 }

  echo '



<nav class="navbar navbar-expand-lg   " id="mynavbar  >
  <div class="container-fluid">
   <a class="navbar-brand" href="home.php">🅲🅾🅳🅴🅷🆄🅱</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
  </li>
  <li class="nav-item">
  <a class="nav-link active" aria-current="page" href="courses.php">Online Free Courses</a>
</li>
<li class="nav-item dropdown">
    <a class="nav-link active dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Top Categories
    </a>
    <ul class="dropdown-menu">
    <li>
  ';
  
    $myrow4="SELECT `category_name`,`category_id` FROM `categories` LIMIT 4 ";
    $myconn3=mysqli_query($myconnect,$myrow4);  
    while($myfetch2=mysqli_fetch_assoc($myconn3))
    {
         echo ' <a class="dropdown-item" href="thread.php?catid=' .$myfetch2["category_id"]. '">' .$myfetch2["category_name"]. '</a>';
    }
     
   echo '</li></ul></li>
   <li class="nav-item">
   <a class="nav-link active" href="contact.php">Contact</a>
 </li>
 <li class="nav-item">
    <a class="nav-link active" href="About.php">About</a>
  </li>
 </ul>';
 


    



















      

            if(!$loggedin)
            {
              echo '<form class="d-flex" role="search" action="search.php" method="get">
              <input class="form-control me-2" type="search" placeholder="🆂🅴🅰🆁🅲🅷" aria-label="Search" name="querry">
              <button class="btn btn-outline-success ml-2" >Search</button>
                </form>
                <button type="button" class="btn btn-outline-success ms-2" data-bs-toggle="modal" data-bs-target="#loginModal">LogIn</button>
                <button type="button" class="btn btn-outline-success ms-2" data-bs-toggle="modal" data-bs-target="#signinModal"> SignUp</button>
               
                ';
            }
           // <li><a class="dropdown-item" href="#"><img src="components/images/logout.png" height="20px" class="border-radius-sm rounded-circle"/>Another action</a></li>
            //
            if($loggedin)
      
       {
          echo '<form class="d-flex" role="search" action="search.php" method="get">
                <input class="form-control me-2" type="search" placeholder="&#128269 🆂🅴🅰🆁🅲🅷" aria-label="Search" name="querry">
                <button class="btn btn-outline-success ml-2" >Search</button>
                  </form>

            




























                     <img src="components/images/user.jpg" height="20px" class="border-radius-sm rounded-circle mr-2 profile"/>


                     <button class="btn btn-success "><a  class="text-light" href="components/logout.php">Log out</a></button>

                 
                 
                    
                  
                 




              
              ';               
       }
       
      
      

























 
       echo '</div>
         </div>
          </nav>';

 if(isset($_GET['signup'])&&$_GET['signup']==true)
 {
   echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
   <strong>Sucess!</strong> You can login now.
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div> ';
 }

?>
</body>

</html>