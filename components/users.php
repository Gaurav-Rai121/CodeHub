<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .upload{
        width: 100px;
        position: relative;
        margin: auto;
      }


      .upload .user{
        border-radius: 50%;
        border:6px solid #eaeaea
      }
      .upload .round{
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

      .upload .round input[type="file"]
      {
        position: absolute;
        transform: scale(2);
        opacity: 0;
      }
    </style>
</head>
<body>
    <div class="upload">
      <img src="images/user.jpg" class="user"    alt=" is the image" width="100" height="100">
      <div class="round">
        <input type="file">
        <i class="fa fa-camera"><img src="./images/camera.jpg" alt="" height="20px"></i>
       
      </div>
    </div>
    <img src="./images/camera.jpg" alt="" height="20px">
</body>
</html>