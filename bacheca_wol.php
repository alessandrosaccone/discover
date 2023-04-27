<?php 
    session_start();
    if (!isset($_SESSION['username']))
        return 0;
    else
        http_response_code(404);
?>