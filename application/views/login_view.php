<DOCTYPE html>
<html lang="en">
    <head>
        <title> Login </title>
    </head>
<body>
    <form method="post" action="<?php echo site_url('Login');?>">

        <div class="container">
            <h1>Fill details </h1>

            <div class="form-floating">
                <label for="usernmae"> <b> Username </b> </label> <br>
                <input type="text" name="usernmae" required value="<?php echo set_value('username');?>">
            </div>

            <div class="form-floating">
                <label for="password"> <b> Password </b> </label><br>
                <input type="password" name="password" required value="<?php echo set_value('password');?>">
            </div>
        </div>
            <button type="submit" >Login</button> <br>
    </form>
</body>
</html>