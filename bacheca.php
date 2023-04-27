<?php 
    require_once 'connect.php';
    session_start();
    $s_name=$_SESSION['username'];
    $q1 = "select * from guida g where g.nome=$1";
    $result = pg_query_params($dbconn, $q1, array($s_name));
    if ($result==false)
        die("Could not find any row" . pg_last_error());
    $row = pg_fetch_array($result);
    $img=$row['image'];
    $followers=$row['followers'];
    $ratings=$row['rating'];
    $visits=$row['visits'];
    $nome=$row['nome'];
    $cognome=$row['cognome'];
    echo "<img src='$img'/>
          <div class='data'>
            <h4>Followers</h4>
            <br />
            <div id='0'>$followers</div>
          </div>
          <div class='data'>
            <h4>Visits</h4>
            <br />
            <div id='1'>$visits</div>
          </div>
          <div class='data'>
            <h4>Ratings</h4>
            <br />
            <div id='2'>$ratings su 5</div>
          </div>";
?>