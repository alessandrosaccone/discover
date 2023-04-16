<?php
    $dbconn = pg_connect("host=localhost port=5432 dbname=postgres 
                user=postgres password=postgres") 
                or die('Could not connect: ' . pg_last_error());
?>

<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="bootstrap" href="css/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/stylesheet_app.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <script src="js/script.js"></script>
    <script src="js/script_app.js"></script>
    <script src="js/script_responsiveness.js"></script>

    <title>Visite</title>
  </head>
  <body>
    <div class="all_header" id="head">
      <h1>Discover</h1>
      <p>Go wherever you want</p>
    </div>
    <div class="navheader_general" id="navbar_app">
      <nav class="navbar">
        <a href="home.html" id="home">Home</a>
        <a href="app.html">Visite</a>
        <a href="guide.html">Guide</a>
        <a href="login.html">Login</a>
        <a href="bacheca.html">Profilo</a>
      </nav>
    </div>

    <!-- deleting the "home" from the navbar while using a mobile device -->
    <script>
      myfunction();
    </script>

    <div class="container">
      <div class="search_container" id="search">
        <form action="app_query.php" method="POST">
          <div class="search-bar_center">
            <input
              type="text"
              placeholder="Ricerca un luogo..."
              name="search"
            />
            <button type="submit"><i class="bx bx-search"></i></button>
          </div>
        </form>
      </div>
    <?php
        if ($dbconn) {
            $val=$_POST['search'];
            if ($val=='')
                $q1 = "select * from guida g join schede s on s.nome_guida=g.nome and s.cognome_guida=g.cognome";
            else 
                $q1 = "select * from guida g join schede s on s.nome_guida=g.nome and s.cognome_guida=g.cognome where (s.citta 
                LIKE '$val%' or s.title LIKE '$val%')";
            $result = pg_query($dbconn, $q1);
            if ($result==false)
                echo "<br> <h1> Non è stata trovata nessuna riga </h1>";
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
                $prezzo=$row['price'];
                $img=$row['image'];
                $nome=$row['nome_guida'];
                $cognome=$row['cognome_guida'];
                $i++;
                $price_1=$prezzo*$ore;
                if ($persone!=0)
                    $price_2=($prezzo*$ore)/$persone;
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
                                <button class='card-link_2'>Prenota tutti i posti: €$price_1 </button>
                                <button class='card-link_2'>Prenota singolo: €$price_2</button>
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