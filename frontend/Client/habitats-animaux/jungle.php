<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Jungle - Arcadia</title>
    <link rel="stylesheet" href="../../styles/accueil.css">
    <link rel="stylesheet" href="../../styles/services.css">
    <link rel="stylesheet" href="../../styles/habitats.css">
    <link rel="stylesheet" href="../../styles/marais.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Tokyo+Zoo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;400;600&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <section class="logo-header-container">
        <div class="logo-header-style-1">A<span class="white-color">RC</span>A<span class="white-color">DI</span>A</div>
        <div class="logo-header-style-2">ZOO DE BRETAGNE</div>
    </section>
    <section class="menu-button-container">
        <button><a class="liens-sans-couleur" href="../../index.php">Accueil</a></button>
        <button><a class="liens-sans-couleur" href="../services.php">Tous nos services</a></button>
        <button><a class="liens-sans-couleur" href="../habitats.php">Tous nos habitats</a></button>
        <button><a class="liens-sans-couleur" href="../connexion.php">Connexion</a></button>
        <button><a class="liens-sans-couleur" href="../contact.php">Contact</a></button>
    </section>
    <section>
        <article class="titre-services">
            <h1>LA JUNGLE</h1>
            <h4>Découvrez une escapade unique au cœur de la nature, où l'aventure et la préservation de la faune se rencontrent harmonieusement. Notre parc offre bien plus qu'une simple visite ; c'est une immersion totale dans le monde captivant de la vie sauvage. Explorez nos habitats naturels, délectez-vous de délices culinaires, participez à des visites guidées passionnantes, ou détendez-vous à bord de notre petit train pittoresque.
                <br><br> Bienvenue dans une expérience où chaque moment est une rencontre avec la beauté naturelle et la diversité extraordinaire de notre planète. Bienvenue au Parc Naturel Extraordinaire, où l'émerveillement prend vie.
            </h4>
        </article>
        <img class="image-services" src="../../images/jungle.jpeg" alt="Jungle">
    </section>
</header>

<main>
    <section class="container-animaux-marais">
        <article class="titre-partie-habitat">
            <p>Découvrez nos Animaux</p>
        </article>
        <!-- Emplacement pour afficher les animaux -->
        <section class="colonne-habitat" id="animauxContainer">
            <!-- Les données d'animaux seront chargées ici par AJAX -->
        </section>
    </section>
</main>

<footer class="pied-de-page">
    <div class="contact-info">
        <p>Contactez-nous :</p>
        <p>Email : arcadia.contact29@gmail.com</p>
        <p>Téléphone : +33 1 23 45 67 89</p>
        <p>Adresse : All. de Kerrousseau, 56620 Pont-Scorff</p>
    </div>
    <div class="container-image-pied-page">
        <img src="../../images/x.png" alt="x">
        <img src="../../images/youtube.png" alt="youtube">
        <img src="../../images/linkedin.png" alt="linkedin">
        <img src="../../images/google.png" alt="google">
        <img src="../../images/facebook.png" alt="facebook">
    </div>
    <div class="copywright">
        <p>© 2024 Mon Site Web. Tous droits réservés.</p>
    </div>
</footer>

<!-- Lien vers le fichier JavaScript -->
<script src="../../scripts/fiche-animal.js"></script>
<script src="../../scripts/jungle.js"></script>
</body>
</html>
