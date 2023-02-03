<?php require_once(base_path('views/partials/head.php')) ?>
<div class="min-h-full">
  <?php require_once(base_path('views/partials/_nav.php')); ?>

  <?php require_once(base_path('views/partials/_banner.php')) ?>
  <main>
    <div class="container-fluid mt-2 w-full text-center bg-slate-700">
        <h1>This is Notes</h1>
      </div>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
      
      <div class="px-4 py-6 sm:px-0">
      <ul>
            <?php foreach($notes as $note) : ?>
                <li>
                    <a href="/show?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                      <?= htmlspecialchars($note['body']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <p class="my-4">
          <a href="/create-note" class=" text-green-500 text-lg">Create a Note</a>
        </p>
      </div>
      <!-- /End replace -->
    </div>
  </main>
</div>



</body>
</html>