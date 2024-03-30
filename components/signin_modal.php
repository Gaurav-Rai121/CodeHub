<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .upload {
        width: 100px;
        position: relative;
        margin: auto;
    }


    .upload .user {
        border-radius: 50%;
        border: 6px solid #eaeaea
    }

    .upload .round {
        position: absolute;
        bottom: 0;
        right: 0;
        background-color: white;
        width: 32px;
        height: 32px;
        line-height: 33px;
        text-align: center;
        border-radius: 50%;
        overflow: hidden;
    }

    .upload .round input[type="file"] {
        position: absolute;
        transform: scale(2);
        opacity: 0;
    }
    </style>
</head>

<body>


    <div class="modal fade" id="signinModal" tabindex="-1" aria-labelledby="signinModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="signinModalLabel">Signup to CodeHub:</h1>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method='post' action="/forum/components/handle_signup.php">
                    <div class="modal-body">

                        <div class="upload">
                            <img src="components/images/user.jpg" class="user" alt=" is the image" width="100"
                                height="100">
                            <div class="round">
                                <input type="file" name="image" accept=".png, .jpg, .jpeg" >
                                <i class="fa fa-camera" class="file"><img src="components/images/camera.jpg" alt=""
                                        height="20px" class="file"></i>

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">UserEmail:</label>
                            <input type="text" placeholder="enter your name" class="form-control"
                                id="exampleInputEmail1" name="email" aria-describedby="emailHelp">

                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Confirm Password:</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="cpass">
                        </div>

                        <button type="submit" class="btn btn-primary">Signin</button>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>