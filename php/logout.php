<?php
    session_start();
    
    if(isset($_GET['logout'])) {
        if($_GET['logout']) {
            session_destroy();
            header("location: ../index.php");
        } else {
            echo "Fejl";
        }
    }
?>