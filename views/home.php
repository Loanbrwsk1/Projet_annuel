<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style-home.css">
    <title>NeonQuests</title>
</head>

<body>
    <div class="top-bar">
        <div>
            <a href="http://projet.local/index.php?action=logout">
                <img src="/assets/img/neonquests_full_logo.svg" alt="neonquests-logo" class="logo">
            </a>
        </div>
        <div class="progress-bar">
            <progress value=<?= $_SESSION['progress'] ?> max="100"></progress>
        </div>
        <div class="account-logo-container">
            <span class='pseudo'>
                <?= $_SESSION['pseudo'] ?>
            </span>
            <a href="account">
                <img src="/assets/img/neonquests_account_icon.png" alt="neonquests-account-icon" class="account">
            </a>
        </div>
    </div>

    <div class="box_btn">
        <div class="onglet-titre">Thème 1 : HTML - CSS - PHP (Web)</div>
        <a href="http://projet.local/question/1/1">
            <button class="boutonlevel <?= $_SESSION["T1Q1D"] . " " . $_SESSION["T1Q1V"] ?>">
                LEVEL 1
            </button>
        </a>
        <svg class="line">
            <line x1="220" y1="270" x2="500" y2="120" />
        </svg>
        <a href="http://projet.local/question/1/2">
            <button class="boutonlevel1 <?= $_SESSION["T1Q2D"] . " " . $_SESSION["T1Q2V"] ?>">
                LEVEL 2
            </button>
        </a>
        <svg class="line">
            <line x1="630" y1="120" x2="860" y2="240" />
        </svg>
        <a href="http://projet.local/question/1/3">
            <button class="boutonlevel <?= $_SESSION["T1Q3D"] . " " . $_SESSION["T1Q3V"] ?>">
                LEVEL 3
            </button>
        </a>
        <svg class="line">
            <line x1="990" y1="240" x2="1230" y2="120" />
        </svg>
        <a href="http://projet.local/question/1/4">
            <button class="boutonlevel1 <?= $_SESSION["T1Q4D"] . " " . $_SESSION["T1Q4V"] ?>">
                LEVEL 4
            </button>
        </a>
        <svg class="line">
            <line x1="1350" y1="130" x2="1590" y2="240" />
        </svg>
        <a href="http://projet.local/question/1/5">
            <button class="boutonlevel <?= $_SESSION["T1Q5D"] . " " . $_SESSION["T1Q5V"] ?>">
                LEVEL 5
            </button>
        </a>
    </div>

    <div class="box_btn">
        <div class="onglet-titre">Thème 2 : VBA/Excel</div>
        <a href="http://projet.local/question/2/1">
            <button class="boutonlevel <?= $_SESSION["T2Q1D"] . " " . $_SESSION["T2Q1V"] ?>">
                LEVEL 1
            </button>
        </a>
        <svg class="line">
            <line x1="220" y1="270" x2="500" y2="120" />
        </svg>
        <a href="http://projet.local/question/2/2">
            <button class="boutonlevel1 <?= $_SESSION["T2Q2D"] . " " . $_SESSION["T2Q2V"] ?>">
                LEVEL 2
            </button>
        </a>
        <svg class="line">
            <line x1="630" y1="120" x2="860" y2="240" />
        </svg>
        <a href="http://projet.local/question/2/3">
            <button class="boutonlevel <?= $_SESSION["T2Q3D"] . " " . $_SESSION["T2Q3V"] ?>">
                LEVEL 3
            </button>
        </a>
        <svg class="line">
            <line x1="990" y1="240" x2="1230" y2="120" />
        </svg>
        <a href="http://projet.local/question/2/4">
            <button class="boutonlevel1 <?= $_SESSION["T2Q4D"] . " " . $_SESSION["T2Q4V"] ?>">
                LEVEL 4
            </button>
        </a>
        <svg class="line">
            <line x1="1350" y1="130" x2="1590" y2="240" />
        </svg>
        <a href="http://projet.local/question/2/5">
            <button class="boutonlevel <?= $_SESSION["T2Q5D"] . " " . $_SESSION["T2Q5V"] ?>">
                LEVEL 5
            </button>
        </a>
    </div>

    <div class="box_btn">
        <div class="onglet-titre">Thème 3 : Langage C</div>
        <a href="http://projet.local/question/3/1">
            <button class="boutonlevel <?= $_SESSION["T3Q1D"] . " " . $_SESSION["T3Q1V"] ?>">
                LEVEL 1
            </button>
        </a>
        <svg class="line">
            <line x1="220" y1="270" x2="500" y2="120" />
        </svg>
        <a href="http://projet.local/question/3/2">
            <button class="boutonlevel1 <?= $_SESSION["T3Q2D"] . " " . $_SESSION["T3Q2V"] ?>">
                LEVEL 2
            </button>
        </a>
        <svg class="line">
            <line x1="630" y1="120" x2="860" y2="240" />
        </svg>
        <a href="http://projet.local/question/3/3">
            <button class="boutonlevel <?= $_SESSION["T3Q3D"] . " " . $_SESSION["T3Q3V"] ?>">
                LEVEL 3
            </button>
        </a>
        <svg class="line">
            <line x1="990" y1="240" x2="1230" y2="120" />
        </svg>
        <a href="http://projet.local/question/3/4">
            <button class="boutonlevel1 <?= $_SESSION["T3Q4D"] . " " . $_SESSION["T3Q4V"] ?>">
                LEVEL 4
            </button>
        </a>
        <svg class="line">
            <line x1="1350" y1="130" x2="1590" y2="240" />
        </svg>
        <a href="http://projet.local/question/3/5">
            <button class="boutonlevel <?= $_SESSION["T3Q5D"] . " " . $_SESSION["T3Q5V"] ?>">
                LEVEL 5
            </button>
        </a>
    </div>

    <div class="box_btn">
        <div class="onglet-titre">Thème 4 : Algorithmique</div>
        <a href="http://projet.local/question/4/1">
            <button class="boutonlevel <?= $_SESSION["T4Q1D"] . " " . $_SESSION["T4Q1V"] ?>">
                LEVEL 1
            </button>
        </a>
        <svg class="line">
            <line x1="220" y1="270" x2="500" y2="120" />
        </svg>
        <a href="http://projet.local/question/4/2">
            <button class="boutonlevel1 <?= $_SESSION["T4Q2D"] . " " . $_SESSION["T4Q2V"] ?>">
                LEVEL 2
            </button>
        </a>
        <svg class="line">
            <line x1="630" y1="120" x2="860" y2="240" />
        </svg>
        <a href="http://projet.local/question/4/3">
            <button class="boutonlevel <?= $_SESSION["T4Q3D"] . " " . $_SESSION["T4Q3V"] ?>">
                LEVEL 3
            </button>
        </a>
        <svg class="line">
            <line x1="990" y1="240" x2="1230" y2="120" />
        </svg>
        <a href="http://projet.local/question/4/4">
            <button class="boutonlevel1 <?= $_SESSION["T4Q4D"] . " " . $_SESSION["T4Q4V"] ?>">
                LEVEL 4
            </button>
        </a>
        <svg class="line">
            <line x1="1350" y1="130" x2="1590" y2="240" />
        </svg>
        <a href="http://projet.local/question/4/5">
            <button class="boutonlevel <?= $_SESSION["T4Q5D"] . " " . $_SESSION["T4Q5V"] ?>">
                LEVEL 5
            </button>
        </a>
    </div>

    <div class="box_btn">
        <div class="onglet-titre">Thème 5 : Réseau</div>
        <a href="http://projet.local/question/5/1">
            <button class="boutonlevel <?= $_SESSION["T5Q1D"] . " " . $_SESSION["T5Q1V"] ?>">
                LEVEL 1
            </button>
        </a>
        <svg class="line">
            <line x1="220" y1="270" x2="500" y2="120" />
        </svg>
        <a href="http://projet.local/question/5/2">
            <button class="boutonlevel1 <?= $_SESSION["T5Q2D"] . " " . $_SESSION["T5Q2V"] ?>">
                LEVEL 2
            </button>
        </a>
        <svg class="line">
            <line x1="630" y1="120" x2="860" y2="240" />
        </svg>
        <a href="http://projet.local/question/5/3">
            <button class="boutonlevel <?= $_SESSION["T5Q3D"] . " " . $_SESSION["T5Q3V"] ?>">
                LEVEL 3
            </button>
        </a>
        <svg class="line">
            <line x1="990" y1="240" x2="1230" y2="120" />
        </svg>
        <a href="http://projet.local/question/5/4">
            <button class="boutonlevel1 <?= $_SESSION["T5Q4D"] . " " . $_SESSION["T5Q4V"] ?>">
                LEVEL 4
            </button>
        </a>
        <svg class="line">
            <line x1="1350" y1="130" x2="1590" y2="240" />
        </svg>
        <a href="http://projet.local/question/5/5">
            <button class="boutonlevel <?= $_SESSION["T5Q5D"] . " " . $_SESSION["T5Q5V"] ?>">
                LEVEL 5
            </button>
        </a>
    </div>

    <div class="box_btn">
        <div class="onglet-titre">Thème 6 : Circuit logique et architecture de l'ordinateur</div>
        <a href="http://projet.local/question/6/1">
            <button class="boutonlevel <?= $_SESSION["T6Q1D"] . " " . $_SESSION["T6Q1V"] ?>">
                LEVEL 1
            </button>
        </a>
        <svg class="line">
            <line x1="220" y1="270" x2="500" y2="120" />
        </svg>
        <a href="http://projet.local/question/6/2">
            <button class="boutonlevel1 <?= $_SESSION["T6Q2D"] . " " . $_SESSION["T6Q2V"] ?>">
                LEVEL 2
            </button>
        </a>
        <svg class="line">
            <line x1="630" y1="120" x2="860" y2="240" />
        </svg>
        <a href="http://projet.local/question/6/3">
            <button class="boutonlevel <?= $_SESSION["T6Q3D"] . " " . $_SESSION["T6Q3V"] ?>">
                LEVEL 3
            </button>
        </a>
        <svg class="line">
            <line x1="990" y1="240" x2="1230" y2="120" />
        </svg>
        <a href="http://projet.local/question/6/4">
            <button class="boutonlevel1 <?= $_SESSION["T6Q4D"] . " " . $_SESSION["T6Q4V"] ?>">
                LEVEL 4
            </button>
        </a>
        <svg class="line">
            <line x1="1350" y1="130" x2="1590" y2="240" />
        </svg>
        <a href="http://projet.local/question/6/5">
            <button class="boutonlevel <?= $_SESSION["T6Q5D"] . " " . $_SESSION["T6Q5V"] ?>">
                LEVEL 5
            </button>
        </a>
    </div>

    <div class="box_btn">
        <div class="onglet-titre">Thème 7 : Linux</div>
        <a href="http://projet.local/question/7/1">
            <button class="boutonlevel <?= $_SESSION["T7Q1D"] . " " . $_SESSION["T7Q1V"] ?>">
                LEVEL 1
            </button>
        </a>
        <svg class="line">
            <line x1="220" y1="270" x2="500" y2="120" />
        </svg>
        <a href="http://projet.local/question/7/2">
            <button class="boutonlevel1 <?= $_SESSION["T7Q2D"] . " " . $_SESSION["T7Q2V"] ?>">
                LEVEL 2
            </button>
        </a>
        <svg class="line">
            <line x1="630" y1="120" x2="860" y2="240" />
        </svg>
        <a href="http://projet.local/question/7/3">
            <button class="boutonlevel <?= $_SESSION["T7Q3D"] . " " . $_SESSION["T7Q3V"] ?>">
                LEVEL 3
            </button>
        </a>
        <svg class="line">
            <line x1="990" y1="240" x2="1230" y2="120" />
        </svg>
        <a href="http://projet.local/question/7/4">
            <button class="boutonlevel1 <?= $_SESSION["T7Q4D"] . " " . $_SESSION["T7Q4V"] ?>">
                LEVEL 4
            </button>
        </a>
        <svg class="line">
            <line x1="1350" y1="130" x2="1590" y2="240" />
        </svg>
        <a href="http://projet.local/question/7/5">
            <button class="boutonlevel <?= $_SESSION["T7Q5D"] . " " . $_SESSION["T7Q5V"] ?>">
                LEVEL 5
            </button>
        </a>
    </div>

    <div class="box_btn">
        <div class="onglet-titre">Thème 8 : JavaScript</div>
        <a href="http://projet.local/question/8/1">
            <button class="boutonlevel <?= $_SESSION["T8Q1D"] . " " . $_SESSION["T8Q1V"] ?>">
                LEVEL 1
            </button>
        </a>
        <svg class="line">
            <line x1="220" y1="270" x2="500" y2="120" />
        </svg>
        <a href="http://projet.local/question/8/2">
            <button class="boutonlevel1 <?= $_SESSION["T8Q2D"] . " " . $_SESSION["T8Q2V"] ?>">
                LEVEL 2
            </button>
        </a>
        <svg class="line">
            <line x1="630" y1="120" x2="860" y2="240" />
        </svg>
        <a href="http://projet.local/question/8/3">
            <button class="boutonlevel <?= $_SESSION["T8Q3D"] . " " . $_SESSION["T8Q3V"] ?>">
                LEVEL 3
            </button>
        </a>
        <svg class="line">
            <line x1="990" y1="240" x2="1230" y2="120" />
        </svg>
        <a href="http://projet.local/question/8/4">
            <button class="boutonlevel1 <?= $_SESSION["T8Q4D"] . " " . $_SESSION["T8Q4V"] ?>">
                LEVEL 4
            </button>
        </a>
        <svg class="line">
            <line x1="1350" y1="130" x2="1590" y2="240" />
        </svg>
        <a href="http://projet.local/question/8/5">
            <button class="boutonlevel <?= $_SESSION["T8Q5D"] . " " . $_SESSION["T8Q5V"] ?>">
                LEVEL 5
            </button>
        </a>
    </div>

    <div class="box_btn">
        <div class="onglet-titre">Thème 9 : SQL</div>
        <a href="http://projet.local/question/9/1">
            <button class="boutonlevel <?= $_SESSION["T9Q1D"] . " " . $_SESSION["T9Q1V"] ?>">
                LEVEL 1
            </button>
        </a>
        <svg class="line">
            <line x1="220" y1="270" x2="500" y2="120" />
        </svg>
        <a href="http://projet.local/question/9/2">
            <button class="boutonlevel1 <?= $_SESSION["T9Q2D"] . " " . $_SESSION["T9Q2V"] ?>">
                LEVEL 2
            </button>
        </a>
        <svg class="line">
            <line x1="630" y1="120" x2="860" y2="240" />
        </svg>
        <a href="http://projet.local/question/9/3">
            <button class="boutonlevel <?= $_SESSION["T9Q3D"] . " " . $_SESSION["T9Q3V"] ?>">
                LEVEL 3
            </button>
        </a>
        <svg class="line">
            <line x1="990" y1="240" x2="1230" y2="120" />
        </svg>
        <a href="http://projet.local/question/9/4">
            <button class="boutonlevel1 <?= $_SESSION["T9Q4D"] . " " . $_SESSION["T9Q4V"] ?>">
                LEVEL 4
            </button>
        </a>
        <svg class="line">
            <line x1="1350" y1="130" x2="1590" y2="240" />
        </svg>
        <a href="http://projet.local/question/9/5">
            <button class="boutonlevel <?= $_SESSION["T9Q5D"] . " " . $_SESSION["T9Q5V"] ?>">
                LEVEL 5
            </button>
        </a>
    </div>

    <?php
    require "views/footer.html";

    if (!empty($_SESSION['error'])) {
        echo "<script>
        window.onload = function() {
            alert('" . $_SESSION['error'] . "');
        } </script>";
        unset($_SESSION['error']);
    }
    ?>

    <script src="/assets/js/script.js"></script>
</body>

</html>