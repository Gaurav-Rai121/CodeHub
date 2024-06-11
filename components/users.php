<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="components/stylesheet/course.style.css">
    <style>
    main {
        padding: 20px;
    }

    .profile {
        text-align: center;
    }

    .profile img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        margin-bottom: 20px;
    }
    </style>
</head>

<body>
    <?php include('database.php');?>
    <?php include('header.php');?>

    <div class="container">
        <main>
            <section class="profile">
                <img src="profile_picture.jpg" alt="Profile Picture">
                <h2>Username</h2>
                <p>Email: user@example.com</p>
                <p>Joined: January 1, 2024</p>
                <p>Posts: 10</p>
                <!-- Additional user details can be added here -->
            </section>
        </main>
    </div>
    <?php include('footer.php');?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>