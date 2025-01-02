

<div class="card">

<?php
?>
    <div class="card-header">
        <h2>Modifier un rendez vous</h2>
    </div>

    <div class="card-body">

        <form action="?action=rendezvous.update" method="POST">

        <input type="hidden" name="id" value="<?= $rendezvous->getId() ?>">

            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" name="date" id="date" value="<?= $rendezvous->getDate() ?>" required>
            </div>

            <div class="mb-3">
                <label for="time" class="form-label">Heure</label>
                <input type="time" class="form-control" name="time" id="time" value="<?= $rendezvous->getTime() ?>" required>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"><?= $rendezvous->getDescription() ?></textarea>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Client </label>
                <select class="form-select" name="client_id" aria-label="Default select example">
                    <?php foreach ($clients as $client): ?>
                        <option value="<?= $client->getId() ?>" <?= $client->getId() == $rendezvous->getClientId() ? 'selected' : ''  ?> >
                            <?= $client->getFirstname() ?> <?= $client->getLastname() ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="?action=rendezvous.index" class="btn btn-secondary">Annuler</a>

        </form>

    </div>


</div>