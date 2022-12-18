<main><?php
    include_once __DIR__ . '/../db/data.php';

    //echo $arrDiscs[0]['title'];

    foreach ($arrDiscs as $disc) { ?>
        <div>
            <h2><?= $disc['title'] ?></h2>
            <img src="<?= $disc['poster'] ?>" alt="">
            <p><?= $disc['author'] ?></p>
        </div> <?
    } ?>

</main>