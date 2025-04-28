//EXO 3

// Créer et afficher le tableau
var tableau = [];
for (var i = 0; i < 10; i++) {
    tableau.push(Math.floor(Math.random() * 100));
}

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("nonTrie").innerHTML = tableau.join(" - ");

    tableau.sort(function(a, b) {
        return a - b;
    });

    document.getElementById("trie").innerHTML = tableau.join(" - ");
});

//EXO 4

// Changer l'image au survol
function changerImage() {
    document.getElementById("monImage").src = "image1.jpg";
}

// Remettre l'image de départ
function remettreImage() {
    document.getElementById("monImage").src = "image0.jpg";
}

// Afficher les informations de l'image
function afficherInfos() {
    var img = document.getElementById("monImage");
    alert(
        "Source : " + img.src + "\n" +
        "Nom : " + img.alt + "\n" +
        "Taille : " + img.width + " x " + img.height
    );
}

// Changer l'image aléatoirement parmi 6
function changerImageAleatoire() {
    var nombreAleatoire = Math.floor(Math.random() * 6);
    var img = document.getElementById("monImage");
    img.src = "image" + nombreAleatoire + ".jpg";
function changerImageAleatoire() {
    var nombreAleatoire = Math.floor(Math.random() * 6);
    var img = document.getElementById("monImage");
    img.src = "image" + nombreAleatoire + ".jpg";
    // Ne pas changer img.id !
}

}

