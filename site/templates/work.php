
<?php snippet('header') ?>

<div class="container">
    <h1><?= $page->title(); ?></h1>

    <p>
        <a href="<?= $page->link(); ?>">Link</a>
    </p>

    <p>
        <a href="<?= $site->url() ?>">Back Home</a>
    </p>
</div><!-- Container -->


<?php snippet('footer') ?>