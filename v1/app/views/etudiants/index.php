

<div class="d-flex justify-content-between">
    <h1>Liste des étudiants</h1>
    <div class="btn">
        <a href="?action=etudiant.create" class="btn btn-primary">Ajouter un étudiant</a>
    </div>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Secteur</th>
            <th class="text-center">Atcion</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($etudiant = mysqli_fetch_assoc($etudiants)): ?>
            <tr>
                <td><?= $etudiant['id'] ?></td>
                <td><?= $etudiant['firstname'] ?></td>
                <td><?= $etudiant['lastname'] ?></td>
                <td><?= $etudiant['email'] ?></td>
                <td><?= $etudiant['sector'] ?></td>

                <td class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-outline-primary btn-sm" href="?action=etudiant.edit&id=<?= $etudiant['id'] ?>">Modifier</a>
                    <a class="btn btn-outline-danger btn-sm" href="?action=etudiant.delete&id=<?= $etudiant['id'] ?>">Supprimer</a>
                  
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>
