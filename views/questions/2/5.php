<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style-questions.css">
    <title>VBA 5</title>

</head>

<body>
    <?php require "views/top-bar.html" ?>

    <div class="quiz-wrapper">
        <div class="quiz-container">
            <div class="step active" id="step-5">
                <p class="question">5. La structure conditionnelle</p>

                <div class="scenario-box">
                    <strong>Objectif :</strong> Complétez le code pour que si la note est inférieure à 10, la cellule
                    affiche "Refusé".
                </div>

                <div class="input-zone vba-style">
                    <pre>
Sub VerifierNote()
  If Range("A1").Value >= 10 Then
    Range("B1").Value = "Admis"
  <input type="text" id="answer-input-5" placeholder="..." style="width: 60px;"> 
    Range("B1").Value = "Refusé"
  End If
End Sub</pre>
                </div>

                <button class="choice" onclick="checkTypedAnswer(5, 'Else')">Valider le code VBA</button>
            </div>
        </div>
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
</body>

</html>