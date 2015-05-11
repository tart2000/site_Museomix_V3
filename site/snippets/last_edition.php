<div class="container">
    <h2>Dernière édition : 7, 8, 9 novembre 2014</h2>
    <div class="row">
        <?php foreach (page('editions')->children()->children() as $ed) : ?>
        <div class="col-sm-4">
            <div class="card">
                <a href="<?php echo $ed->url() ?>">
                    <img src="<?php echo $ed->images()->first()->url() ?>" class="img-responsive"> 
                </a>
                <div class="card-text">
                    <a href="<?php echo $ed->url() ?>"><h4><?php echo $ed->title() ?> - <?php echo $ed->museum() ?></h4></a>
                    <em><?php echo $ed->nbparticipants() ?> participants</em>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
    <div class="center">
        <a href="" class="btn btn-default">Voir toutes les éditions</a>
    </div>
</div>