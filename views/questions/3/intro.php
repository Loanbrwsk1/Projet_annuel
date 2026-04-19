<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style-questions.css">
    <title>Intro C</title>
</head>

<body>
    <?php require "views/templates/top-bar.html" ?>

    <div class="card-container">
        <div class="card">
            <h1>Langage C : L'Alphabet de l'Info</h1>
            <p class="history">Créé par <strong>Dennis Ritchie</strong> en 1972 pour coder le système UNIX.</p>

            <div class="content">
                <h3>Les Points Clés (Ne pas oublier !)</h3>
                <ul>
                    <li><strong>La Ponctuation :</strong> Chaque instruction finit par un `;`. Si tu l'oublies, le programme ne démarre pas.</li>
                    <li><strong>Le "Main" :</strong> Tout commence ici. C'est le point d'entrée de ton code : `int main() { ... }`.</li>
                    <li><strong>Affichage :</strong> On utilise la fonction `printf("Texte");` pour parler à l'utilisateur.</li>
                    <li><strong>Bibliothèque :</strong> Toujours mettre `#include <stdio.h>` tout en haut du fichier.</li>
                </ul>
            </div>
            <div class="center-btn">
                <a href="/question/3/1"><button class="submit">Aller au quiz</button></a>
            </div>
        </div>
    </div>

    <?php require "views/templates/footer.html" ?>
</body>

</html>