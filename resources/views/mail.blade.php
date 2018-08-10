<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
    Vous avez recu un nouveau message depuis votre site internet : <br>

    <ul>
        <li>Nom  : {{ $contact->nom }}</li>
        <li>Prenom : {{ $contact->prenom }}</li>
        <li>Sujet : {{ $contact->sujet }}</li>
        <li>Email : {{ $contact->email }}</li>
        <li>Message : {{ $contact->message }}</li>
    </ul>
</body>
</html>