<?php
require_once "require.php";
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administration</title>
    <link rel="stylesheet" href="../asset/css/allStyle.css">
</head>
<body>
    <h2>Ajout d'une compétence/un hobbit</h2>
    <div class="divAdmin">
        <form>
            <div>
                <label for="contentSection">Contenu:</label>
                <textarea id="contentSection" name="contentSection"></textarea>
            </div>
            <div>
                <label for="choiceSection">Type:</label>
                <select name="choiceSection" id="choiceSection">
                    <option value="0">Compétence</option>
                    <option value="1">Hobbit</option>
                </select>
            </div>
            <input type="button" id="buttonSection" value="Envoyer">
        </form>

        <div>
            <p>Compétences</p>
            <ul id="ulSkills"></ul>
        </div>
        <div>
            <p>Hobbits</p>
            <ul id="ulHobbit"></ul>
        </div>
    </div>

    <h2>Ajout d'études/parcours professionnel</h2>
    <div class="divAdmin">
        <form>
            <div>
                <label for="contentDt">Contenu du dt:</label>
                <textarea id="contentDt" name="contentDt"></textarea>
            </div>
            <div>
                <label for="contentDd">Contenu du dd:</label>
                <textarea id="contentDd" name="contentDd"></textarea>
            </div>
            <div>
                <label for="choiceDl">Type:</label>
                <select name="choiceDl" id="choiceDl">
                    <option value="0">Etudes</option>
                    <option value="1">Parcours pro</option>
                </select>
            </div>
            <input type="button" id="buttonDl" value="Envoyer">
        </form>

        <div>
            <p>Compétences</p>
            <dl id="dlStudy"></dl>
        </div>
        <div>
            <p>Hobbits</p>
            <dl id="dlWork"></dl>
        </div>
    </div>
    <p class="button"><a href="cv.php">Accueil</a></p>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../asset/js/ajaxApi.js"></script>
</body>
</html>
