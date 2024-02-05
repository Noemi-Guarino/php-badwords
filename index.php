<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Badwords</title>
</head>
<body>
    <div class="container p-4">
        <form action="about.php" method="get">
            <div class="mb-3">
                <label for="usertext" class="form-label">Inserisci il testo</label>
                <input type="textarea" name="usertext" class="form-control" id="text" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Inserisci la parola da censurare:</label>
                <input type="text" name="censored" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>

</body>
</html>