<?php
    require_once(__DIR__ . "/../model/config.php"); 
?>

<h1>Register</h1>
<!-- the register page where you register duhh -->
<form method="post" action="<?php echo $path . "controller/create-user.php";?>">
    <div>
        <label for="email">Email: </label>
        <!-- type in your email -->
        <input type="text" name="email" /> 
    </div>
    <br />
    <br />
    <div>
        <label for="username">Username: </label>
        <!-- make a username for your account -->
        <input type="text" name="username" />
    </div>
    <br />
    <br />
    <div>
        <label for="password">Password: </label>
        <!-- make a password for your account -->
        <input type="password" name="password" />
    </div>
    <br />
    <br />
    <div>
        <!-- submit it and then login -->
        <button type="submit">Enter</button>
    </div>
</form>