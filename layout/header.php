

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://cdn.jsdelivr.net/jquery.sidr/2.2.1/stylesheets/jquery.sidr.light.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">

  <title>AZTREK - <?php echo $title; ?></title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <header class="container">

    <form class="search-form" action="#" method="get">
      <input type="text" name="keywords" placeholder="Rechercher">
      <button type="submit" name="submit-btn"><i class="fa fa-search" aria-hidden="true"></i>Valider</button>
    </form>
  
    <div id="logo">
     
      <a href="index.html" title="Retour à l'accueil">
           
        <img src="./images/logo-aztrek-01.png" alt="Logo ...">
      </a>
    </div>
  <?php getMenu(); ?>
    


    <section id="slider">
      <div id="slider-img">
        <img src="images/slider.jpg" alt="Mongolfière">
      </div>
    </section>

  </header>

  <main>
