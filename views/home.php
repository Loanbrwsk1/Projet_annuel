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
            <a href="index.php?page=account">
                <img src="assets/img/neonquests_account_icon.png" alt="neonquests-account-icon" class="account">
            </a>
        </div>
    </div>

    <div class="box_btn">
        <div class="onglet-titre">thème 1 : je mange des pâtes</div>
        <button class="boutonlevel">
            LEVEL 1
        </button>
        <svg class="line">
            <line x1="130" y1="110" x2="240" y2="40" />
        </svg>
        <button class="boutonlevel1">
            LEVEL 2
        </button>
        <svg class="line">
            <line x1="480" y1="110" x2="240" y2="-60" />
        </svg>
        <button class="boutonlevel">
            LEVEL 3
        </button>
        <svg class="line">
            <line x1="580" y1="110" x2="740" y2="0" />
        </svg>
        <button class="boutonlevel1">
            LEVEL 4
        </button>
        <svg class="line">
            <line x1="920" y1="110" x2="740" y2="-30" />
        </svg>
        <button class="boutonlevel">
            LEVEL 5
        </button>

    </div>

    <div class="box_btn">
        <div class="onglet-titre">thème 2 : je mange des pâtes</div>
        <button class="boutonlevel">
            LEVEL 1
        </button>
        <svg class="line">
            <line x1="130" y1="110" x2="240" y2="40" />
        </svg>
        <button class="boutonlevel1">
            LEVEL 2
        </button>
        <svg class="line">
            <line x1="480" y1="110" x2="240" y2="-60" />
        </svg>
        <button class="boutonlevel">
            LEVEL 3
        </button>
        <svg class="line">
            <line x1="580" y1="110" x2="740" y2="0" />
        </svg>
        <button class="boutonlevel1">
            LEVEL 4
        </button>
        <svg class="line">
            <line x1="920" y1="110" x2="740" y2="-30" />
        </svg>
        <button class="boutonlevel">
            LEVEL 5
        </button>
    </div>
    <div class="box_btn">
        <div class="onglet-titre">thème 3 : je mange des pâtes</div>
        <button class="boutonlevel">
            LEVEL 1
        </button>
        <svg class="line">
            <line x1="130" y1="110" x2="240" y2="40" />
        </svg>
        <button class="boutonlevel1">
            LEVEL 2
        </button>
        <svg class="line">
            <line x1="480" y1="110" x2="240" y2="-60" />
        </svg>
        <button class="boutonlevel">
            LEVEL 3
        </button>
        <svg class="line">
            <line x1="580" y1="110" x2="740" y2="0" />
        </svg>
        <button class="boutonlevel1">
            LEVEL 4
        </button>
        <svg class="line">
            <line x1="920" y1="110" x2="740" y2="-30" />
        </svg>
        <button class="boutonlevel">
            LEVEL 5
        </button>

    </div>
    <div class="box_btn">
        <div class="onglet-titre">thème 4 : je mange des pâtes</div>
        <button class="boutonlevel">
            LEVEL 1
        </button>
        <svg class="line">
            <line x1="130" y1="110" x2="240" y2="40" />
        </svg>
        <button class="boutonlevel1">
            LEVEL 2
        </button>
        <svg class="line">
            <line x1="480" y1="110" x2="240" y2="-60" />
        </svg>
        <button class="boutonlevel">
            LEVEL 3
        </button>
        <svg class="line">
            <line x1="580" y1="110" x2="740" y2="0" />
        </svg>
        <button class="boutonlevel1">
            LEVEL 4
        </button>
        <svg class="line">
            <line x1="920" y1="110" x2="740" y2="-30" />
        </svg>
        <button class="boutonlevel">
            LEVEL 5
        </button>

    </div>
    <div class="box_btn">
        <div class="onglet-titre">thème 5 : je mange des pâtes</div>
        <button class="boutonlevel">
            LEVEL 1
        </button>
        <svg class="line">
            <line x1="130" y1="110" x2="240" y2="40" />
        </svg>
        <button class="boutonlevel1">
            LEVEL 2
        </button>
        <svg class="line">
            <line x1="480" y1="110" x2="240" y2="-60" />
        </svg>
        <button class="boutonlevel">
            LEVEL 3
        </button>
        <svg class="line">
            <line x1="580" y1="110" x2="740" y2="0" />
        </svg>
        <button class="boutonlevel1">
            LEVEL 4
        </button>
        <svg class="line">
            <line x1="920" y1="110" x2="740" y2="-30" />
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