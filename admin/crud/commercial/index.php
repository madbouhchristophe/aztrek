<?php
require_once '../../../model/database.php';

$list_commercial = getAllEntity("commercial");

require_once '../../layout/header.php';
?>

<h1>Nos commerciaux</h1>

<a href="create.php" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter</a>

<hr>

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Photo</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list_commercial as $commercial) : ?>
            <tr>
                <td><?php echo $commercial["nom"]; ?></td>
                <td><?php echo $commercial["prenom"]; ?></td>
                <?php $photo = (!empty($commercial["photo"])) ? "../../../uploads/" . $commercial["photo"] : "http://via.placeholder.com/150x150"; ?>
                <td><img src="<?php echo $photo; ?>" class="img-thumbnail"></td>
                <td>
                    <a href="update.php?id=<?php echo $commercial["id"]; ?>" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                    <a href="delete_query.php?id=<?php echo $commercial["id"]; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>   

    </tbody>
</table>


<?php require_once '../../layout/footer.php'; ?>