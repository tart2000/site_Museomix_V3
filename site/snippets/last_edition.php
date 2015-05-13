<div class="container">
    <?php foreach (page('editions')->children()->limit(1) as $edition) : ?>
        <h2>Dernière édition : <?php echo $edition->thedates() ?> 2014</h2>
        <?php echo $edition->text()->kirbytext() ?>
        <div class="row">
            <?php foreach ($edition->children() as $ed) : ?>
            <div class="col-sm-4">
                <div class="card">
                    <a href="<?php echo $ed->url() ?>">
                        <img src="<?php echo $ed->images()->first()->url() ?>" class="img-responsive">
                    </a>
                    <div class="edition-title">
                        <h4><?php echo $ed->title() ?></h4>
                    </div>
                    <div class="card-text">
                        <a href="<?php echo $ed->url() ?>"><h4><?php echo $ed->museum() ?></h4></a>
                        <div class="right"><i class="fa fa-picture-o"></i> <i class="fa fa-film"></i></div>
                        <em><?php echo $ed->nbparticipants() ?> participants</em>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    <?php endforeach ?>
    <div class="center">
        <a href="" class="btn btn-default">Voir toutes les éditions</a>
    </div>
</div>