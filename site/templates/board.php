<?php snippet('header') ?>

  <main class="main" role="main">

    <h1><?php echo $page->title()->html() ?></h1>

    <ul class="meta cf">
      <li><b>Tags:</b> <?php echo $page->tags() ?></li>
    </ul>

    <div class="text">
      <?php echo $page->text()->kirbytext() ?>

      <div class="grid">
        <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>

          <a class="grid-item" href="<?php echo $image->url() ?>" data-size="<?php echo $image->width() ?>x<?php echo $image->height() ?>">
	          <img src="<?php echo $image->url() ?>" alt="" width="<?php echo $image->width() ?>" height="<?php echo $image->height() ?>"/>
	        </a>

        <?php endforeach ?>
      </div>

    </div>

    <nav class="nextprev cf" role="navigation">
      <?php if($prev = $page->prevVisible()): ?>
      <a class="prev" href="<?php echo $prev->url() ?>">&larr; <?php echo $prev->title()->html() ?></a>
      <?php endif ?>
      <?php if($next = $page->nextVisible()): ?>
      <a class="next" href="<?php echo $next->url() ?>"><?php echo $next->title()->html() ?> &rarr;</a>
      <?php endif ?>
    </nav>

  </main>

<?php snippet('photo-swipe') ?>

<?php snippet('footer') ?>