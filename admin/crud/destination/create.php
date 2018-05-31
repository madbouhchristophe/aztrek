


<?php
require_once '../../../model/database.php';

$list_pays = getAllEntity("pays");
$list_commercial = getAllEntity("commercial");

require_once '../../layout/header.php';
?>

<h1>Nouvelles Destinations</h1>

<form action="create_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="pays">Pays</label>
        <select id="pays" name="pays_id" class="form-control">
            <?php foreach ($list_pays as $pays) : ?>
                <option value="<?php echo $pays["id"]; ?>"><?php echo $pays["titre"]; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="titre">Titre</label>
        <input type="text" id="titre" name="titre" class="form-control">
    </div>
    <div class="form-group">
        <label for="photo">Photo</label>
        <input type="file" id="photo" name="photo" accept="image/*" class="form-control">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="price">Prix</label>
        <input type="number" id="prix" name="prix" class="form-control">
    </div>
    <div class="form-group">
        <label for="au_top">Au top</label>
        <input type="checkbox" id="au_top" name="au_top" class="form-control">
    </div>
    <div class="form-group">
        <label for="nb_jours">Nombre de jours</label>
        <input type="number" id="nb_jours" name="nb_jours" class="form-control">
    </div>

    <div class="form-group">
        <label for="commercial">Commercial</label>
        <select id="commercial" name="commercial_id" class="form-control">
            <?php foreach ($list_commercial as $commercial) : ?>
                <option value="<?php echo $commercial["id"]; ?>"><?php echo $commercial["nom"]; ?> <?php echo $commercial["prenom"]; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    

    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>


<?php require_once '../../layout/footer.php'; ?>
