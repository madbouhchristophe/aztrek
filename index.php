<?php
require_once 'lib/functions.php';
require_once 'model/database.php';


getHeader("Accueil");
?>

 <section id="destinations" class="container">

<h1>DESTINATIONS AU TOP</h1>

<div class="sejours">

  <article id="banana-road">
    <img src="uploads/banana.JPG" alt="plantes">
    <h2>BANANA ROAD</h2>
    <p>
      Amoureux de la nature et des grands espaces, profitez du printemps pour un trek inoubliable au Costa Rica. 7 jours de pur bonheur. À partir de 2500 euros.
    </p>
  </article>


  <article id="circuit-yucatan">
    <img src="uploads/yucatan.JPG" alt="pyramide">
    <h2>CIRCUIT YUCATAN</h2>
    <p>
      À vous les mystères des terres aztèque, un séjour haut en couleur avec des trek sublimes dans la région des volcans. 8 jours intenses au MEXIQUE. À partir de 3000 euros.
    </p>
  </article>

  <article id="circuit copan-tour">
    <img src="uploads/copan.jpg" alt="fleuve">
    <h2>COPAN TOUR</h2>
    <p>
      Séjour roots pour amateur de sensations fortes. Sublime trek au HONDURAS... pour spécialiste only 15 jours intenses. À partir de 4000 euros
    </p>
  </article>

</div>

</section>

<section id="aventuriers" class="container">

<h1>AVENTURIERS</h1>
<div class="emile-fang">

  <article id="emile">
    <img src="uploads/emile.jpg" alt="aventurier">

    <p>
      Ce voyage reste l’un des plus beaux. Habitué à des voyages aux longs cours, j’ai vibré et adoré ce séjour au Mexique. L’équipe Aztrek fût parfaite de bout en bout. ÉMILE
    </p>
  </article>

  <article id="fang">
    <img src="uploads/fang.jpg" alt="aventurier">

    <p>
      J’ai adoré ce voyage et fût très touchée par la gentillesse des habitants. L’équipe Aztrek a été très efficace et toujours à l’écoute. FANG

    </p>
  </article>


</section>

<section id="nomade" class="container">

<h1>CAFÉ NOMADE</h1>


<div class="cafe">

  <article id="cafe-nomade">

    <img src="images/cafe.jpg" alt="cafe nomade">
    <p>
      SAMEDI 28 AVRIL 2018 PETITE NATURE À PARTIR DE 10H

    </p>
  </article>
</section>

  <section id="temoin" class="container">

    <h1>NOTRE TÉMOIN</h1>

    <div class="temoignage">

      <article id="temoignage-anna">
        <img src="uploads/pyramide.jpg" alt="photo pyramide mexique">

        <p>
          L'une de mes étapes préférées lors de mon séjour.
        </p>
      </article>

      <article id="temoignage-anna-2">


        <img src="uploads/city.jpg" alt="photo désert mexique">

    <p>
      Un peu de détente après un trek sublime.
    </p>

    </article>

</div>


<article id="invitation">
  <p>
    "Après un voyage très réussi au Mexique et des souvenirs plein la tête, je serai très heureuse de partager mes bonheurs AZTREK avec vous autour d’un bon café chez Flavie et Nathalie." Anna
</article>

<?php getFooter(); ?>