

<div class="card">

    <div class="card-header">
        <h2>Modifier un etudiant</h2>
    </div>

    <div class="card-body">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" name="firstname" id="nom" value="<?= $etudiant['firstname'] ?>"  required>
            </div>

            <div class="mb-3">
                <label for="prenom" class="form-label">Prenom</label>
                <input type="text" class="form-control" name="lastname" id="prenom" value="<?= $etudiant['lastname'] ?>"  required>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email </label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="<?= $etudiant['email'] ?>"  required>
            </div>

            <div class="mb-3">
                <label for="nom" class="form-label">Filiére</label>
                <select class="form-select" name="sector" aria-label="Default select example">
                    <option value="" <?= empty($etudiant['sector']) ? 'selected' : '' ?>>Sélectionnez une filière</option>
                    <option value="Informatique" <?= $etudiant['sector'] === 'Informatique' ? 'selected' : '' ?>>Informatique</option>
                    <option value="Mathématiques" <?= $etudiant['sector'] === 'Mathématiques' ? 'selected' : '' ?>>Mathématiques</option>
                    <option value="Automobile" <?= $etudiant['sector'] === 'Automobile' ? 'selected' : '' ?>>Automobile</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Enregistrer</button>

            <a href="?action=etudiant.index" class="btn btn-secondary">Annuler</a>

        </form>
    </div>

</div>

