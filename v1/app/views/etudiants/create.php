

<div class="card">

    <div class="card-header">
        <h2>Ajouter un etudiant</h2>
    </div>

    <div class="card-body">
        <form action="" method="POST" class="row g-3">
            <div class="mb-3 col-md-6">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" name="firstname" id="nom" required>
            </div>

            <div class="mb-3 col-md-6">
                <label for="prenom" class="form-label">Prenom</label>
                <input type="text" class="form-control" name="lastname" id="prenom" required>
            </div>

            <div class="mb-3 col-md-6">
                <label for="exampleInputEmail1" class="form-label">Email </label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" required required>
            </div>

            <div class="mb-3 col-md-6">
                <label for="nom" class="form-label">Filiére</label>
                <select class="form-select" name="setor" aria-label="Default select example">
                    <option selected>Selection une filiére</option>
                    <option value="Informatique">Informatique</option>
                    <option value="Mathématiques">Mathématiques</option>
                    <option value="Automobile">Automobile</option>
                </select>
            </div>

            <div class="col-md-6">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="?action=etudiant.index" class="btn btn-secondary">Annuler</a>
            </div>

        </form>
    </div>

</div>

