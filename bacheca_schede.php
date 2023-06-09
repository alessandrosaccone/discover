<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/stylesheet_app.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <script src="js/script.js"></script>

    <script src="js/script_responsiveness.js"></script>
    <title>Visite</title>
</head>
<body> 
    <?php
        require 'connect.php';
        if ($dbconn) {
            session_start();
            $n=$_SESSION['nome'];
            $mail=$_SESSION['username'];

            $q0 = 'select * from guida where email=$1';
            $result0 = pg_query_params($dbconn, $q0, array($mail));
            $row0 = pg_fetch_array($result0);
            $c=$row0['cognome'];
            //echo "<h1>$n $c </h1>";
            $q1 = 'select * from schede g join guida a on g.nome_guida=a.nome and g.cognome_guida=a.cognome where (g.nome_guida=$1 and g.cognome_guida=$2)';
            $result = pg_query_params($dbconn, $q1, array($n, $c));
            if ($result==false)
                die("Could not find any row" . pg_last_error());
            $i=0; 
            while ($row = pg_fetch_array($result)) {
                if ($i%2==0) {
                    echo '<ul class="cards">';
                }
                $ore=$row['ore'];
                $title=$row['title'];
                $citta=$row['citta'];
                $persone=$row['persone'];
                $description=$row['description'];
                $lingua=$row['language'];
                $data=$row['date'];
                $ora=$row['time'];
                $ora=substr($ora, 0, strlen($ora)-3);
                $prezzo=$row['price'];
                $img=$row['image'];
                $nome=$row['nome_guida'];
                $cognome=$row['cognome_guida'];
                $i++;
                $price_1=$prezzo*$ore;
                if ($persone!=0)
                    $price_2=($prezzo*$ore)/$persone;
                echo "  <div class='con'>";
                echo "  <li class='card'>
                        <div class='card_image'>
                            <img src='$img' />
                        </div>
                        <h3 class='card-title'>
                            $title <br> 
                            <span class='name'>$nome $cognome</span>
                        </h3>
                        <div class='card-content'>
                            <p>
                                $description
                            </p>
                            <hr> ";
                echo " 
                            <h4 style='font-size: 15px'>Città: $citta <br/></h4>
                        </div>
                        <div class='card-languages'>
                            <h4>
                                Lingua: <span style='font-weight: normal;'>$lingua</span> <br />
                                Data e ora: <span style='font-weight: normal'>$data <br> $ora</span>
                            </h4>
                        </div>
                        <div class='card-link-wrapper'>
                            <a class='popup card-link_3'";
                            echo 'onclick="return delete_s(';
                            echo "'$title', '$nome', '$cognome', '$data', '$lingua');";
                            echo '">Elimina
                            </a>
                        </div>
                        </li>';
                echo "  </div>";
                if ($i%2==0) {
                    echo '</ul>';
                }
            }   
        }
    ?>
    </body>
    </html>