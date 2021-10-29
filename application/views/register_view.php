<DOCTYPE html>
<html lang="en">
    <head>
        <title> Register </title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/register.css"/>
         <script type="text/javascript" src="<?php echo base_url();?>assets/js/register.js"></script>
         <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    </head>
<body>
    <form method="post" action="<?php echo site_url('Register');?>">
        <div class="container">
            <div class="form-floating">
                <label for="fname"> <b> First Name </b> </label><br>
                <input type="text" name="fname" value="<?php echo set_value('fname');?>"/>
            </div>

            <div class="form-floating">
                <label for="lname"><b> Last Name </b> </label> <br>
                <input type="text" name="lname"  value="<?php echo set_value('lname');?>"/>
            </div>

            <div class="form-floating">
                <label for="usernmae"> <b> Username </b> </label> <br>
                <input type="text" name="username" value="<?php echo set_value('username');?>"/>
            </div>

            <div class="form-floating">
                <label for="email"> <b> Email </b> </label><br>
                <input type="text" name="email"  value="<?php echo set_value('email');?>"/>
            </div>

            <div class="form-floating">
                <label for="password"> <b> Password </b> </label><br>
                <input type="password" name="password" value="<?php echo set_value('password');?>"/>
            </div>
            <button  type="submit" value="Register">Register</button> <br>
            If you have account <a href="login"><b>Login</b></a>
        </div>
    </form>
</body>
</html>