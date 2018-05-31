<?php require_once '../../layout/header.php'; ?>

<h1>Nouveau Pays</h1>

<form action="create_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="titre">Titre</label>
        <input type="text" id="titre" name="titre" class="form-control">
    </div>

    <div class="form-group">
        <label for="photo">Photo</label>
        <input type="file" id="image" name="image" accept="image/*" class="form-control">
    </div>

    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>  
</form>


<?php require_once '../../layout/footer.php'; ?>
