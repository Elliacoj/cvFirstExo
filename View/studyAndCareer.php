<?php

use App\Model\Manager\DlManager;

require_once "require.php";
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../asset/css/allStyle.css">
    <title>Etudes et parcours professionnel</title>
</head>
<body>
    <main>
        <h2>Etudes et formations</h2>
        <section id="sectionOne" class="styleSectionStudy"> <?php
            $allDl = DlManager::get();
            echo "<dl>";
            foreach ($allDl as $dl) {
                if($dl->getDl() === 0) {
                    echo "<dt>" . $dl->getContentDt() . "</dt><dd>" . $dl->getContentDd() . "</dd>";
                }
            }
            echo "</dl>";
     ?> </section>

        <h2>Parcours professionnel</h2>
        <section id="sectionTwo" class="styleSectionStudy"><?php
            $allSection = DlManager::get();
            echo "<dl>";
            foreach ($allDl as $dl) {
                if($dl->getDl() === 1) {
                    echo "<dt>" . $dl->getContentDt() . "</dt><dd>" . $dl->getContentDd() . "</dd>";
                }
            }
            echo "</dl>";
     ?> </section>

        <p class="button"><a href="cv.php">Accueil</a></p>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../asset/js/Jquery.js"></script>
</body>
</html>
