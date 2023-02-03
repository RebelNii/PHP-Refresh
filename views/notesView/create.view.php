<?php require_once(base_path('views/partials/head.php')) ?>
<div class="min-h-full">
  <?php require_once(base_path('views/partials/_nav.php')); ?>

  <?php require_once(base_path('views/partials/_banner.php')) ?>
    <main>
        <div class="container-fluid mt-2 w-full text-center bg-slate-700">
            <h1>Create New Note</h1>
        </div>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <!-- Replace with your content -->

            <div class="px-4 py-6 sm:px-0">
                <div class=" flex justify-center w-full items-center flex-col">
                    <?php if (isset($err['msg'])) : ?>
                        <p class="my-4 text-red-600 text-lg"><?= $err['msg'] ?></p>
                    <?php endif ?>
                    <?php if (isset($err['msgs'])) : ?>
                        <p class="my-4 text-red-600 text-lg"><?= $err['msgs'] ?></p>
                    <?php endif ?>
                    <div class="px-4 py-2 w-80 bg-slate-700 rounded-md">
                        <form action="" method="post">
                            <div class="mt-2 flex flex-col">
                                <label for="">Title</label>
                                <input type="text" name="title" class="rounded w-full outline-none border-none p-2">
                            </div>
                            <div class="my-4 flex flex-col">
                                <label for="">Note</label>
                                <textarea name="body" id="" class="text-left rounded w-full outline-none border-none p-2" cols="10" rows="2">
                                    
                                </textarea>
                            </div>
                            <div class="mb-3">
                                <button class="bg-green-400 p-2 w-full">
                                    Create
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /End replace -->
        </div>
    </main>
</div>



</body>

</html>