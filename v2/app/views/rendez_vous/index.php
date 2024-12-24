

<div class="card">

    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h2>Liste des Rendez-vous</h2>
            <div class="btn">
                <a class="btn btn-primary" href="?action=rendezvous.create">Ajouter un rendez-vous</a>
            </div>
        </div>
    </div>


    <div class="card-body">
        <table class="table table-striped">
            <thead>   
                <tr>
                    <th>Date</th>
                    <th>Heure</th>
                    <th>Description</th>
                    <th>Client</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rendezVous as $rdv): ?>
                    <tr>
                        <td><?= $rdv['date'] ?></td>
                        <td><?= $rdv['time'] ?></td>
                        <td><?= $rdv['description'] ?></td>
                        <td><?= $rdv['client_id'] ?></td>
                        <td class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-sm btn-outline-info" href="?action=rendezvous.show&id=<?= $rdv['id'] ?>">Voir</a>
                            <a class="btn btn-sm btn-outline-primary" href="?action=rendezvous.edit&id=<?= $rdv['id'] ?>">Modifier</a>
                            <a class="btn btn-sm btn-outline-danger" href="?action=rendezvous.delete&id=<?= $rdv['id'] ?>">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>




