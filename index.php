<?php
    session_start();
    $u = $_GET['u'];
    $p = $_GET['pw'];

    if(isset($_SESSION['LOG'])) {
        echo "logged in!";
        echo '<a href="logout.php">Out</a>';
    }
    else {
        if($u == 'a' && $p == 'b')
        {
            $_SESSION['LOG'] = 'imloggedin#id';
            header("Location: index.php");
        }
    }

?>