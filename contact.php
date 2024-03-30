 <!doctype html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>About</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <style>
     #ques {
         min-height: 670px;

     }

     .container1 {
         width: 100%;
         height: 84vh;
         display: flex;
         justify-content: center;
         align-items: center;
         background-color: white;
         border: solid white;
     }

     .container2 {
         width: 50%;
         height: 42vh;
         background-color: #f2f3f4;
         border: solid #f8f8ff;
         border-radius: 15px;
         box-shadow: 0 35px 80px #808080;

        
        ;
         


     }

     .container3 {
       
        display: flex;
         justify-content: center;
         align-items: center;
         flex-direction: column;
     }

     .container4 {
        display: flex;
         justify-content: center;
         align-items: center;
         flex-direction: row;
         gap:15px;
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

     .mylogo {
         display: block;
         border-radius:80px
     }
     </style>
 </head>

 <body>
     <?php
            include('components/database.php');
             include('components/header.php');?>

     <div class="container1 " id="ques">

         <div class="container2">
             <div class="container3 mt-5">
                 <h1 class="column">Feel free to contact us!</h1>
                 <a href="home.php"><img src="components/images/CodeHub.png"
                         class="rounded mylogo column mt-2" alt="..." width="68px" height="65px"></a>

             </div>
             <div class="container4 mt-3">
                 <a href="https://twitter.com/GauravRai66571"><img src="components/images/twitter.png" class="rounded"
                         alt="..." width="40px" height="42px"></a>
                 <a href="https://www.facebook.com/gaurav.rai.94043" target=".blank"><img
                         src="components/images/facebook.png" class="rounded float-" alt="..." width="40px"
                         height="42px"></a>
                 <a href="https://www.instagram.com/raigaurav_4888/" target=".blank">
                     <img src="components/images/instagram.png" class="rounded " alt="..." width="40px" height="42px"></a>
             </div>
         </div>
     </div>

     <?php include('components/footer.php');?>




     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
     </script>
 </body>

 </html>