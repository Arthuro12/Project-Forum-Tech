<?php $this->title = "Verbindung"; ?>

<body class="container">
    <h2 class="bg-success mt-3">
        Anmeldung
    </h2><br>
    <form action="index.php" method="get">
        <div class="mb-3">
            <label for="email" class="form-label">Geben Sie Ihre Email-Adresse ein : *</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password : *</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-success mb-3" name="submit">Anmelden</button>
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
            Forum teilnehmen zu können. Das dauert nur <a class="link-success" href="#">Paar Sekunden</a>
        </p>
    </div>
</body>