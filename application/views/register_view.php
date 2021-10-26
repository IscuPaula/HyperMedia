<DOCTYPE html>
<html lang="en">
    <head>
        <title> Register </title>
    </head>
    <body>
    <form method="post"action="<?php echo site_url('Register');?>">

         <div class="container">
             <h1>Fill details </h1>
             <div class="form-floating">
                <label for="fname"> <b> First Name </b> </label><br>
                <input type="text" name="fname" id="fname">
            </div>

            <div class="form-floating">
             <label for="lname"><b> Last Name </b> </label> <br>
             <input type="text" name="lname" id="lname">
             </div>

             <div class="form-floating">
             <label for="usernmae"> <b> Username </b> </label> <br>
             <input type="text" name="usernmae" id="usernmae">
             </div>

             <div class="form-floating">
             <label for="email"> <b> Email </b> </label><br>
             <input type="text" name="email" id="email">
            </div>

             <div class="form-floating">
             <label for="password"> <b> Password </b> </label><br>
             <input type="password" name="password" id="password">
             </div>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button> <br>
        If you  have account, please <a href="login">Login</a>
  </div>
  
</form>
    </body>
</html>