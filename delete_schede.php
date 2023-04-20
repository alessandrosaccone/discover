<?php
    require_once "connect.php";
    $nome=$_POST['nome_p'];
    $cognome=$_POST['cognome_p'];
    $titolo=$_POST['title_p'];
    $citta=$_POST['citta_p'];
    $data=$_POST['data_p'];
    $ora=$_POST['ora_p'];
    $lingua=$_POST['lingua_p'];
    $q1 = "delete from schede where nome_guida=$1 and cognome_guida=$2 and title=$3 and citta=$4 and date=$5 and 
    language=$6 and time=$7";
    $result = pg_query_params($dbconn, $q1, array($nome, $cognome, $titolo, $citta, $data, $lingua, $ora));
    if (!$result)
        die("errore");
?>