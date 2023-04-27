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
            // Query per verificare se i dati sono presenti nel database
            $sql = "select distinct * from guida g join utente_guida ug on g.nome=ug.nome and g.cognome=ug.cognome";
            $result = pg_query($dbconn, $sql);

            if ($result==false)
                die("Could not find any row" . pg_last_error());
            echo '<section class="swiper mySwiper" id="zona">
            <div class="swiper-wrapper">';
            while ($row = pg_fetch_array($result)) {
              $nome=$row['nome'];
              $cognome = $row['cognome'];
              $citta = $row['citta']; 
              $img = $row['image'];
              $email = $row['email'];

            echo "<div class='card swiper-slide'>
                    <div class='card__image'>
                      <img src='$img' alt='card image' />
                    </div>
  
                    <div class='card__content'>
                      <span class='card__title'> $nome $cognome </span>
                      <p class='card__text'>Città: $citta</p>
                      <p class='card__text'>Email: $email</p>
                      <button class='card__btn'>Profilo</button>
                    </div>
                  </div>";

                }
            echo '</div>
            </section>';
        }
    ?>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="js/script_guide.js"></script>
  </body>