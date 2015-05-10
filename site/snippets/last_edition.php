<div class="container">
    <h2>Dernière édition : 2014</h2>
    <div class="row">
        <?php foreach (page('editions')->children()->children() as $ed) : ?>
        <div class="col-sm-4">
            <a href="<?php echo $ed->url() ?>">
                <?php echo $ed->title() ?> - <?php echo $ed->museum() ?>
                <em><?php echo $ed->nbparticipants() ?> participants</em>
            </a>
        </div>
        <?php endforeach ?>
    </div>
</div>