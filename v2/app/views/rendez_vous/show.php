

<div class="card">

    <div class="card-header">
        <h3>Détails du rendez-vous</h3>
    </div>

    <div class="card-body">

    <dl class="row">
        <dt class="col-sm-3">Date & heurs</dt>
        <dd class="col-sm-9"> <?= $rendezvous->getDate(). " à ". $rendezvous->getTime()?> </dd>

        <dt class="col-sm-3">Description : </dt>
        <dd class="col-sm-9">
            <p><?= $rendezvous->getDescription()?></p>
        </dd>

        <dt class="col-sm-3">Client</dt>
        <dd class="col-sm-9"><?= $rendezvous->getId()?></dd>       
    </dl>


    </div>

</div>