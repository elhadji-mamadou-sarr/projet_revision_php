

<div class="card">

    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h2>Liste des Clients</h2>
            <div class="btn">
                <a class="btn btn-primary" href="?action=client.create">Ajouter un client</a>
            </div>
        </div>
    </div>


    <div class="card-body">
        <table class="table table-striped">
            <thead>   
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clients as $client): ?>
                    <tr>
                        <td><?= $client->getFirstname() ?></td>
                        <td><?= $client->getLastname() ?></td>
                        <td><?= $client->getEmail() ?></td>
                        <td><?= $client->getPhone() ?></td>
                        <td class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-sm btn-outline-info" href="?action=client.show&id=<?= $client->getId() ?>">Voir</a>
                            <a class="btn btn-sm btn-outline-primary" href="?action=client.edit&id=<?= $client->getId() ?>">Modifier</a>
                            <a class="btn btn-sm btn-outline-danger" href="?action=client.delete&id=<?= $client->getId() ?>">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>




