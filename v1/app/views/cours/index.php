

<div class="d-flex justify-content-between">
    <h1>Liste des cours</h1>
    <div class="btn">
        <a href="?action=cour.create" class="btn btn-primary">Ajouter un cour</a>
    </div>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom du cour</th>
            <th>Code</th>
            <th>Nombre d'heure</th>
            <th class="text-center">Atcion</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($cour = mysqli_fetch_assoc($cours)): ?>
            <tr>
                <td><?= $cour['id'] ?></td>
                <td><?= $cour['name'] ?></td>
                <td><?= $cour['code'] ?></td>
                <td><?= $cour['nbTime'] ?></td>

                <td class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-outline-primary btn-sm" href="?action=cour.edit&id=<?= $cour['id'] ?>">Modifier</a>
                    <a class="btn btn-outline-danger btn-sm" href="?action=cour.delete&id=<?= $cour['id'] ?>">Supprimer</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>
