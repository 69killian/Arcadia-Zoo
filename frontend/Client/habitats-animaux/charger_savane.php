<?php
try {
    // Connexion à la base de données
    $bdd = new PDO('mysql:host=localhost;dbname=espace_admin;', 'root', '');

    // Requête pour récupérer les données des animaux depuis la base de données
    $query = "SELECT a.*, c.*, n.* FROM animaux AS a
              JOIN compte_rendu AS c ON a.id = c.id
              JOIN nourriture_animal AS n ON a.id = n.id
              WHERE a.idHabitat = 3";

    $recupData = $bdd->query($query);

    // Initialisation du compteur
    $count = 0;

    // Début de la boucle pour afficher les animaux
    while ($data = $recupData->fetch()) {
        // Incrémenter le compteur à chaque animal
        $count++;

        // Commence une nouvelle ligne après chaque 3e animal
        if ($count % 3 == 1) {
            echo '<div class="row">';
        }
        ?>
        <article>
            <img class="habitat-présentation-image update-visits" src="data:image/jpeg;base64,<?= base64_encode($data['img']); ?>" alt="<?= $data['nom_animal']; ?>">
            <h2><?= $data['nom_animal'] ?></h2>
            <h4>Race : <?= $data['race_animal'] ?></h4>
            <h4>Santé : <?= $data['etat_sante'] ?></h4>
            <h4>Nourriture : <?= $data['nourriture'] ?></h4>
            <h4>Grammage quotidien : <?= $data['grammage_nourriture'] ?></h4>
            <h4>Heure dîner : <?= $data['heure_manger'] ?></h4>
            <h4>Date de passage : <?= $data['date_passage'] ?></h4>
            <h4>Détails sur l'État de l'animal : <?= $data['compte_rendu_veterinaire'] ?></h4>
        </article>
        <?php
        // Ferme la ligne après chaque 3e animal
        if ($count % 3 == 0) {
            echo '</div>';
        }
    }

    // Ferme la dernière ligne si le nombre d'animal n'est pas un multiple de trois
    if ($count % 3 != 0) {
        echo '</div>';
    }

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
