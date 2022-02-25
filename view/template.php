<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css" />
    <title><?= $title ?></title>
</head>

<body class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">The Forum of Tech</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php
            if (isset($_SESSION['auth'])) : ?>
            <div class="collapse navbar-collapse customNav" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= "index.php?action=deconnection" ?>">Sich abmelden</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-success" href="#">Neue Publikation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-success" href="#">Newsletter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= "index.php?action=userview" ?>">Mein Konto</a>
                    </li>
                </ul>
                <form class="d-flex" action="index.php" method="get">
                    <input class="form-control me-2" type="search" name="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit" name="submit"> Suchen...</button>
                </form>
            </div>
            <?php else : ?>
            <div class="collapse navbar-collapse customNav" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="<?= "index.php?action=signin" ?>">Registrierung</a></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= "index.php?action=connection" ?>">Verbindung</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-success" href="#">Newsletter</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" href="#">Mein Konto</a>
                    </li>-->
                </ul>
                <form class="d-flex" action="index.php" method="get">
                    <input class="form-control me-2" type="search" name="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit" name="submit"> Suchen...</button>
                </form>
            </div>
            <?php endif; ?>
        </div>
    </nav>


    <?= $content ?>
    <?php require 'footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>