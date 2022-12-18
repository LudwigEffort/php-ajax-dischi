<main class="container text-center p-4"><?php
    include_once __DIR__ . '/../db/data.php';

    //echo $arrDiscs[0]['title'];

    foreach ($arrDiscs as $disc) { ?>
        <div class="row row-cols-4 g-5">
            <div>
                <h2><?= $disc['title'] ?></h2>
                <img src="<?= $disc['poster'] ?>" alt="">
                <p><?= $disc['author'] ?></p>
            </div> 
        </div> <?
    } ?>
</main>