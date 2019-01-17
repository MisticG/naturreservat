<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <header>
        <h1>Naturreservat</h1>
    </header>

    <form action="results.php" method="post">
        <h2>Apor</h2> <input type="number" name="apor">
        <br>
        <br>
        <h2>Giraffer</h2> <input type="number" name="giraffer">
        <br>
        <br>
        <h2>Tigrar</h2> <input type="number" name="tigrar">
        <br>
        <br>
        <h2>Kokosnötter</h2> <input type="number" name="kokos">
        <br>
        <br>
        <input type=submit value="Hur många vill du ha?" name="antal" class="btn btn-light">
    </form>
    

</body>
</html>