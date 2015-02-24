<?php
    require_once(__DIR__ . "/../model/config.php"); 
?>

<h1>Register</h1>

<form method="post" action="<?php echo $path . "controller/create-user.php";?>">
    <div>
        <label for="email">Email: </label>
        <input type="text" name="email" /> 
    </div>
    <br />
    <br />
    <div>
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