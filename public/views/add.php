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
    <title>Dodaj książkę</title>
</head>
<body>

<h1>Dodaj książkę</h1>
    <?php if(isset($messages)) {
        foreach ($messages as $message) {
            echo $message;
        }
    }
    ?>

    <form action="addBook" method="POST" ENCTYPE="multipart/form-data">
        <input type="text" name="title" placeholder="Tytuł książki" class="input-text"/>
        <input type="text" name="desc" placeholder="Opis książki" class="input-text"/>
        Wybierz zdjęcie dla książki
        <input type="file" name="file" class="button outline-button"/>
        <input type="submit" class="button filled-button">
    </form>
    <br><br>
    <a href="main" class="button elevated-button">Anuluj/wróć</a>

</body>
</html>