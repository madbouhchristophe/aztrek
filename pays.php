<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$id = $_GET["id"];
$pays = getOneEntity("pays", $id);
// Récupérer la liste des destinations du pays
$list_destinations = getAllDestinationsByPays($id);
//debug($list_destinations);

getHeader($pays["titre"]);
?>

<h2><?php echo $pays["titre"]; ?></h2>

<?php foreach ($list_destinations as $destination) : ?>
<a href="destination.php?id=<?php echo $destination["id"]; ?>">
<article>
    <h3>
            <?php echo $destination["titre"] ?>
    </h3>
    <img src="uploads/<?php echo $destination["photo"]; ?>"> 
</article>
</a>
<?php endforeach; ?>

<?php getFooter(); ?>