<?php 


if(isset( $_SESSION['loggedin'])  )
{
   $loggedin=true;
}
else
{
 $loggedin=false;
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>thread_list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    #ques {
        min-height: 433px;
    }

    #ans {
        background-color: rgb(240, 240, 240);
    }

    nav {
         background-color: white;
         font-weight: 700;
         /* border-bottom:2px,solid black; */
         box-shadow: 0 10px 50px #d3d3d3;


     }

     nav ul li a:hover {
         text-decoration: underline;
         color: pink;
     }
    </style>

</head>

<body>
    <?php
         include('components/database.php');
          include('components/header.php');
    ?>
    <?php  
           
         
             $id =$_GET['threadid'];
            $myrow6="SELECT * FROM `threads` Where thread_id=$id";
            $myconn6=mysqli_query($myconnect,$myrow6);
            while($myrow2=mySqli_fetch_assoc($myconn6))
            {
                
                $mynam=$myrow2['thread_title'];
                $myde=$myrow2['thread_des'];
                $comm1=$myrow2['thread_user_id'];
                $mysql1="SELECT user_name FROM `users` WHERE `sno`=$comm1 ";
                $myconn3=mysqli_query($myconnect,$mysql1); 
                $myrow2=mysqli_fetch_assoc($myconn3);
                $posted_by=$myrow2['user_name'];
            }
            ?>
            <?php
               $server=$_SERVER['REQUEST_METHOD'];
    
    
               if($server=='POST')
               {
                  
                  $comment=$_POST['comment'];
                  $comment=str_replace(">","&gt",$comment);
                  $comment=str_replace("<","&lt",$comment);
                  $sno=$_POST['sno'];

                  $myresult=" INSERT INTO `comments` ( `comment_desc`, `thread_id`, `comment_time`,`comment_by`) VALUES ( '$comment', '$id', current_timestamp(),'$sno');";
                  $result=mysqli_query($myconnect,$myresult);
               
                  
               
               
               }
            
               

            
            
            
            
            
            ?>

    <div class="container my-4">
        <div class="jumbotron py-2" id="ans">
            <h1 class="display-4 mx-3 mt-5"> <?php  echo $mynam;  ?></h1>
            <p class="lead mx-3 "><?php  echo $myde; ?></p>
            <hr class="my-4">
            <p class="mx-3">This is a peer to peer forum for sharing knowledge with each other. No Spam / Advertising /
                Self-promote in the forums. Do not post copyright-infringing material.Do not post “offensive” posts,
                links or images. Do not cross post questions.Do not PM users asking for help.Remain respectful of other
                members at all times.</p>
            <?php echo '<p class="mx-3 fw-bolder">Posted by ' .$posted_by.'</p>'?>
            <p class="lead">
                <a class="btn btn-success btn-lg my-3 mx-3" href="#" role="button">Learn more</a>
            </p>
        </div>
    </div>
    <div class="container">
        <h1>Post a Comment</h1>
       
        <?php
        if(isset( $_SESSION['loggedin']) && $_SESSION['loggedin']=true)
        {
          

             echo ' <form action="'. $_SERVER['REQUEST_URI']. '" method="post">
                  <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label mt-4">Type ypur comment:</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment"></textarea>
                  <input type="hidden" name="sno" value="'.$_SESSION["sno"].'" >
                    </div>
                    <button type="submit" class="btn btn-success">Post Comment</button>

                    <form>

                    </form>';
        }
        
        else
     {
         echo '<div class="jumbotron jumbotron-fluid">
         <div class="container">
         
           <p class="lead">You are not logged in.Please login to be able to Post a Comment.</p>
         </div>
       </div>';
     }
     ?>
    </div>







    <div class="container my-3 " id="ques">
        <h1 class="py-2">Discussion</h1>
        <?php 
    
            //  include('components/_database_connect.php');
           
            
             $id =$_GET['threadid'];
             $showalert2=true;
             
            $myrow="SELECT * FROM `comments` where  `thread_id` =$id";
            $myconn=mysqli_query($myconnect,$myrow);
                    $showalert2=true;

                    
            while($myrow2=mySqli_fetch_assoc($myconn))
            {
                $showalert2=false;
                $mydesc=$myrow2['comment_desc'];
                $comm=$myrow2['comment_by'];
                $myrow1="SELECT user_name , sno FROM `users` WHERE `sno`=$comm "; 
                $myconn1=mysqli_query($myconnect,$myrow1);  
                $myfetch=mysqli_fetch_assoc($myconn1);

               
                if($loggedin)
                {

               
                echo '
               
                <div class="d-flex container my-2" >
                    <div class="flex-shrink-0">
                        <img src="components/images/default.jpeg" width="54px" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                    <p class="fw-bolder ">Posted by ' .$myfetch['user_name'].  ' <div id="main-content">
                    <div>
                  </div>
                  </div>
                  </p><pre>'.$mydesc.'</pre>
                  <hr>
                    </div>
                    </div>';
                }

                if(!$loggedin)
                {
                  
                echo '
               
                <div class="d-flex container my-2 border border-light py-2  shadow-sm p-3 mb-5 bg-white rounded" my-2>
                    <div class="flex-shrink-0">
                        <img src="components/images/default.jpeg" width="54px" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                    <p class="fw-bolder my-0">Posted by ' .$myfetch['user_name'].  '<div id="main-content">
                    <div>
                  
                   
                  
                      
                    </div>
                  </div>
                  <p>'.$mydesc.'
                    </div>
                    </div>';
                }


                    
            }
        
   
    
    
    
    
  

       

    

?>
<?php
if($showalert2)
{
    echo '<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">No Discussion found!</h1>
      <p class="lead">Be the first person to start the discussion.</p>
    </div>
  </div>';
}
?>
    </div>


    <?php include('components/footer.php');?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>