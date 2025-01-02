

<div class="card">

    <div class="card-header">
        <h3>Détails clients</h3>
    </div>

    <div class="card-body">

    <dl class="row">
        <dt class="col-sm-3">Nom & Prenom</dt>
        <dd class="col-sm-9"> <?= $client->getFirstname(). " ". $client->getFirstname()?> </dd>

        <dt class="col-sm-3">Email : </dt>
        <dd class="col-sm-9">
            <p><?= $client->getEmail()?></p>
        </dd>

        <dt class="col-sm-3">Téléphone</dt>
        <dd class="col-sm-9"><?= $client->getPhone()?></dd>       
    </dl>


    </div>

</div>