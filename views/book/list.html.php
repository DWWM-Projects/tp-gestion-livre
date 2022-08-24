<?php

include __DIR__.'/../partials/header.html.php';
?>

<body>
    <h1 class="text-center text-5xl my-6">Liste des Livres</h1>
        <div class="flex flex-row gap-6">
            <?php foreach ($books as $book) { ?>
                <div class="flex flex-col w-1/5 mx-auto text-center">
                    <h2 class="text-3xl my-2"><?= $book->title; ?></h2>
                    <p class="text-xl m-2">Auteur: <?= $book->author; ?></p>
                    <img src="img/<?= $book->image; ?>" alt="">
                    <p class="text-xl m-2">Date de parution: <?= $book->parution; ?></p>
                    <p class="text-xl m-2">ISBN: <?= $book->isbn; ?></p>
                    <p class="text-2xl m-2">Prix TTC: <?= $book->ttc(); ?> €</p>
                    
                </div>
            <?php } ?>
        </div>
</body>
</html>