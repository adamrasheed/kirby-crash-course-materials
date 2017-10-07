<?php snippet('header') ?>

<div class="container">
  <h1 class="bio">
    <span>Hi, my name is <?= $site->author(); ?>.</span>
    <span>I'm a <?= $site->location(); ?>-based</span>
    <span><?= $site->occupation(); ?>
    <?php if(!$site->employer()->empty()):?>
      working at</span> <span><?= $site->employer(); ?></span>
    <?php endif ?>
  </h1>

  <div class="bio-list bio-list--work">
    <h2 class="bio-list__title">Work</h2>
    <ul class="bio-list__list">
    <?php foreach($pages->find('work-places')->children() as $work): ?>
    <li class="bio-list__item">
      <a href="<?= $work->link(); ?>" class="bio-list__link" target="_blank" rel="noopener">
        <?= $work->title(); ?>
      </a>
    </li>
    <?php endforeach ?>
    </ul>
  </div>

  <div class="bio-list bio-list--projects">
    <h2 class="bio-list__title">Side Projects</h2>
    <ul class="bio-list__list">
    <?php foreach($pages->find('projects')->children() as $project): ?>
      <li class="bio-list__item">
        <a href="<?= $project->url() ?>" class="bio-list__link"><?= $project->title() ?></a>
      </li>
    <?php endforeach ?>
    </ul>
  </div>

  <div class="footer">
    <div class="footer__social">

      <?php if(!$site->socialFacebook()->empty()): ?>
        <a href="<?= $site->socialFacebook(); ?>" class="social__link" target="_blank" rel="noopener">
          <i class="fab fa-facebook-f"></i>
        </a>
    <?php endif ?>

    <?php if(!$site->socialTwitter()->empty()): ?>

        <a
          href="<?= $site->socialTwitter(); ?>"
          class="social__link"
          target="_blank" rel="noopener">
          <i class="fab fa-twitter"></i>
        </a>

      <?php endif ?>

      <?php if(!$site->socialGithub()->empty()): ?>
        <a href="<?= $site->socialGithub(); ?>" class="social__link" target="_blank" rel="noopener">
          <i class="fab fa-github"></i>
        </a>
      <?php endif ?>

      <?php if(!$site->socialLinkedin()->empty()): ?>
        <a href="<?= $site->socialLinkedin(); ?>" class="social__link" target="_blank" rel="noopener">
          <i class="fab fa-linkedin-in"></i>
        </a>
      <?php endif ?>


      <?php if(!$site->socialDribble()->empty()): ?>
        <a href="<?= $site->socialDribble(); ?>" class="social__link" target="_blank" rel="noopener">
          <i class="fab fa-dribbble"></i>
        </a>
      <?php endif ?>

    </div>

    <a
      href="mailto:<?= $site->email() ; ?>"
      class="footer__email"
      target="_blank"
      rel="noopener"><?= $site->email() ; ?></a>

    <p class="copyright">
      © <?= date('Y') . ' ' . $site->author() ; ?>
    </p>
  </div>
</div><!-- Container -->


<?php snippet('footer') ?>