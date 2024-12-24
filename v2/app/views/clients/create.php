

<div class="card">

    <div class="card-header">
        <h2>Ajouter un client</h2>
    </div>

    <div class="card-body">
        <form action="?action=client.store" method="POST">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" name="firstname" id="nom" required>
            </div>

            <div class="mb-3">
                <label for="prenom" class="form-label">Prenom</label>
                <input type="text" class="form-control" name="lastname" id="prenom" required>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email </label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" required required>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Téléphone </label>
                <input type="number" class="form-control" name="phone" id="exampleInputEmail1" required>
            </div>

            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="?action=client.index" class="btn btn-secondary">Annuler</a>

        </form>
    </div>


</div>