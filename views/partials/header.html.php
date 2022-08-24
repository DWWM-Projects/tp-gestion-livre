<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>BookMarket</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

</head>
<header class="flex justify-between w-full h-32 bg-blue-100 p-6">

    <div class="flex items-center">
        <h1 class="text-6xl">BookMarket</h1>
    </div>

    <div class="flex flex-row items-center gap-6">
        <a class="text-2xl" href="<?= BASE_URL; ?>/home">Accueil</a>
        <a class="text-2xl" href="<?= BASE_URL; ?>/user">Liste</a>
        <a class="text-2xl" href="<?= BASE_URL; ?>/user/create">Ajouter un livre</a>
    </div>

</header>