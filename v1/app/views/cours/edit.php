

<div class="card">

    <div class="card-header">
        <h2>Modifier un cour</h2>
    </div>

    <div class="card-body">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" name="name" id="nom" value="<?= $cour['name'] ?>"  required>
            </div>

            <div class="mb-3">
                <label for="code" class="form-label">Code</label>
                <input type="text" class="form-control" name="code" id="code" value="<?= $cour['code'] ?>"  required>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre d'heures </label>
                <input type="number" class="form-control" name="nbTime" id="exampleInputEmail1" value="<?= $cour['nbTime'] ?>"  required>
            </div>

            <button type="submit" class="btn btn-primary">Enregistrer</button>

            <a href="?action=cour.index" class="btn btn-secondary">Annuler</a>

        </form>
    </div>

</div>

