<?php
    require_once(__DIR__ . "/../model/config.php"); 
    require_once(__DIR__ . "/../controller/login-verify.php");
    // protects websites pages and files from hackers\\
    if(!authenticatedUser()){
        header("Location: " . $path . "index.php");
        die();
    }
?>
<nav>
    <ul>
        <!-- sends the user to this path --> 
         <li><a href="<?php echo $path . "post.php"?>">Blog Post Forms</a></li>
    </ul>
</nav>

