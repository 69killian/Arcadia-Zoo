document.addEventListener("DOMContentLoaded", function() {
    chargerAnimaux();
});

function chargerAnimaux() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'charger_jungle.php', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var container = document.getElementById('animauxContainer');
            if (container) {
                container.innerHTML = xhr.responseText;
                // Réapplique le script fiche-animal.js après le chargement AJAX
                attachAnimalClickEvents();
            } else {
                console.error('Element with id "animauxContainer" not found.');
            }
        }
    };
    xhr.onerror = function() {
        console.error('An error occurred during the AJAX request.');
    };
    xhr.send();
}

function attachAnimalClickEvents() {
    // Sélectionne tous les éléments article dans la colonne-habitat
    const articles = document.querySelectorAll('.colonne-habitat article');

    // Boucle qui parcours tous les articles
    articles.forEach(article => {
        const image = article.querySelector('.habitat-présentation-image');
        const details = article.querySelectorAll('h4');
        const nomAnimal = article.querySelector('h2').textContent.trim(); // Récupère le nom de l'animal

        // Cache les détails de chaque animal par défaut
        details.forEach(detail => {
            detail.style.display = 'none';
        });

        // Au click de l'image
        image.addEventListener('click', () => {
            // Si les détails sont visibles, les cachez, sinon, affichez-les
            details.forEach(detail => {
                if (detail.style.display === 'none') {
                    detail.style.display = 'block';
                } else {
                    detail.style.display = 'none';
                }
            });
        });
    });
}
