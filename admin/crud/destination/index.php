<?php
require_once '../../../model/database.php';

$list_destinations = getAllEntity("destination");

require_once '../../layout/header.php';
?>

<h1>Nos nouvelles Destinations</h1>

<a href="create.php" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter</a>

<hr>

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Titre</th>
            <th>Description</th>
            <th>Photo</th>
            <th>Prix</th>
            <th>au_top</th>
            <th>nb_jours</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list_destinations as $destinations) : ?>
            <tr>
                <td><?php echo $destinations["titre"]; ?></td>
                <td><?php echo $destinations["description"]; ?></td>
                <td><?php echo $destinations["prix"]; ?></td>
                <td><?php echo $destinations["nb_jours"]; ?></td>
                <?php $photo = (!empty($destinations["photo"])) ? "../../../uploads/" . $destinations["photo"] : "http://via.placeholder.com/150x150"; ?>
                <td><img src="<?php echo $photo; ?>" class="img-thumbnail"></td>
                <td><?php echo $destinations["au_top"]; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $destinations["id"]; ?>" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                    <a href="delete_query.php?id=<?php echo $destinations["id"]; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once '../../layout/footer.php'; ?>