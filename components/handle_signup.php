<?php
 $server=$_SERVER['REQUEST_METHOD'];
//  require '../vendor/autoload.php';
//  use Cloudinary\Configuration\Configuration;
//  use Cloudinary\Api\Upload\UploadApi;

 
// Configuration::instance([
//  'cloud' => [
//    'cloud_name' => 'du3w6lc6z', 
//    'api_key' => '386153376698211', 
//    'api_secret' => 'dPmZ89c4few8Mqr4zZ1yUVtcG9Y'],
//  'url' => [
//    'secure' => true]]);


 
 
    
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

   //UPLOADING THE IMAGE IN DATABASE
    $img_name = $_FILES['file']['name'];
	$img_size = $_FILES['file']['size'];
	$tmp_name = $_FILES['file']['tmp_name'];
	$error = $_FILES['file']['error'];


    $myrow="SELECT * FROM `users` Where user_email='$email'";
    $myconn=mysqli_query($myconnect,$myrow);
    $myrow=mysqli_num_rows($myconn);
   
    //  Uploader::upload($user,array("public_id"=>$email));
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


            if ($error === 0) {
                if ($img_size > 125000) 
                {
                    $em = "Sorry, your file is too large.";
                    header("Location: index.php?error=$em");
                }
                else 
                {
                    $img_ex = pathinfo($img_name, pathinfo($img_name));
                    $img_ex_lc = strtolower($img_ex);
        
                    $allowed_exs = array("jpg", "jpeg", "png"); 
        
                    if (in_array($img_ex_lc, $allowed_exs)) 
                    {
                        $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                        $img_upload_path = 'uploads/'.$new_img_name;
                        move_uploaded_file($tmp_name, $img_upload_path);
                    }
                }
            }
        
                        // Insert into Database
                    //     $myresult=" INSERT INTO `users` ( `image_url`) VALUES ('$new_img_name')";
                    //    $result=mysqli_query($myconnect,$myresult);
                    //    $showalert=true;
                    //    header("location:/forum/home.php?signup=true");
                     
                   



            
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