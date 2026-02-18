<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style-home.css">
    <title>NeonQuests</title>
</head>

<body>
    <style>
        .boutonlevel {
            width: 155px;
            height: 150px;
            font-weight: bolder;
            cursor: pointer;
            color: #ffffff;
            font-size: 17px;
            border-radius: 50%;
            border: none;
            position: relative;
            background: inherit;
            transition: 0.1s;
            background: linear-gradient(90deg,
                    rgba(0, 154, 214, 1) 0%,
                    rgba(39, 64, 163, 1) 50%,
                    rgba(210, 0, 247, 1) 100%);
            background-attachment: fixed;
            overflow: hidden;
        }
        .boutonlevel::after {
            content: '';
            width: 100%;
            height: 100%;
            filter: blur(15px);
            z-index: -1;
            position: absolute;
            left: 0;
            top: 0;
        }

        .boutonlevel:active {
            transform: scale(0.95);
        }

        .box_btn {
            background-color: #212121;
            padding: 100px;
            margin-top: 50px;
            margin-left: 50px;
            margin-right: 50px;
            border-radius: 20px;

        }
    </style>
    
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
        <button class="boutonlevel">
            LEVEL 1
        </button>
    </div>

    <div class="box_btn">
        <button class="boutonlevel">
            LEVEL 1
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