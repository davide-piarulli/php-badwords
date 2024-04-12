<?php


$testo = $_POST['paragrafo'];
$parola = $_POST['parola'];
$lunghezza_paragrafo = strlen($testo);
$censura = str_replace($parola, '***', $testo);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ricezione dati</title>
</head>

<body>
  <div class="container my-5 ">
    <h1>Dati Ricevuti</h1>
    <div>
      <h4>Il paragrafo ricevuto è lungo: <?php echo $lunghezza_paragrafo ?> ed è il seguente: </h4>
      <p><?php echo $testo ?></p>
    </div>

    <div>
      <h4>Testo con parola censurata : <?php echo $censura ?></h4>
      <p></p>
    </div>
  </div>
</body>

</html>