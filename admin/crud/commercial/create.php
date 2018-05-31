<?php require_once '../../layout/header.php'; ?>

<h1>Commercial</h1>

<form action="create_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" class="form-control">
    </div>
    <div class="form-group">
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" class="form-control">
    </div>

    <div class="form-group">
        <label for="photo">Photo</label>
        <input type="file" id="photo" name="photo" accept="image/*" class="form-control">
    </div>

    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>  
</form>


<?php require_once '../../layout/footer.php'; ?>
