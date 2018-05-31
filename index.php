<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$list_destinations = getAllDestinationsAuTop();

getHeader("Accueil");
?>

<section id="destinations" class="container">

    <h1>DESTINATIONS AU TOP</h1>

    <div class="sejours">


        <?php foreach ($list_destinations as $destination) : ?>
            <article id="banana-road">
                <img src="uploads/<?php echo $destination["photo"] ?>" alt="plantes">
                <a href="destination.php?id=<?php echo $destination["id"] ?>">
                    <h2><?php echo $destination["titre"] ?></h2>
                </a>
                <p><?php echo $destination["description"] ?></p>
            </article>
        <?php endforeach; ?>

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