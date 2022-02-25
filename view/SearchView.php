<?php
session_start();
$this->title = "Ergebnis"; ?>

<body class="container">
    <?php foreach ($search as $item) : ?>
    <a class="link-success" href="<?= "index.php?action=publication&id=" . $item['publication_id'] ?>">
        <h4 class=" mt-3"><?= $item['title'] ?></h4>
    </a>
    <?php endforeach; ?>
</body>