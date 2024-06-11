<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:system-ui;
        }

        body{
            display:grid;
            place-content:center;
            min-height:100vh;
            background-color:#C4DFE6;
        }

        .mes p{
            background-color: #FFFFF0

;           padding:0.4rem 1rem;
            width:fit-content;
            border-radius:5px;
            font-size:12px;
            color:black;
            font-weight:normal;
            margin-bottom:1rem;
        }

        .mes .sender{
            background-color:#FFFAF0

;
            align-self:end
        }

        .mes p span{
            display:block;
            font-weight:bold;
            opacity:0.5;
            text-align:left;
            color:black
            
        }





        .chat{
            background-color:#66A5AD;
            padding:1rem;
            margin-bottom:8px;
            border-radius:10px
        }

        .mes{
            width:420px;
            height:480px;
            border-top:1px solid #CEE6F2;
            border-bottom:1px solid #CEE6F2;
            margin:1rem auto;
            padding:1rem 0;
            display:flex;
            flex-direction:column;
        }

        .chat h2{
            font-size:2rem;
            font-family:cursive;
            text-align:center;
            color:black;
   
        
            
        }

        .input-msg{
            
            justify-content:space-between
        }

        input{
            width:70%;
            font-size:1.3rem;
            padding: 0.4rem 1.3rem;
            border-radius:0.6rem  ;
            background-color:#F5F5F5;

        
            
        }

        .input-msg button{
            background-color:#171747;
            color:white;
            border:none;
            cursor:pointer;
            padding:0.5rem 1.2rem;
            font-size:1.3rem;
            border-radius:5px
        }
        img{
            border-radius:15px;
            position: relative;
            top:5px;
            
        }

        
    </style>
</head>
<body>


<?php
     include('database.php');
    //fetching the username you want to chat  

        $user_id =$_GET['user_id'];     
             
      $myrow="SELECT * FROM `users` Where sno=$user_id";
      $myconn=mysqli_query($myconnect,$myrow);
      while($myrow2=mySqli_fetch_assoc($myconn))
      {
         
          $myname=$myrow2['user_email'];
          
         
      }
   ?>





















     

    <div class="chat">
        <h2><img src="images/user.jpg" width="30px"> 
                                           <span>
                                                <?php echo $myname; ?>  </span></h2>
        
        <div class="mes">
           <p class="receiver">hello</p> 
           <!-- <p class="sender">hello</p> -->

        </div>

        <div class="input-msg">
            
            <input type="text" id="userInput">
            <button >send</button>
            <input type="submit">
        </div>
    </div>
    <?php
    
    
    
    
    
    
    
    
    ?>
      
    <script>
        // window.onkeydown=(e)=>{
        //     if(e.key=="enter")sendMessage();
        // }
        function sendMessage() {
        let input=document.body.getElementsByTagName("input").value;

        fetch(input).
        then(r=>{
            if(r.ok)
            {
                return r.text();
            }
            }).
        then(()=>console.log("message has been added"))

        }
    myInputValue= document.body.querySelector("input").value
    console.log(myInputValue);

document.body.querySelector("button").addEventListener("click",()=>{
    document.body.querySelectorAll("p")[1].innerHTML=myInputValue;

})

document.body.querySelectorAll("input")[1].addEventListener("click",()=>{
    document.body.querySelectorAll("p")[1].innerHTML=myInputValue;

})





































    </script>

</body>
</html>