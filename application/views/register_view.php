<DOCTYPE html>
<html lang="en">
    <head>
        <title> Register </title>
    </head>
<body>
    <?php echo form_open('login'); ?>
    <form method="post"action="<?php echo site_url('Register');?>">
        <div class="container">
            <h1>Fill details </h1>
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
                <input type="text" name="usernmae" value="<?php echo set_value('username');?>"/>
            </div>

            <div class="form-floating">
                <label for="email"> <b> Email </b> </label><br>
                <input type="text" name="email"  value="<?php echo set_value('email');?>"/>
            </div>

            <div class="form-floating">
                <label for="password"> <b> Password </b> </label><br>
                <input type="password" name="password" value="<?php echo set_value('password');?>"/>
            </div>
                <input type="submit" value="Submit"></button> <br>
                If you  have account, please <a href="login">Login</a>
        </div>
    </form>
</body>
</html>