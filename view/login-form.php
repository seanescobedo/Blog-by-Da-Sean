<?php
    require_once(__DIR__ . "/../model/config.php"); 
?>

<h1>Login</h1>
<!-- this makes you able to login to the blog-->
<form method="post" action="<?php echo $path . "controller/login-user.php"?>">
    <label for="username">Username: </label>
    <!-- this is where you type in your user name -->
        <input type="text" name="username" />
    </div>
    <br />
    <br />
    <div>
        <label for="password">Password: </label>
        <!-- this is where you type in your password -->
        <input type="password" name="password" />
    </div>
    <br />
    <br />
    <div>
        <button type="submit">Login</button>
    </div>
</form>