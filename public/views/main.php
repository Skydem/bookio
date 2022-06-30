<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,900;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script type="text/javascript" src="./public/js/search.js" defer></script>
    <script type="text/javascript" src="./public/js/displayBook.js" defer></script>
    <title>Bookio - mainpage</title>

</head>
<body id="main-body">
    <div class="nav-rail">
        <div id="hamburger">
            <span class="material-symbols-outlined">
                menu
            </span>
        </div>
        <div class="button fab-button margin-right-0">
<!--            <a href="add">-->
<!--            <span class="material-symbols-outlined">-->
<!--                edit-->
<!--                </span>-->
<!--            </a>-->
        </div>
        <div class="nav-rail-container">
        <div class="nav-helper">
            <ul class="nav-list">
                <li><a href="add">
                        <span class="material-symbols-outlined button fab-button margin-right-0">
                            edit
                        </span>
                    </a>
                </li>
                <li><a href="main">
                    <span class="material-symbols-outlined icon-active">
                        search
                    </span>
                    <span class="nav-text">Wyszukaj</span>
                </a></li>
                <li><a href="#">
                    <span class="material-symbols-outlined">
                        chat
                        </span>
                    <span class="nav-text">Wiadomości</span>
                </a></li>
                <li><a href="logout">
                    <span class="material-symbols-outlined">
                        logout
                        </span>
                        <br/>
                        <span class="nav-text">Wyloguj się</span>
                </a></li>
            </ul>
        </div>
        </div>
    </div>

    <div id="wraper" style="margin-left: 9vw;">
        <div class="main-sereach section">
            <h1>Wyszukaj książkę</h1>
            <input type="text" name="sereach" class="input-text" placeholder="Wyszukaj" id="searchBar"/>
<!--            <input type="text" name="lokacja" class="input-text" placeholder="Lokalizacja"/>-->
<!--            <input type="submit" value="Wyszukaj" class="button tonal-filled-button"/>-->
            <button type="submit" class="button tonal-filled-button search-button">
<!--                <span class="material-symbols-outlined icon-active">-->
<!--                        search-->
<!--                    </span>-->
                <span>Wyszukaj</span>
            </button>
        </div>
        <div id="results">
            <?php foreach($books as $book): ?>
            <div class="card">
                <img src="public/uploads/<?= $book->getCover() ?>" />
                <h3 class="card-padding"><?= $book->getTitle() ?></h3>
                <p class="card-padding"><?= $book->getDescription() ?></p>
                <div class="buttons card-padding card-buttons">
                    <div class="button outline-button" onclick="more('<?php echo $book->getId() ?>')">Więcej</div>
                    <div class="button filled-button">Do koszyka</div>
                </div>
            </div>
            <?php endforeach; ?>
    </div>
    </div>
</body>
</html>

<template id="cardTemplate">
    <div class="card">
        <img src="" />
        <h3 class="card-padding book-title">title</h3>
        <p class="card-padding book-desc">desc</p>
        <div class="buttons card-padding">
            <div class="button elevated-button">Więcej</div>
            <div class="button filled-button">Do koszyka</div>
        </div>
    </div>
</template>