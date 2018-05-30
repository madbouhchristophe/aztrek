<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$id = $_GET["id"];
$destination = getOneDestination($id);

$list_options = getAllOptionsByDestination($id);

getHeader($destination["titre"]);
?>
<a>
    <h1><?php echo $destination["titre"]; ?></h1>

    <h2><?php echo $destination["description"]; ?></h2>

    <h3><?php echo $destination["prix"]; ?> Euros</h3>
</a>

<h3>Commercial</h3>
<ul>
    <li><?php echo $destination["commercial_nom"]; ?> <?php echo $destination["commercial_prenom"]; ?></li>
    <li><img src="uploads/<?php echo $destination["commercial_photo"]  ?>"></li>
    <li><?php echo $destination["commercial_telephone"]; ?></li>
    
</ul>

<h3>Options</h3>
<ul>
    <?php foreach ($list_options as $option) : ?>
        <li><?php echo $option["label"]; ?></li>
    <?php endforeach; ?>
</ul>


<img src="uploads/<?php echo $destination["photo"]; ?>"> 

<?php getFooter(); ?>
