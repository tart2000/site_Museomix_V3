<div class="container">
    <h2><i class="fa fa-map-marker"></i>  Communautés locales</h2>
    <div class="row">
        <?php foreach (page('localites')->children() as $c) : ?>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-text">
                        <h4><?php echo $c->title() ?>, <?php echo $c->pays() ?></h4>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>