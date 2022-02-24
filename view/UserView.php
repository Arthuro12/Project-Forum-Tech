<?php $this->title = "User"; ?>

<body class="container">
    <div class="main user-profil">
        <div class="profil-btn">
            <a href="#" class="btn-link">Beartbeiten</a>
        </div>

        <div class="user-avatar">
            <!--<div class="user-avatar__img">-->
            <img src="../public/images/user_avatar.jpg" width="210" height="200" />
            <!--</div>-->
            <h2>
                <?= $user['first_name'] . " , "  . $user['last_name'] ?>
            </h2>
            <div class="recipes-btn">
                <a href="#">Meine Publikationen ansehen</a>
            </div>
        </div>

        <div class="about-me">
            <h2>Über mich</h2>
            <p> <strong>Name :</strong> <?= $user['first_name'] . " " .  $user['last_name'] ?>
                <br> <strong>E-Mail :</strong> <?= $user['e_mail']  ?>
            </p>
        </div>

        <div class="account">
            <h2>Konto-Informationen</h2>
            <p>Registrierung-Datum</p>
            <p>Letzte Verbindung</p>
        </div>
    </div>
</body>