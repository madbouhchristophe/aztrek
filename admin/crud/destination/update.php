


<?php
require_once '../../../model/database.php';

$id = $_GET["id"];
$destinations = getOneEntity("destinations", $id);

require_once '../../layout/header.php';
?>

<h1>Modifier Destinations</h1>

<form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="titre">Titre</label>
        <input type="text" id="titre" name="titre" value="<?php echo $destinations["titre"]; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" id="description" name="description" value="<?php echo $destinations["description"]; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="prix">Prix</label>
        <input type="text" id="prix" name="prix" value="<?php echo $destinations["prix"]; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="nb_jours">Nombre de jours</label>
        <input type="number" id="nb_jours" name="nb_jours" value="<?php echo $destinations["nb_jours"]; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="au_top">Au top</label>
        <input type="number" id="au_top" name="au_top" value="<?php echo $destinations["au_top"]; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="photo">Photo</label>
        <input type="file" id="photo" name="photo" accept="image/*" class="form-control">
        <?php if (!empty($destinations["photo"])) : ?>
            <img src="../../../uploads/<?php echo $destination["photo"]; ?>" class="img-thumbnail">
        <?php endif; ?>
    </div>
    <input type="hidden" name="id" value="<?php echo $destinations["id"]; ?>">
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>


<?php require_once '../../layout/footer.php'; ?>
