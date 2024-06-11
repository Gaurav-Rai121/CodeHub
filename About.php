<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>
             <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        p {
            line-height: 1.6;
            color: #666;
        }
        img{
            mix-blend-mode: multiply;
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
        </style>
</head>

<body>
    <?php 
         include('components/database.php');
         include('components/header.php');?>
   <div class="container">
        <h1> <a href="home.php"><img src="components/images/logo2.png" height="60px" wigth="40px"></a></h1>
        <p>Welcome to CodeHub, the ultimate coding forum for developers of all levels!</p>
        
        <h2>Purpose</h2>
        <p>CodeHub was created with the mission to provide a vibrant and inclusive platform for developers to learn, collaborate, and share their knowledge and passion for coding. Whether you're a seasoned pro or just starting your coding journey, CodeHub is your community.</p>
        
        <h2>Future Updates</h2>
        <ul>
            <li>Thread Creation: Start discussions, ask questions, and share your expertise.</li>
            <li>Commenting: Engage with other developers by leaving comments on threads.</li>
            <li>Voting System: Upvote helpful content and downvote irrelevant or spammy posts.</li>
            <li>Tagging: Categorize threads with relevant tags for easy navigation.</li>
            <li>User Profiles: Showcase your activity and contributions within the community.</li>
            <li>Search Functionality: Quickly find threads and topics that interest you.</li>
            <li>Moderation Tools: Ensure a respectful and productive environment for all users.</li>
        </ul>
        
        <h2>Get Involved</h2>
        <p>Ready to join the CodeHub community? Create an account today and start connecting with fellow developers!</p>
        
        <h2>Contact Us</h2>
        <p>If you have any questions, feedback, or suggestions, feel free to reach out to us at <a href="mailto:info@codehub.com">info@codehub.com</a>.</p>
    </div>
 
    <?php include('components/footer.php');?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>


<!-- arning: Undefined array key "threadid" in C:\xampp\htdocs\forum\thread_list.php on line 29 -->
