<?php require_once(base_path('views/partials/head.php')) ?>
<div class="min-h-full">
  <?php require_once(base_path('views/partials/_nav.php')); ?>

  <?php require_once(base_path('views/partials/_banner.php')) ?>
    <main>
        <div class="container-fluid mt-2 w-full text-center bg-slate-700">
            <h1>Note</h1>
        </div>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <!-- Replace with your content -->

            <div class="px-4 py-6 sm:px-0">
                <ul>
                    <li class="text-lg mb-2"><?= $note['title'] ?></li>
                    <li><?= $note['body'] ?></li>
                    <li><?= $user['email'] ?></li>
                </ul>

                <form action="" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="text-sm text-red-500">Delete</button>
                </form>
            </div>
            <!-- /End replace -->
        </div>
    </main>
</div>



</body>

</html>