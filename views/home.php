<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style-home.css">
    <title>NeonQuests</title>
</head>

<body>
    <div class="top-bar">
        <div>
            <a href="index.php?action=logout">
                <img src="assets/img/neonquests_full_logo.svg" alt="neonquests-logo" class="logo">
            </a>
        </div>
        <div class="progress-bar">
            <progress value=<?= $_SESSION['progress'] ?> max="100"></progress>
        </div>
        <div class="account-logo-container">
            <span class='pseudo'><?= $_SESSION['pseudo'] ?></span>
            <a href="account">
                <img src="assets/img/neonquests_account_icon.png" alt="neonquests-account-icon" class="account">
            </a>
        </div>
    </div>

    <div class="box_btn">
        <div class="onglet-titre">Thème 1 : HTML - CSS - JavaScript (web)</div>
        <button class="boutonlevel">
            LEVEL 1
        </button>
        <svg class="line">
            <line x1="220" y1="270" x2="500" y2="120" />
        </svg>
        <button class="boutonlevel1">
            LEVEL 2
        </button>
        <svg class="line">
            <line x1="630" y1="120" x2="860" y2="240" />
        </svg>
        <button class="boutonlevel">
            LEVEL 3
        </button>
        <svg class="line">
            <line x1="990" y1="240" x2="1230" y2="120" />
        </svg>
        <button class="boutonlevel1">
            LEVEL 4
        </button>
        <svg class="line">
            <line x1="1350" y1="130" x2="1590" y2="240" />            
        </svg>
        <button class="boutonlevel">
            LEVEL 5
        </button>
    </div>

    <div class="box_btn">
        <div class="onglet-titre">Thème 2 : VBA/Excel</div>
        <button class="boutonlevel">
            LEVEL 1
        </button>
        <svg class="line">
            <line x1="220" y1="270" x2="500" y2="120" />
        </svg>
        <button class="boutonlevel1">
            LEVEL 2
        </button>
        <svg class="line">
            <line x1="630" y1="120" x2="860" y2="240" />
        </svg>
        <button class="boutonlevel">
            LEVEL 3
        </button>
        <svg class="line">
            <line x1="990" y1="240" x2="1230" y2="120" />
        </svg>
        <button class="boutonlevel1">
            LEVEL 4
        </button>
        <svg class="line">
            <line x1="1350" y1="130" x2="1590" y2="240" />            
        </svg>
        <button class="boutonlevel">
            LEVEL 5
        </button>
    </div>

    <div class="box_btn">
        <div class="onglet-titre">Thème 3 : Langage C</div>
        <button class="boutonlevel">
            LEVEL 1
        </button>
        <svg class="line">
            <line x1="220" y1="270" x2="500" y2="120" />
        </svg>
        <button class="boutonlevel1">
            LEVEL 2
        </button>
        <svg class="line">
            <line x1="630" y1="120" x2="860" y2="240" />
        </svg>
        <button class="boutonlevel">
            LEVEL 3
        </button>
        <svg class="line">
            <line x1="990" y1="240" x2="1230" y2="120" />
        </svg>
        <button class="boutonlevel1">
            LEVEL 4
        </button>
        <svg class="line">
            <line x1="1350" y1="130" x2="1590" y2="240" />            
        </svg>
        <button class="boutonlevel">
            LEVEL 5
        </button>
    </div>

    <div class="box_btn">
        <div class="onglet-titre">Thème 4 : Algorithmique</div>
        <button class="boutonlevel">
            LEVEL 1
        </button>
        <svg class="line">
            <line x1="220" y1="270" x2="500" y2="120" />
        </svg>
        <button class="boutonlevel1">
            LEVEL 2
        </button>
        <svg class="line">
            <line x1="630" y1="120" x2="860" y2="240" />
        </svg>
        <button class="boutonlevel">
            LEVEL 3
        </button>
        <svg class="line">
            <line x1="990" y1="240" x2="1230" y2="120" />
        </svg>
        <button class="boutonlevel1">
            LEVEL 4
        </button>
        <svg class="line">
            <line x1="1350" y1="130" x2="1590" y2="240" />            
        </svg>
        <button class="boutonlevel">
            LEVEL 5
        </button>
    </div>

    <div class="box_btn">
        <div class="onglet-titre">Thème 5 : Réseau</div>
        <button class="boutonlevel">
            LEVEL 1
        </button>
        <svg class="line">
            <line x1="220" y1="270" x2="500" y2="120" />
        </svg>
        <button class="boutonlevel1">
            LEVEL 2
        </button>
        <svg class="line">
            <line x1="630" y1="120" x2="860" y2="240" />
        </svg>
        <button class="boutonlevel">
            LEVEL 3
        </button>
        <svg class="line">
            <line x1="990" y1="240" x2="1230" y2="120" />
        </svg>
        <button class="boutonlevel1">
            LEVEL 4
        </button>
        <svg class="line">
            <line x1="1350" y1="130" x2="1590" y2="240" />            
        </svg>
        <button class="boutonlevel">
            LEVEL 5
        </button>
    </div>

    <div class="box_btn">
        <div class="onglet-titre">Thème 6 : Circuit logique et architecture de l'ordinateur</div>
        <button class="boutonlevel">
            LEVEL 1
        </button>
        <svg class="line">
            <line x1="220" y1="270" x2="500" y2="120" />
        </svg>
        <button class="boutonlevel1">
            LEVEL 2
        </button>
        <svg class="line">
            <line x1="630" y1="120" x2="860" y2="240" />
        </svg>
        <button class="boutonlevel">
            LEVEL 3
        </button>
        <svg class="line">
            <line x1="990" y1="240" x2="1230" y2="120" />
        </svg>
        <button class="boutonlevel1">
            LEVEL 4
        </button>
        <svg class="line">
            <line x1="1350" y1="130" x2="1590" y2="240" />            
        </svg>
        <button class="boutonlevel">
            LEVEL 5
        </button>
    </div>

    <div class="box_btn">
        <div class="onglet-titre">Thème 7 : Linux</div>
        <button class="boutonlevel">
            LEVEL 1
        </button>
        <svg class="line">
            <line x1="220" y1="270" x2="500" y2="120" />
        </svg>
        <button class="boutonlevel1">
            LEVEL 2
        </button>
        <svg class="line">
            <line x1="630" y1="120" x2="860" y2="240" />
        </svg>
        <button class="boutonlevel">
            LEVEL 3
        </button>
        <svg class="line">
            <line x1="990" y1="240" x2="1230" y2="120" />
        </svg>
        <button class="boutonlevel1">
            LEVEL 4
        </button>
        <svg class="line">
            <line x1="1350" y1="130" x2="1590" y2="240" />            
        </svg>
        <button class="boutonlevel">
            LEVEL 5
        </button>
    </div>

    <footer>
        <p>NeonQuests</p>
        <p>Projet Annuel ESGI 2025/2026</p>
        <p>Loan Borowski & Matthias Bourdon & Noa Rousseau</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>