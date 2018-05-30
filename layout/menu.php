<?php
require_once __DIR__ . '/../lib/functions.php';

$utilisateur = currentUser();
?>

<a id="nav-toggle" href="#main-nav"></a>
<nav id="main-nav" role="navigation">
    <ul class="">
        <li><a href="liste_pays.php">Pays</a></li>
        <li><a href="#">Tribu Aztrek</a></li>
        <li><a href="#">Contact</a></li>

        <?php if (!isset($utilisateur["id"])) : ?>
            <li><a href="admin/login.php">Login</a></li>
        <?php else: ?>
            <li><a href="#">Mon Compte</a></li>
        <?php endif; ?>
    </ul>
</nav>