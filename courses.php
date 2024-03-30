<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <link rel="stylesheet" href="components/stylesheet/course.style.css"> 
<STYLE>
     nav {
     background-color:white;  
     font-weight:700;
     /* border-bottom:2px,solid black; */
     box-shadow: 0 10px 50px #d3d3d3;
     
 
 }
  nav ul li a{
     transition: 0.5em;
 } 
  nav ul li a:hover{
      text-decoration: underline;  
      color:pink; 
 } 
  
</STYLE>
</head>

<body>
    <?php include('components/database.php');?>
    <?php include('components/header.php');?>

    <div class="container my-10">
        <h2 class="text-center my-5 mytitle">Free courses on <img src="components/images/youtube.jpeg" height="60px" width="80px"></h2>
        <input class="form-control me-2 w-50 inline-block mb-3" type="search" placeholder="&#128269 Search" aria-label="Search" >
   
        <div class="row">
            

            <!-- fetching the online free course data from the database -->
            <?php  
             include('components/database.php');
            $myrow="SELECT * FROM `freecourses`";
            $myconn=mysqli_query($myconnect,$myrow);
            while($myrow2=mySqli_fetch_assoc($myconn))
            {
                $course_name=$myrow2['course_name'];
                $course_desc=$myrow2['course_desc'];
                $course_by=$myrow2['course_by'];
                $course_link=$myrow2['course_link'];
                $course_image_link=$myrow2['couse_image_link'];
                
                
                echo ' 
               
                <div class="col-md-4 my-2 mt-4">
                 <div class="card" style="width: 18rem;">
                    <img src="'.$course_image_link.'" class="card-img-top"  
                    alt="...">
                    <div class="card-body">
                        <h5 class="card-title">'.$course_name.'</h5>
                        <p class="card-text">'.substr( $course_desc,0,95).'...</p>
                        <a href="'.$course_link.'" class="btn btn-primary">View Course</a>
                    </div>
                  </div>
                </div>
                
                     ';
                   


























            }
         
            
            
            
            
         ?>
















































        </div>




    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
     <?php include('components/footer.php');?>

</body>

</html>