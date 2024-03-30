<??>
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
  <li class="nav-item">
    <a class="nav-link active" href="About.php">About</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link active dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Top Categories
    </a>
    <ul class="dropdown-menu">
    <li>';
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
 </ul>';
 


    



















      

            if(!$loggedin)
            {
              echo '<form class="d-flex" role="search" action="search.php" method="get">
              <input class="form-control me-2" type="search" placeholder="🆂🅴🅰🆁🅲🅷" aria-label="Search" name="search">
              <button class="btn btn-outline-primary ml-2" >Search</button>
                </form>
                <button type="button" class="btn btn-outline-primary ms-2" data-bs-toggle="modal" data-bs-target="#loginModal">LogIn</button>
                <button type="button" class="btn btn-outline-primary ms-2" data-bs-toggle="modal" data-bs-target="#signinModal"> SignUp</button>
               
                ';
            }
           // <li><a class="dropdown-item" href="#"><img src="components/images/logout.png" height="20px" class="border-radius-sm rounded-circle"/>Another action</a></li>
            //
            if($loggedin)
      
       {
          echo '<form class="d-flex" role="search" action="search.php" method="get">
                <input class="form-control me-2" type="search" placeholder="🆂🅴🅰🆁🅲🅷" aria-label="Search" name="search">
                <button class="btn btn-outline-primary ml-2" >Search</button>
                  </form>

            

































                  <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle rounded-circle border-0 bg-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="components/images/user.jpg" height="20px" class="border-radius-sm rounded-circle"/>
                  </button>
                  <ul class="dropdown-menu">
                    <h2 class="text-center mr-5 fw-bolder">'.$_SESSION['useremail'].'</h2>
                    <hr>
                    <li><a class="dropdown-item" href="#"><img src="components/images/user.jpg" height="20px" class=" rounded float-left border-radius-sm rounded-circle"/>Profile</a></li>
                    
                    <li><a class="dropdown-item" href="#"><img src="components/images/setting.png" height="20px" class="border-radius-sm rounded-circle"/>setting</a></li>




               <button class="btn btn-outline-primary ml-2"><a href="components/logout.php">Log out</a></button>
              ';               
       }
       
      
      
       //<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Setting</button>

      //  <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
      //    <div class="offcanvas-header">
      //      <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Offcanvas with body scrolling</h5>
      //      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      //    </div>
      //    <div class="offcanvas-body">
      //      <p>Try scrolling the rest of the page to see this option in action.</p>
      //    </div>
      //  </div>

























 
       echo '</div>
         </div>
          </nav>';

 if(isset($_GET['signup'])&&$_GET['signup']==true)
 {
   echo' <div class="alert alert-success my-0" role="alert">
         <strong>Success! </strong> you can login now
        </div>';
 }
//  else 
//        {
//         $myerror=$_GET['error'];
//         echo ' <div class="alert alert-danger my-0" role="alert">
//           <strong>Sorry! </strong>' .$myerror.'
//          </div>';
// 
//        }
?>
 </body>
 </html>

