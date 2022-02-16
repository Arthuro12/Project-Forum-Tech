<?php $title = "Verbindung"; ?>

<?php ob_start() ?>

<body class="container">
    <h2 class="bg-success mt-3">
        Anmeldung
    </h2><br>
    <form action="" method="post">
        <div class="mb-3">
            <label for="email" class="form-label">Geben Sie Ihre Email-Adresse ein : *</label>
            <input type="email" class="form-control" id="email" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password : *</label>
            <input type="password" class="form-control" id="password">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-success mb-3">registrieren</button>
        </div>
    </form>

    <div>
        <a>Haben Sie Ihr Passwort vergessen ?</a>
    </div>

    <div>
        <h4 class="bg-success mt-3">Haben Sie kein Konto</h4>
    </div>
    <div>
        <p>Sind Sie gerade auf Forum Tech nicht registriert? Registrieren Sie sich um an dem
            Forum teilnehmen zu können. Das dauert nur <a href="#">Paar Sekunden</a>
        </p>
    </div>
</body>

<?php
require('footer.php');
?>
<?php
$content = ob_get_clean();
?>

<?php
require('template.php')
?>