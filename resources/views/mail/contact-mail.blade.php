<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Grazie {{ $name }} per averci contatto</h1>
    <h2>Risponderemo al piu presto possibile a questa mail : {{ $email }}</h2>
    <p>questo è il contenuto del tuo messaggio: {{ $user_message }}</p>
    <small>Se non hai fatto richieste, ci scusiamo per il disagio</small>
</body>
</html>
