<?php
 
    
    
 if($_SERVER['REQUEST_METHOD']=='POST')
 {
    
   include('database.php');


    $email=$_POST['useremail'];
    $pass=$_POST['password'];
    $myrow="SELECT * FROM `users` Where user_email='$email'";
    $myconn=mysqli_query($myconnect,$myrow);
    $myrow=mysqli_num_rows($myconn);
    if($myrow==1)
    {
       $rows=mysqli_fetch_assoc($myconn);
       if(password_verify($pass,$rows['user_pass']))
       {
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['sno'] = $rows['sno'];
        $_SESSION['useremail']=$email;
        header("location:/forum/home.php?login=true");
       }
       header("location:/forum/home.php?login=error");
      
    }
    else
    {
     
      header("location:/forum/home.php?login=false");
    }
   
 }