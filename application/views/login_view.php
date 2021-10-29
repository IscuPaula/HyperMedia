<DOCTYPE html>
<html lang="en">
    <head>
        <title> Login </title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/login.css"/>
         <script type="text/javascript" src="<?php echo base_url();?>assets/js/login.js"></script>
         <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    </head>
<body>
<form method="post" action="<?php echo site_url('Login');?>">

    <form>
        <div class="container">

            <div class="form-floating">
                <label for="username"> <b> Username </b> </label> <br>
                <input type="text" name="username" required  value="<?php echo set_value('username');?>">
            </div>

            <div class="form-floating">
                <label for="password"> <b> Password </b> </label><br>
                <input type="password" name="password" required value="<?php echo set_value('password');?>">
            </div>
        </div>
            <button  type="submit" value="Login">Login</button> <br>
            If you don't  have account, please <a href="register"><b>Register</b></a>

    </form>
</body>
</html>