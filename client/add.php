<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <h1>Ajouter un produit</h1>
    <form action="server/api/create.php" method="post">
        <p>
            <label for="produit">Produit</label>
            <input type="text" name="produit" id="produit">
        </p>
        <p>
            <label for="prix">Prix</label>
            <input type="text" name="prix" id="prix" >
        </p>
        <p>
            <label for="nombre">Nombre</label>
            <input type="number" name="nombre" id="nombre" >
        </p>
        <p>
            <button>Enregistrer</button>
        </p>
    </form>
</body>
</html>