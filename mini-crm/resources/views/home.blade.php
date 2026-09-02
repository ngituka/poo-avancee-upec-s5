<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mini-CRM</title>
</head>
<body>
    <h1>Bonjour {{$name}}</h1>
    <h2>Bienvenue chez {{$company}}.</h2>
    <p>Notre application permet de gérer les clients, les produits et les commandes.</p>
    <p>Second paragraphe</p>
    <select name="pets" id="pet-select">
        <option value="">--Veuillez choisir une option--</option>
        <option value="dog">Chien</option>
        <option value="cat">Chat</option>
        <option value="hamster">Hamster</option>
        <option value="parrot">Perroquet</option>
        <option value="spider">Araignée</option>
    </select>

    <p>Clients : {{ $clients }}</p>
    <p>Produits : {{ $products }}</p>
    <p>Commandes : {{ $orders }}</p>
    <p>Ville : {{ $city }}</p>
</body>
</html>