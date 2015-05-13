<div class="container">
    <h2><i class="fa fa-map-marker"></i>  Communautés locales</h2>
    <div class="row">
        <?php foreach (page('localites')->children() as $c) : ?>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-title">
                        <h4><?php echo $c->title() ?>, <?php echo $c->pays() ?></h4>
                    </div>
                    <div class="card-text">
                        <?php echo $c->text()->kirbytext() ?>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>