<?php
 $server=$_SERVER['REQUEST_METHOD'];
if($server=='POST')
 {
    
    $servername='localhost';
    $username="root";
    $password="";
    $database="mydatabase";
    $myconnect=mysqli_connect( $servername,$username,$password,$database);
    $showerror="false";
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];

 


    $myrow="SELECT * FROM `users` Where user_email='$email'";
    $myconn=mysqli_query($myconnect,$myrow);
    $myrow=mysqli_num_rows($myconn);
    if($myrow>0)
    {
        $showerror="email is already used!";
        header("location:/forum/home.php?signup=false&error=$showerror");
    }
    else
    {
        if($pass==$cpass)
        {
            $hash=password_hash($pass, PASSWORD_DEFAULT); 
             $myresult=" INSERT INTO `users` ( `user_email`, `user_pass`,`timestap`) VALUES ( '$email', '$hash', current_timestamp())";
             $result=mysqli_query($myconnect,$myresult);
             $showalert=true;
             header("location:/forum/home.php?signup=true");
             exit(); 
        
        }
      
           
            else 
        {
            
              $showerror="Password is not matched";
              header("location:/forum/home.php?signup=false&error=$showerror");
        }
        }
       
}

    // header("location:/forum/home.php?signup=false&error=$showerror");





?>