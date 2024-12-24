

<div class="card">

<?php
?>
    <div class="card-header">
        <h2>Modifier un client</h2>
    </div>

    <div class="card-body">

        <form action="?action=client.update" method="POST">
            
            <input type="hidden" name="id" value="<?= $client->getId() ?>" />
            
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" name="firstname" id="nom" value="<?= $client->getFirstname() ?>" required>
            </div>

            <div class="mb-3">
                <label for="prenom" class="form-label">Prenom</label>
                <input type="text" class="form-control" name="lastname" id="prenom" value="<?= $client->getLastname() ?>" required>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email </label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="<?= $client->getEmail() ?>" required>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Téléphone </label>
                <input type="number" class="form-control" name="phone" id="exampleInputEmail1" value="<?= $client->getPhone() ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="?action=client.index" class="btn btn-secondary">Annuler</a>

        </form>

    </div>


</div>