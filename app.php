<?php
    $dbconn = pg_connect("host=localhost port=5432 dbname=postgres 
                user=postgres password=postgres") 
                or die('Could not connect: ' . pg_last_error());
?>

<!DOCTYPE html>
<html lang="en">
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
    <title>Visite</title>
</head>
<body> 
    <?php
        /*if ($dbconn) {
            $q1 = "select * from TABLE";
            $result = pg_query($dbconn, $q1); 
            $tuple=pg_fetch_array($result, null, PGSQL_ASSOC)))
            for ($i=0; $i<count($tuple); $i++) {
                if ($i%2==0) {
                    echo '<ul class="cards">'
                }
                echo '<li class="card">'
                $row=$tuple[$i];
                $title=$row['title];
                $description=$row['description'];
                $lingua=$row['language'];
                $data=$row['data'];
                $ora=$row['ora'];
                $prezzo=$row['prezzo'];
                $img=$row['image'];

                echo '  <div class="card_image">
                            <img src="$img" />
                        </div>
                        <h3 class="card-title">
                            $title
                        </h3>
                        <div class="card-content">
                            <p>
                                $description
                            </p>
                        </div>
                        <div class="card-languages">
                            <h4>
                                Lingua: $lingua <br />
                                Data e ora: $data
                            </h4>
                        </div>
                        <div class="card-link-wrapper">
                            <a href="" class="card-link">Prenota</a>
                        </div>
                        </li>';
                if ($i%2==0) {
                    echo '</ul>'
                }
            }
        }*/
    ?>
<?php 
        echo 
    '<ul class="cards">
    <li class="card">
      <div class="card_image">
        <img src="image/guida1.webp" />
      </div>
      <h3 class="card-title">
        Service 1 service 10 service tennis prova prova prova prova prova
        prova prova
      </h3>
      <div class="card-content">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Eueueueueueueueueueueueu
        </p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Eueueueueueueueueueueueu Lorem ipsum dolor sit amet consectetur
      </div>
      <div class="card-languages">
        <h4>
          Lingua: <br />
          Data e ora:
        </h4>
      </div>
      <div class="card-link-wrapper">
        <a href="" class="card-link">Prenota</a>
      </div>
    </li>
    <li class="card">
      <div class="card_image"><img src="image/guida2.webp" /></div>
      <h3 class="card-title">
        Service 1 service 10 service tennis prova prova prova
      </h3>
      <div class="card-content">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
      <div class="card-languages"><h4>Lingue parlate:</h4></div>
      <div class="card-link-wrapper">
        <a href="" class="card-link">Prenota</a>
      </div>
    </li>
  </ul>

  <ul class="cards">
    <li class="card">
      <div class="card_image"><img src="image/guida3.webp" /></div>
      <h3 class="card-title">
        Service 1 service 10 service tennis prova prova prova
      </h3>
      <div class="card-content">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
      <div class="card-languages"><h4>Lingue parlate:</h4></div>
      <div class="card-link-wrapper">
        <a href="" class="card-link">Acquista</a>
      </div>
    </li>
    <li class="card">
      <div class="card_image"><img src="image/guida4.jpg" /></div>
      <h3 class="card-title">
        Service 1 service 10 service tennis prova prova prova
      </h3>
      <div class="card-content">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
      <div class="card-languages"><h4>Lingue parlate:</h4></div>
      <div class="card-link-wrapper">
        <a href="" class="card-link">Acquista</a>
      </div>
    </li>
  </ul>

  <ul class="cards">
    <li class="card">
      <div class="card_image">Image</div>
      <h3 class="card-title">
        Service 1 service 10 service tennis prova prova prova
      </h3>
      <div class="card-content">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
      <div class="card-languages"><h4>Lingue parlate:</h4></div>
      <div class="card-link-wrapper">
        <a href="" class="card-link">Acquista</a>
      </div>
    </li>
    <li class="card">
      <div class="card_image">Image</div>
      <h3 class="card-title">
        Service 1 service 10 service tennis prova prova prova
      </h3>
      <div class="card-content">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
      <div class="card-languages"><h4>Lingue parlate:</h4></div>
      <div class="card-link-wrapper">
        <a href="" class="card-link">Acquista</a>
      </div>
    </li>
  </ul>

  <ul class="cards">
    <li class="card">
      <div class="card_image">Image</div>
      <h3 class="card-title">
        Service 1 service 10 service tennis prova prova prova
      </h3>
      <div class="card-content">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
      <div class="card-languages"><h4>Lingue parlate:</h4></div>
      <div class="card-link-wrapper">
        <a href="" class="card-link">Acquista</a>
      </div>
    </li>
    <li class="card">
      <div class="card_image">Image</div>
      <h3 class="card-title">
        Service 1 service 10 service tennis prova prova prova
      </h3>
      <div class="card-content">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
      <div class="card-languages"><h4>Lingue parlate:</h4></div>
      <div class="card-link-wrapper">
        <a href="" class="card-link">Acquista</a>
      </div>
    </li>
  </ul>

  <ul class="cards">
    <li class="card">
      <div class="card_image">Image</div>
      <h3 class="card-title">
        Service 1 service 10 service tennis prova prova prova
      </h3>
      <div class="card-content">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
      <div class="card-languages"><h4>Lingue parlate:</h4></div>
      <div class="card-link-wrapper">
        <a href="" class="card-link">Acquista</a>
      </div>
    </li>
    <li class="card">
      <div class="card_image">Image</div>
      <h3 class="card-title">
        Service 1 service 10 service tennis prova prova prova
      </h3>
      <div class="card-content">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
      <div class="card-languages"><h4>Lingue parlate:</h4></div>
      <div class="card-link-wrapper">
        <a href="" class="card-link">Acquista</a>
      </div>
    </li>
  </ul>

  <ul class="cards">
    <li class="card">
      <div class="card_image">Image</div>
      <h3 class="card-title">
        Service 1 service 10 service tennis prova prova prova
      </h3>
      <div class="card-content">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
      <div class="card-languages"><h4>Lingue parlate:</h4></div>
      <div class="card-link-wrapper">
        <a href="" class="card-link">Acquista</a>
      </div>
    </li>
    <li class="card">
      <div class="card_image">Image</div>
      <h3 class="card-title">
        Service 1 service 10 service tennis prova prova prova
      </h3>
      <div class="card-content">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
      <div class="card-languages"><h4>Lingue parlate:</h4></div>
      <div class="card-link-wrapper">
        <a href="" class="card-link">Acquista</a>
      </div>
    </li>
  </ul>'
    ;
    ?>
</body>
</html>