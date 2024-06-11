<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    #maincontainer {
        min-height: 675px;

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
  
     <div class="container my-3"  id="maincontainer">
    <h1>Search result for <em>"<?php echo $_GET['querry']?>"</em></h1>

    <?php
   $search= $_GET['querry'];
   $noresult=true;
   $myrow="SELECT * FROM `threads` Where match (thread_title, thread_des) against('$search')";
   $myconn=mysqli_query($myconnect,$myrow);
   while($myrow2=mySqli_fetch_assoc($myconn))
     {
        $noresult=false;
           $myname=$myrow2['thread_title'];
           $mydesc=$myrow2['thread_des'];
           $myid=$myrow2['thread_id'];
           $url="thread_list.php?threadid=".$myid;   
           echo ' <div class="result">
           <h3><a href="'.$url.'" class="text-dark">'.$myname.'</a></h3>
           <p>'.$mydesc.'</p>
       </div>';
    }
    if($noresult)
    {
        echo '<div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">No Result Found</h1>
          <p class="lead">Suggestions:
            <ul>
              <li>Make sure all the words are spelled correctly.</li>
              <li>Try different Keywords.</li>
              <li>Try more general keywords.</li>
            </ul>
         </p>
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