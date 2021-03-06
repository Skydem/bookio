<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,900;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title><?= $book->getTitle() ?></title>
</head>
<body>
    <div class="nav-rail">
        <div id="hamburger">
            <span class="material-symbols-outlined">
                menu
            </span>
        </div>
        <div class="button fab-button margin-right-0">
            <span class="material-symbols-outlined">
                edit
                </span>
        </div>
        <div class="nav-rail-container">
        <div class="nav-helper">
            <ul class="nav-list">
                <li><a href="../main">
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
                <li><a href="#">
                    <span class="material-symbols-outlined">
                        account_circle
                        </span>
                        <br/>
                        <span class="nav-text">Konto</span>
                </a></li>
            </ul>
        </div>
        </div>
    </div>
    <div id="wraper" class="wraper-main">
        <div class="section row-section no-m-bot book-section">
            <div class="row">
                <img src="../public/uploads/<?= $book->getCover() ?>" alt="" width="200px" class="image-big">
            </div>
            <div class="row column-section">
                <h1> <?= $book->getTitle() ?> </h1>
                <p><?= $book->getDescription() ?><p>
                <div class="buttons book-buttons">
                    <div class="button outline-button">Napisz do sprzedawcy</div>
                    <div class="button filled-button">Kup teraz</div>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>