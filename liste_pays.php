<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$list_pays = getAllEntity("pays");

getHeader("Liste des pays");
?>

<ul>
    <?php foreach ($list_pays as $pays) : ?>
        <li>
            <img src="uploads/<?php echo $pays["photo"]; ?>">
            <a href="pays.php?id=<?php echo $pays["id"]; ?>">
                <?php echo $pays["titre"]; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>


<?php getFooter(); ?>