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
    <title>Bookio - logowanie</title>
</head>
<body>
    <div id="header">
        <div id="hamburger">
            <span class="material-symbols-outlined">
                menu
            </span>
        </div>
        <a href="login.html" class="space-to-right">
            <div class="button elevated-button ">Logowanie</div>
        </a>
        <a href="register.php">
            <div class="button filled-button">Zarejestruj się</div>
        </a>
    </div>
    <div id="wraper">
        <div class="head-section section form-container">
            <h1 class="h1-small center">Zaloguj się</h1>
            <p class="on-surface-variant">Witaj spowrotem</p>
            <div class="messages on-surface-variant center">
                <?php if(isset($messages)) {
                    foreach ($messages as $message) {
                        echo $message;
                    }
                }
                ?>
            </div>
            <form action="handleLogin" method="post">
                <input type="text" class="input-text" placeholder="e-mail" name="email">
                <input type="password" class="input-text" placeholder="hasło" name="password">
                <div class="buttons" >
                    <a href="index" class="primary-color button" style="margin-left: auto; margin-right: 0">Anuluj</a>
                    <input type="submit" value="Zaloguj się" class="button filled-button margin-right-0">
                </div>
            </form>
        </div>
        <p class="center">Nie masz konta?</p>
        <a href="register.php">
            <div class="center">Zarejestruj się</div>
        </a>
        
    </div>
</body>
</html>