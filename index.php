<?php 
    $url = 'https://dev.kidopilabs.com.br/exercicio/covid.php?listar_paises=1';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $country = json_decode(curl_exec($ch));

    $urlCovid = "https://dev.kidopilabs.com.br/exercicio/covid.php?pais=Brazil";
    $chCovid = curl_init($urlCovid);
    curl_setopt($chCovid, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($chCovid, CURLOPT_SSL_VERIFYPEER, false);
    $covidData = json_decode(curl_exec($chCovid));


?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">
    <title>Covid</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Bulma Version 0.7.2-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css" />
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <?php include('templates/header.php'); ?>
    <form action="" class='form'>
    <div  class="container has-text-centered">
        <p class="subtitle">Escolha uma pais</p>
        <select class="select is-medium is-rounded">
        <?php foreach($country as $key => $value) { ?>
            <?php if ($key === '24' || $key === '33' || $key === '9') { ?>
              <option value=" <?php echo "$key" ?>"><?php  echo $value ?></option>
            <?php } ?>
        <?php } ?>
       </select>
    </div>
    <input class="input" type="submit">
    </form>



  </body>
</html>