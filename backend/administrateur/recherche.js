function fetchAnimals(searchTerm) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'traitement-recherche.php?s=' + searchTerm, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('animalContainer').innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}

// Écouteur d'événements pour le formulaire de recherche
document.getElementById('searchForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Empêcher le rechargement de la page
    var searchTerm = document.getElementById('searchInput').value;
    fetchAnimals(searchTerm);
});

// Charger les animaux au chargement initial de la page
fetchAnimals('');