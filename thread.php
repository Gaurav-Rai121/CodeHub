<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thread list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    #ques {
        min-height: 433px;
    }

    #ans {
        background-color: rgb(240, 240, 240);
    }

    #ans2 {
        background-color: rgb(240, 240, 240);
        /* padding:30px; */
    }
    #user{
        text-decoration:none;
        /color:black; 
    }
    .comment{
      display:inline-block;
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
    <?php include('components/database.php');?>
    <?php include('components/header.php');?>

    <?php  
    
   
             
             $myid =$_GET['catid'];
            
             
            $myrow="SELECT * FROM `categories` Where category_id=$myid";
            $myconn=mysqli_query($myconnect,$myrow);
            while($myrow2=mySqli_fetch_assoc($myconn))
            {
               
                $myname=$myrow2['category_name'];
                $mytitle=$myrow2['category_name'];
                $mydesc=$myrow2['category_desc'];
                echo '<div class="container my-4">
        <div class="jumbotron py-2" id="ans">
            <h1 class="display-4 mx-3 mt-5">Welcome to ' .$myname. ' Forum</h1>
            <p class="lead mx-3 "> ' .$mydesc. ' </p>
            <hr class="my-4">
            <p class="mx-3">This is a peer to peer forum for sharing knowledge with each other. No Spam / Advertising / Self-promote in the forums. Do not post copyright-infringing material.Do not post “offensive” posts, links or images. Do not cross post questions.Do not PM users asking for help.Remain respectful of other members at all times.</p>
            <p class="lead">
                <a class="btn btn-success btn-lg my-3 mx-3" href="#" role="button">Learn more</a>
            </p>
        </div>
    </div>
';}
?>
    <?php
$server=$_SERVER['REQUEST_METHOD'];


if($server=='POST')
{ 
   $id=$_GET['catid'];
   $title=$_POST['title'];
   $title=str_replace(">","&gt",$title);
   $title=str_replace("<","&lt",$title);
   $desc=$_POST['desc'];
   $desc=str_replace(">","&gt", $desc);
   $desc=str_replace("<","&lt", $desc);
   $sno=$_POST['sno'];
   $myresult="INSERT INTO `threads` ( `thread_title`, `thread_des`, `thread_cat_id`, `thread_user_id`, `timestap`) VALUES ('$title', '$desc', '$id',' $sno' , current_timestamp());";
   $result=mysqli_query($myconnect,$myresult);
  
   


}




?>



<?php
     if(isset( $_SESSION['loggedin']) && $_SESSION['loggedin']=true)
     {
              
         echo '
          <div class="container">
          <h1 class="py-2">Start a Discussion</h1>
           <form action="' .$_SERVER['REQUEST_URI']. '" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Problem title:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="title">
                <small id="emailHelp" class="form-text text-muted">Keep your title as short and crisp as
                    possible.</small>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label mt-4">Elaborate Your Concern:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc"></textarea>
                    <input type="hidden" value="'.$_SESSION["sno"] .'" name="sno">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>

                <form>

            </div>
    </div>';
     }
     else
     {
         echo '<div class="jumbotron jumbotron-fluid">
         <div class="container">
           <h1 class="display-4">You are not logged in.</h1>
           <p class="lead">Please login to be able to start a dicussion.</p>
         </div>
       </div>';
     }

?>


    <?php  
             include('components/database.php');
             $id =$_GET['catid'];
             
            $myrow="SELECT * FROM `threads` Where 	`thread_cat_id`=$id";
            $myconn=mysqli_query($myconnect,$myrow);
            echo '<div class="container my-3 " >
                    <h1 class="py-2">Browse Questions</h1>
                    </div>';
                    $showalert2=true;
                    
                  
                    
              while($myrow2=mySqli_fetch_assoc($myconn))
                {
                $showalert2=false;
                $myid=$myrow2['thread_id'];
                    $myname=$myrow2['thread_title'];
                   
                    $user_id=$myrow2['thread_user_id'];
                    $mydesc=$myrow2['thread_des'];
                    $myrow1="SELECT `user_name` FROM `users` WHERE `sno`=$user_id"; 
                    $myconn1=mysqli_query($myconnect,$myrow1);  
                    $myfetch=mysqli_fetch_assoc($myconn1);

                    echo '<div><div class="d-flex container my-0 border border-light py-2  shadow-sm p-3 mb-5 bg-white rounded">
                    <div class="flex-shrink-0">
                    <img src="components/images/default.jpeg"  width="54px" alt="...">
                    </div>
                
                    <div class="flex-grow-1  my-0">
                    <p class="fw-bolder my-0">Asked by: ' .$myfetch['user_name']. '</p>
                    <h5 class="my-0"><a href="thread_list.php?threadid=' .$myid. '">' .$myname. '</a></h5><pre class="overflow-auto">' .$mydesc. '</pre>
                    </div></div>
                    
                </div>';
                }
            
            
if($showalert2)
{
    echo '<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">No Question found!</h1>
      <p class="lead">Be the first person to ask the question.</p>
    </div>
  </div>';
}
?>








    <?php include('components/footer.php');?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>








