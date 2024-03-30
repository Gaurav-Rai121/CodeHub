<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to CodeHub-Coding Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="components/stylesheet/home.style.css">





</head>


<body>
    <?php include('components/database.php');?>
    <?php include('components/header.php');?>


    <div class="mydiv">
        <div class="h1 ">
            <span class="text-left codehub container">Welcome to</span><span class="codehub mt-50; span2"> CodeHub</span>
            <p class=" container">CodeHub is a dynamic online platform designed to serve as a collaborative space for programmers,
                developers, and
                tech enthusiasts. It acts as a forum where individuals can engage in discussions, share insights, seek
                advice,
                and collaborate on coding projects. Users can create profiles, join various coding communities, and
                participate
                in forums dedicated to specific programming languages, frameworks, or technologies. CodeHub fosters
                knowledge
                exchange, offering tutorials, articles, and resources to aid in skill development. It aims to cultivate
                a
                supportive environment for learning, problem-solving, and networking within the vast realm of software
                development.</p>
<div class="logos">
    <div class="logos-slide">
        <img src="components/images/c.jpeg">
        <img src="components/images/c1.jpeg">
        <img src="components/images/c++.jpeg">
        <img src="components/images/js.jpeg">
        <img src="components/images/java.jpeg">
        <img src="components/images/python.jpeg">
        <img src="components/images/html.jpeg">
        <img src="components/images/react.jpeg">
        <img src="components/images/bootstrap.jpeg">
        <img src="components/images/tailwind.jpeg">

    </div>

    

    

</div>

            
        </div>
        <div class="image">
            <img src="https://source.unsplash.com//500x400/?coding" width="500px" height="430px">
        </div>
    </div>



    <div class="container1 container">


        <?php  
             include('components/database.php');
            $myrow="SELECT * FROM `categories`";
            $myconn=mysqli_query($myconnect,$myrow);
            while($myrow2=mySqli_fetch_assoc($myconn))
            {
                $myname=$myrow2['category_name'];
                $myid=$myrow2['category_id'];
                $mytitle=$myrow2['category_name'];
                $mydesc=$myrow2['category_desc'];

                echo ' 
               

               <div class="col-md-4 my-2 mt-4">
                 <div class="mycard ">
                    <div class="imbBx">
                        <img src="https://source.unsplash.com//500x400/?'. $myname . ',coding" alt="..."">
                    </div>
                    <div class="content">
                       <h5><a href="thread.php?catid=' .$myid. '">' .$mytitle. '</a></h5>
                        <p >' .substr($mydesc,0,70). '...</p>
                        <a href="thread.php?catid=' .$myid. '" class="btn btn-primary">View Threads</a>
                    </div>
                 </div>
                </div>
                
                     ';
                   


























            //     echo ' <div class="col-md-4 my-2 mt-4">
            //     <div class="card" style="width: 18rem;">
            //     <img src="https://source.unsplash.com//500x400/?'. $myname . ',coding" class="card-img-top" alt="...">
            //     <div class="card-body">
            //       <h5 class="card-title"><a href="thread.php?catid=' .$myid. '">' .$mytitle. '</a></h5>
            //       <p class="card-text">' .substr($mydesc,0,55). '...</p>
            //       <a href="thread.php?catid=' .$myid. '" class="btn btn-primary">View Threads</a>
            //     </div>
            //   </div>
            //   </div>';
            }
         
            
            
            
            
         ?>

    </div>















    <div class="footer">
        <?php include('components/footer.php');?>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>