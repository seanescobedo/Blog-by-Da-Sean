<?php
    require_once(__DIR__ . "/../model/config.php"); 
    require_once(__DIR__ . "/../controller/login-verify.php");
    
    if(!authenticatedUser()){
        header("Location: " . $path . "index.php");
        die();
    }
?>

<h1>Make A Post</h1>

<form method="post" action="<?php echo $path . "controller/create-post.php";?>">
    <div>
        <label for="title">Title: </label>
        <input type="text" name="title"/>
    </div>
    <br />
    <br />
    <div>  
        <label for="post">Text: </label>
        <textarea name="post"></textarea>
    </div>
    <br />
    <br />
    <div>
        <button type="submit">Post</button>
    </div>   
</form>