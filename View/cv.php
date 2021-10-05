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
    <link rel="stylesheet" href="../asset/css/allStyle.css">
    <title>CV de reprise</title>
</head>
<body>
    <header>
        <h1>Amaury Jocaille</h1>
    </header>
    <main>
        <h2>→ Information personnelles</h2>
        <section id="sectionInformation">
            <aside>
                <table>
                    <tbody>
                    <tr>
                        <th>Date de naissance</th>
                        <td>26/12/1991</td>
                    </tr>

                    <tr>
                        <th>Adresse</th>
                        <td>Rue de la Station 5, 6590 MOMIGNIES</td>
                    </tr>

                    <tr>
                        <th>Email</th>
                        <td>amaury.jocaille@hotmail.com</td>
                    </tr>

                    <tr>
                        <th>Téléphone</th>
                        <td>0490 36 35 32</td>
                    </tr>
                    </tbody>
                </table>
            </aside>

            <aside>
                <figure>
                    <img src="../doc/maxi-coca.jpg" alt="amaury jocaille">
                    <figcaption>Ma photo</figcaption>
                </figure>
            </aside>
        </section>

        <h2>→ Informations</h2>
        <section>
            <nav> <?php
            $allUl = UlManager::get();
            echo "<ul>";
            foreach ($allUl as $ul) {
                if($ul->getUl() === 0) {
                    echo "<li><a href='" . $ul->getContentA() . "'>" . $ul->getContent() . "</a></li>";
                }
            }
            echo "</ul>";
         ?> </nav>
        </section>

        <h3>→ Contact</h3>
        <section>
            <fieldset>
                <div>
                    <label for="content">Votre message:</label>
                    <textarea id="content"></textarea>
                </div>
                <div>
                    <input type="submit">
                </div>
            </fieldset>
        </section>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../asset/js/Jquery.js"></script>
</body>
</html>