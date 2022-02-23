<?php $this->title = "Registrieren"; ?>

<body class="container">
    <h2 class="bg-success mt-3">
        Hilfe Tech
    </h2><br>
    <form action="index.php" method="get">
        <div class="mb-3">
            <label for="firstName" class="form-label">Geben Sie Ihren Vorname ein : *</label>
            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Vorname"><br>
            <label for="lastName" class="form-label">Geben Sie Ihren Nachname ein : *</label>
            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Nachname"><br>
            <label for="email" class="form-label">Geben Sie Ihre Email-Adresse ein : *</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password : *</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-success mb-3" name="submit">registrieren</button>
        </div>
    </form>
</body>