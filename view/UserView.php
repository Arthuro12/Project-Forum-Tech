<?php $title = "User"; ?>

<?php ob_start() ?>

<body class="container">
    <div class="main user-profil">
        <div class="profil-btn">
            <a href="#" class="btn-link">Beartbeiten</a>
        </div>

        <div class="user-avatar">
            <!--<div class="user-avatar__img">-->
            <img src="../public/images/user_avatar.jpg" width="210" height="200" />
            <!--</div>-->
            <h2>Vorname, Nachname</h2>
            <div class="recipes-btn">
                <a href="UserRecipesView.php">Alle Rezepte sehen</a>
            </div>
        </div>

        <div class="about-me">
            <h2>Über mich</h2>
            <p>Name, E-Mail, Telefonnummer</p>
        </div>

        <div class="account">
            <h2>Konto-Informationen</h2>
            <p>Registrierung-Datum</p>
            <p>Letzte Verbindung</p>
        </div>
    </div>
</body>

<?php
$content = ob_get_clean();
?>

<?php
require('template.php')
?>