<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="css/guide.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <title>Guide</title>
  </head>
  <body>
  <?php
        require 'connect.php';
        if($dbconn){
            $val_nome = $_GET['nome'];
            $val_cognome = $_GET['cognome'];
            $val_citta = $_GET['citta'];

            $nome = strtolower($val_nome);
            $cognome = strtolower($val_cognome);
            $citta = strtolower($val_citta); 
            
            // Query per verificare se i dati sono presenti nel database
            $sql = "SELECT * FROM utente_guida WHERE nome='$nome' AND cognome='$cognome' AND citta='$citta'";
            $result = pg_query($dbconn, $sql);

            if ($result==false)
                die("Could not find any row" . pg_last_error());

            

        }
    ?>
  </body>