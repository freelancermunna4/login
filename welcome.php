<?php

session_start();
if($_SESSION["user"]==true){



?>
<h1>Welcome to <?php echo $_SESSION["user"] ?></h1>
<br>
<h2><a href="logout.php">Logout</a></h2>

<?php
}else{
    header("location:index.php");
}
?>