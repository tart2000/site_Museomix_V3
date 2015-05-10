<div class="container">
    <h2>Dernière édition : 7, 8, 9 novembre 2014</h2>
    <div class="row">
        <?php foreach (page('editions')->children()->children() as $ed) : ?>
        <div class="col-sm-4">
            <a href="<?php echo $ed->url() ?>">
                <img src="<?php echo $ed->images()->first()->url() ?>" class="img-responsive"> 
                <?php echo $ed->title() ?> - <?php echo $ed->museum() ?>
                <em><?php echo $ed->nbparticipants() ?> participants</em>
            </a>
        </div>
        <?php endforeach ?>
    </div>
    <div class="center">
        <a href="" class="btn btn-default">Voir toutes les éditions</a>
    </div>
</div>