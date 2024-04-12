<?php
$testo = $_POST['paragrafo'];
$lunghezza_paragrafo = strlen($testo);
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
      <textarea name="paragrafo" id="" cols="30" rows="10"><?php echo $testo ?></textarea>
    </div>

    <div>
      <h4>La parola censurata è:</h4>
      <p></p>
    </div>
  </div>
</body>

</html>