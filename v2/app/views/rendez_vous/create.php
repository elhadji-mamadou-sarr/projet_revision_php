

<div class="card">

    <div class="card-header">
        <h2>Ajouter un client</h2>
    </div>

    <div class="card-body">
        <form action="?action=rendezvous.store" method="POST">
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" name="date" id="date" required>
            </div>

            <div class="mb-3">
                <label for="time" class="form-label">Heure</label>
                <input type="time" class="form-control" name="time" id="time" required>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Client </label>
                <select class="form-select" name="client_id" aria-label="Default select example">
                    <?php foreach ($clients as $client): ?>
                        <option value="<?= $client->getId() ?>"><?= $client->getFirstname() ?> <?= $client->getLastname() ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="?action=rendezvous.index" class="btn btn-secondary">Annuler</a>

        </form>
    </div>


</div>