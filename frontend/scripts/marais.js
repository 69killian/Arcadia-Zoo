document.addEventListener("DOMContentLoaded", function() {
    chargerAnimaux();
});

function chargerAnimaux() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'charger_marais.php', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var container = document.getElementById('animauxContainer');
            if (container) {
                container.innerHTML = xhr.responseText;
                // Initialiser les détails des animaux après le chargement AJAX
                initializeAnimalDetails();
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
