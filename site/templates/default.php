<?php snippet('head') ?>

<body>
  <?php snippet('header') ?>

  <main>
    <h1><?= $page->title() ?></h1>
    
    <?php if ($page->text()->isNotEmpty()): ?>
      <div class="text">
        <?= $page->text()->kt() ?>
      </div>
    <?php endif; ?>

    <?php if ($page->blocks()->isNotEmpty()): ?>
      <div class="blocks">
        <?= $page->blocks()->toBlocks() ?>
      </div>
    <?php endif; ?>
  </main>

  <?php snippet('footer') ?>
</body>

<?php snippet('foot') ?>