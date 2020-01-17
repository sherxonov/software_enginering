<div class="row justify-content-center mb-5">
    <div class="col-md-7 text-center section-heading">
        <h2 class="text-primary heading">Yangiliklar</h2>
    </div>
</div>

<div class="row">

    <?php foreach ($posts as $post): ?>
        <div class="col-md-6 col-lg-3">
            <div class="media block-6 d-block">
                <div class="icon mb-3"><span class="flaticon-student"></span></div>
                <div class="media-body">
                    <h3 class="heading"><?=$post->title ?></h3>
                    <p><?= $post->keywords ?></p>
                    <p><?= $post->short_desk ?></p>
                    <p><a href="#" class="more">Read More <span class="ion-arrow-right-c"></span></a></p>
                </div>
            </div>
        </div>
    <?php endforeach;?>
</div>

