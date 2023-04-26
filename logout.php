<?php
    session_start();
    if(isset($_SESSION['username'])) {
        echo 'Logout';
    }
    else {
        echo 'Login';
    }
?>