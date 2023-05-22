<?php
    require_once "connect.php";
    $nome=$_POST['nome_p'];
    $cognome=$_POST['cognome_p'];
    $titolo=$_POST['title_p'];
    $data=$_POST['data_p'];
    $lingua=$_POST['lingua_p'];
    $logMessage = "$nome $cognome $titolo $citta $data $lingua";
    error_log($logMessage);
    $q1 = "DELETE FROM schede WHERE nome_guida = $1 AND cognome_guida = $2 AND title = $3 AND date = $4 AND language = $5";
    $result = pg_query_params($dbconn, $q1, array($nome, $cognome, $titolo, $data, $lingua));
    if (!$result)
        die("errore");
?>