
 <?php
 //links to the login to verify it\\
    require_once(__DIR__ . "/controller/login-verify.php");
    require_once(__DIR__ . "/view/header.php");
    //this makes sure if the user is logged in or not\\
    if(authenticatedUser()){
        require_once(__DIR__ . "/view/navigation.php");
    }
    //links to all the stuff they few on the blog\\
    require_once(__DIR__ . "/controller/create-db.php");
    require_once(__DIR__ . "/view/footer.php");
    require_once(__DIR__ . "/controller/read-post.php");
 ?>
   