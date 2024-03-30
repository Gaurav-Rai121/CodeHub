<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="components/stylesheet/course.style.css">

</head>

<body>
    <?php include('components/database.php');?>
    <?php include('components/header.php');?>

    <div class="container my-10">
        <h2 class="text-left my-5">Online free courses on Youtube</h2>
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

</body>

</html>