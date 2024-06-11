<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
    Launch demo modal
</button> -->


<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="loginModalLabel">Login to CodeHub:</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method='post' action="/forum/components/handle_login.php">
            <div class="modal-body">
           
                    <div class="mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" placeholder="enter your name" class="form-control" id="username" name="username"
                            aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div id="userHelp" class="form-text">We'll never share your username and passsword with anyone else.
                    </div>

                    <button type="submit" class="btn btn-success">Login</button>
               
            </div>
            
            </form>
        </div>
    </div>
</div>