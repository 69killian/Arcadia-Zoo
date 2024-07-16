<?php
session_start();
// Connexion à la base de données, en renseignant le lien de la bdd, username et password
$bdd = new PDO('mysql:host=localhost;dbname=espace_admin;','root','');

$response = '';

if(isset($_GET['s']) && !empty($_GET['s'])) {
    $recherche = htmlspecialchars($_GET['s']);
    $stmt = $bdd->prepare("SELECT * FROM compte_rendu WHERE 
                            nom_animal LIKE ? OR 
                            etat_sante LIKE ? OR 
                            date_passage LIKE ? OR 
                            compte_rendu_veterinaire LIKE ? 
                            ORDER BY id DESC");
    $stmt->execute(["%$recherche%", "%$recherche%", "%$recherche%", "%$recherche%"]);
} else {
    $stmt = $bdd->query('SELECT * FROM compte_rendu ORDER BY id DESC');
}

if($stmt->rowCount() > 0) {
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $response .= '<div class="crud-ligne">';
        $response .= '<p>'.$row['id'].'</p>';
        $response .= '<p>'.$row['nom_animal'].'</p>';
        $response .= '<p>'.$row['etat_sante'].'</p>';
        $response .= '<p>'.$row['date_passage'].'</p>';
        $response .= '<p style="width: 490px;">'.$row['compte_rendu_veterinaire'].'</p>';
        $response .= '</div>';
    }
} else {
    $response = '<p>Aucun utilisateur trouvé</p>';
}

echo $response;
?>

