<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/luxon@3.4.4/build/global/luxon.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script  src="./js-script/script.js" defer></script>
    <title>PHP Badwords</title>
</head>

<body>
    <div class="container text-center p-5">
        <form class="d-flex flex-column align-items-center" action="" method="POST">
            <div class="d-flex flex-column p-3">
                <label class="p-2 fs-5 fw-medium " for="frase">Inserisci una frase che contenga almeno una parolaccia (per favore non bestemmie!)</label>
                <input type="text" name="frase">
            </div>
            <div class="d-flex flex-column p-3">
                <label class="p-2 fs-5 fw-medium " for="censura">adesso scrivi qua la parolaccia</label>
                <input type="text" name="censura">
            </div>
            <div class="p-2"><button type="submit" class="btn btn-danger">Invia</button></div>
        </form>
    </div>
</body>

</html>