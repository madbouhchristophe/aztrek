<?php
require_once '../../../model/database.php';

$id = $_GET["id"];
$pays = getOneEntity("commercial", $id);

require_once '../../layout/header.php';
?>

<h1>Modifier Commerciaux</h1>

<form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" value="<?php echo $commercial["nom"]; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="prenom">Nom</label>
        <input type="text" id="prenom" name="prenom" value="<?php echo $commercial["prenom"]; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="photo">Photo</label>
        <input type="file" id="photo" name="photo" accept="image/*" class="form-control">
        <?php if (!empty($commercial["photo"])) : ?>
            <img src="../../../uploads/<?php echo $commercial["photo"]; ?>" class="img-thumbnail">
        <?php endif; ?>
    </div>
    <input type="hidden" name="id" value="<?php echo $commercial["id"]; ?>">
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>


<?php require_once '../../layout/footer.php'; ?>
