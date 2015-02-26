<?php
    require_once(__DIR__ . "/../model/config.php"); 
    require_once(__DIR__ . "/../controller/login-verify.php");
    
    if(!authenticatedUser()){
        header("Location: " . $path . "index.php");
        die();
    }
?>

<h1>Make A Post</h1>
<!-- allows the user when he/she is logged in to make a post -->
<form method="post" action="<?php echo $path . "controller/create-post.php";?>">
    <div>
        <label for="title">Title: </label>
        <!-- title the post that your making -->
        <input type="text" name="title"/>
    </div>
    <br />
    <br />
    <div>  
        <label for="post">Text: </label>
        <!-- type what you want to write about  -->
        <textarea name="post"></textarea>
    </div>
    <br />
    <br />
    <div>
        <!-- submit it to the blog using this button -->
        <button type="submit">Post</button>
    </div>   
</form>