<?php
    session_start();
    if(isset($_SESSION['username'])) { 
        echo "Benvenuto " . $_SESSION['nome'];
    }
?>