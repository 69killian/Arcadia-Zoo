<?php
session_start();
if(!$_SESSION['motdepasse']) {
    header('Location: ../frontend/Client/connexion.php');
}
?>

<!doctype html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="../../frontend/styles/espace-admin.css">
    <link rel="stylesheet" href="../../frontend/styles/connexion.css">
    <link rel="stylesheet" href="../../frontend/styles/contact.css">
    <link rel="stylesheet" href="../../frontend/styles/accueil.css">
    <link rel="stylesheet" href="../../frontend/styles/administrateur/avis-vetrinaire.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Tokyo+Zoo&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;400;600&display=swap" rel="stylesheet">
    <title>Avis du vétérinaire</title>
    <meta charset="utf-8">
</head>
<body>

<header>
    <section class="logo-header-container">
        <div class="logo-header-style-1">A<span class="white-color">RC</span>A<span class="white-color">DI</span>A</div>
        <div class="logo-header-style-2">ZOO DE BRETAGNE</div>
    </section>
</header>

<nav class="navigation">
    <div class="titre-nav">ESPACE ADMINISTRATEUR</div>
    <article class="lien"><a href="../espace-admin.php">Accueil</a></article>
    <article class="lien"><a href="../administrateur/membres.php">Afficher tous les membres</a></article>
    <article class="lien" ><a href="../administrateur/servicesadmin.php">Gérer les Services</a></article>
    <article class="lien" ><a href="../administrateur/animauxadmin.php">Gérer les Animaux</a></article>
    <article class="lien" ><a href="../administrateur/habitatadmin.php">Gérer les Habitats</a></article>
    <article class="lien" ><a href="../administrateur/avis-veterinaire.php">Avis vétérinaire</a></article>
    <article class="lien"><a href="../deconnexion.php">Déconnexion</a></article>
</nav>
<main>
<h1 style="text-align: center; color: white;">Avis du vétérinaire</h1>

    <form id="searchForm" style="margin-bottom: 30px">
        <input id="searchInput" style="font-size: 20px; padding: 5px; border-radius: 5px" type="search" name="s" placeholder="Rechercher un Animal" autocomplete="off">
        <input style="font-size: 20px; padding: 5px; border-radius: 5px" type="submit" name="envoyer">
    </form>

<!--Afficher tous les membres-->
    <div id="animalContainer" class="crud-container">
        <!-- Les résultats de la recherche seront affichés ici -->
    </div>
</main>
<script src="recherche.js"></script>
</body>
</html>

