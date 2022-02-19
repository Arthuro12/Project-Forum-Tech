<?php
$this->title = "Home"; ?>

<body class="container">
    <div>
        <h2 class="bg-success mt-3">
            Hilfe Tech
        </h2>
    </div>
    <div>
        <?php foreach ($publications as $publication) : ?>
        <h4 class="bg-success mt-3">
            <?= $publication['title'] ?>
        </h4>
        <br>
        <div>
            <span>Veröffentlicht am <?= $publication['publicationdate'] ?></span>
            <a class="link-success" href="#">
                Kommentare</a>
        </div><br>
        <div>
            <p>
                <?= $publication['publicationdescription'] ?>
                <span>[...]</span>
            </p>
            <a class=" link-success" href="<?= "index.php?action=publication&id=" . $publication['id'] ?>">Alles
                lesen</a>
            <?php endforeach; ?>
        </div>
    </div>
</body>