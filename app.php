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
            $val_i = $_GET['search'];
            $lan_i = $_GET['lingua']; 
            $val = strtolower($val_i);
            $lan = strtolower($lan_i);

            if (empty($val) && empty($lan)) {
                $q1 = "select distinct * from guida g join schede s on s.nome_guida=g.nome and s.cognome_guida=g.cognome";}
            else if (empty($lan) && !empty($val)) {
                $q1 = "select distinct * from guida g join schede s on s.nome_guida=g.nome and s.cognome_guida=g.cognome where lower(s.title)
                LIKE '%$val%' or lower(s.citta) LIKE '%$val%'";}
            else if (!empty($lan) && empty($val)) {    
                $q1 = "select distinct * from guida g join schede s on s.nome_guida=g.nome and s.cognome_guida=g.cognome where lower(s.language) 
                LIKE '%$lan%'";}
            else $q1 = "select distinct * from guida g join schede s on s.nome_guida=g.nome and s.cognome_guida=g.cognome where (lower(s.title)
            LIKE '%$val%' or lower(s.citta) LIKE '%$val%') and lower(s.language) LIKE '%$lan%'";
            
            $result = pg_query($dbconn, $q1);
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
                if ($persone!=0) {
                    $price_2=($prezzo*$ore)/$persone;
                    if (is_float($price_2))
                        $price_2=number_format((float)$price_2, 2, '.', '');
                }

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
                                Data e ora: <span style='font-weight: normal'>$data $ora</span>
                            </h4>
                        </div>
                        <div class='card-link-wrapper'>
                            <a class='popup card-link' onclick='return funct($i);'>Prenota
                            <span class='popuptext' id='myPopup_$i'>
                                <button class='card-link_2' style='font-weight: bold;'>Prenota tutti i posti: €$price_1</button>
                                <button class='card-link_2' style='font-weight: bold;'>Prenota singolo: €$price_2</button>
                            </span>
                            </a>
                        </div>
                        </li>";
                if ($i%2==0) {
                    echo '</ul>';
                }
            }  
        }
    ?>
    </body>
    </html>