<?php
    require_once(__DIR__ . "/../model/config.php"); 
?>

<h1>Login</h1>

<form method="post" action="<?php echo $path . "controller/login-user.php"?>">
    <label for="username">Username: </label>
        <input type="text" name="username" />
    </div>
    <br />
    <br />
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password" />
    </div>
    <br />
    <br />
    <div>
        <button type="submit">Enter</button>
    </div>
</form>