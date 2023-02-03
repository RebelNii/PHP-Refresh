<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<?php require_once('partials/head.php') ?>
<div class="min-h-full">
  <?php require_once('partials/_nav.php'); ?>

  <?php require_once('partials/_banner.php') ?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
      <div class="px-4 py-6 sm:px-0">
      <ul>
            <?php foreach($filteredBooks as $book) : ?>
                <li>
                    <a href="<?= $book['link'] ?>">
                        <?= $book['Author'] ?> (<?= $book['Year'] ?>)
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
      </div>
      <!-- /End replace -->
    </div>
  </main>
</div>



</body>
</html>