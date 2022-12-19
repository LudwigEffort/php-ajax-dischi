<main ><?php
    include_once __DIR__ . '/../../db/data.php'; ?>

    <div class="container text-center p-4">
        <div class="row row-cols-4 g-5">
            <? foreach ($arrDiscs as $disc) { ?>
                <div class="col">
                    <div class="card card-style">
                        <img src="<?= $disc['poster'] ?>" alt="Cover" class="card-img-top">
                        <div class="card-body">
                            <h4 class="title"><?= $disc['title'] ?></h4>
                            <p class="artist"><?= $disc['author'] ?></p>
                            <p class="year"><?= $disc['year'] ?></p>
                        </div>
                    </div>
                </div> <?
            } ?>
        </div> 
    </div> 
</main>