<?php

use App\Model\Manager\SectionManager;

require_once "../Model/Manager/SectionManager.php";
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../asset/css/allStyle.css">
    <title>Compétences et Hobbits</title>
</head>
<body>
    <main>
        <h2>Compétences</h2>
        <section class="styleSection"> <?php
        $allSection = SectionManager::get();

        foreach ($allSection as $section) {
            if(($section->getPage() === 1) && ($section->getSection() === 0)) {
                echo "<p>" . $section->getContent() . "</p>";
            }
        }
     ?> </section>

        <h2>Hobbits</h2>
        <section class="styleSection"> <?php
        $allSection = SectionManager::get();

        foreach ($allSection as $section) {
            if(($section->getPage() === 1) && ($section->getSection() === 1)) {
                echo "<p>" . $section->getContent() . "</p>";
            }
        }
     ?> </section>

        <p class="button"><a href="cv.php">Accueil</a></p>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="../asset/js/Jquery.js"></script>
    </main>
</body>
</html>