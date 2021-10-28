<DOCTYPE html>
<html lang="en">
    <head>
        <title> Login </title>
        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/login.css">

    </head>
<body>
<form method="post" action="<?php echo site_url('Login');?>">

    <form>
        <div class="container">
            <h1>Fill credentials </h1>

            <div class="form-floating">
                <label for="username"> <b> Username </b> </label> <br>
                <input type="text" name="username"  value="<?php echo set_value('username');?>">
            </div>

            <div class="form-floating">
                <label for="password"> <b> Password </b> </label><br>
                <input type="password" name="password"  value="<?php echo set_value('password');?>">
            </div>
        </div>
            <input type="submit" value="Login"></button> <br>
            If you don't  have account, please <a href="register">Register</a>

    </form>
</body>
</html>