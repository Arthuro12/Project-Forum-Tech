<?php $title = "Registrieren"; ?>

<?php ob_start() ?>

<body class="container">
    <h2 class="bg-success mt-3">
        Hilfe Tech
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