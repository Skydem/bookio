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
    <title>Bookio</title>
</head>
<body>
    <div id="header">
        <div id="hamburger">
            <span class="material-symbols-outlined">
                menu
            </span>
        </div>
        <a href="login" class="space-to-right">
            <div class="button elevated-button ">Logowanie</div>
        </a>
        <a href="register.php">
            <div class="button filled-button">Zarejestruj się</div>
        </a>
    </div>
    <div id="wraper"> 
        <div class="section row-section head-section">
            <div class="row column-section">
                <h1 class="font-large">Bookio</h1>
                <p class="info-section">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et<p>
                <div class="buttons">
                    <a href="public/views/login.html">
                        <div class="button filled-button">Zaloguj siaę</div>
                    </a>
                    <a href="#more">
                        <div class="button outline-button">Przeczytaj więcej</div>
                    </a>
                    
                </div>
            </div>
            <div class="row">
                <img src="public/img/welcome photo.jpg" alt="" width="200px" class="image-big">
            </div>
        </div>
        <div class="section column-section" id="more">
            <h2 class="center font-large">Czym jest Bookio?</h2>
            <div class="column-item row-section">
                <div class="card">
                    <img src="public/img/sample.jpg" alt="">
                    <h3>Feature 1</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et</p>
                </div>
                <div class="card">
                    <img src="public/img/sample.jpg" alt="">
                    <h3>Feature 1</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et</p>
                </div>
            </div>
            <div class="column-item row-section">
                <div class="card">
                    <img src="public/img/sample.jpg" alt="">
                    <h3>Feature 1</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et</p>
                </div>
                <div class="card">
                    <img src="public/img/sample.jpg" alt="">
                    <h3>Feature 1</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et</p>
                </div>
            </div>
        </div>
        <div class="section row-section">
            <div class="row">
                <img src="public/img/last.jpg" alt="" width="200px" class="image-big">
            </div>
            <div class="row column-section">
                <h1 class="font-large">Gotowy?</h1>
                <p class="info-section">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et<p>
                <div class="buttons">
                    <div class="button filled-button">Zaloguj się</div>
                    <div class="button outline-button">Przeczytaj więcej</div>
                </div>
            </div>
            
        </div>
        <!-- <div class="section"></div> -->
    </div>
    
</body>
</html>