<?php $title = "Home"; ?>

<?php ob_start() ?>

<body class="container">
    <div>
        <h2 class="bg-success mt-3">
            Hilfe Tech
        </h2>
    </div>
    <div>
        <h4 class="bg-success mt-3">
            Alles was Sie über Bildformate wissen sollen
        </h4>
        <br>
        <div>
            <span>Veröffentlicht am 11/01/2022</span>
            <a href="#">Kommentare</a>
        </div><br>
        <div>
            <p>
                Cum saepe multa, tum memini domi in hemicyclio sedentem, ut solebat, cum et ego essem una et pauci
                admodum
                familiares, in eum sermonem illum incidere qui tum forte multis erat in ore. Meministi enim profecto.
            </p>
            <a href="#">Alles lesen</a>
        </div>
    </div>
    <div>
        <h4 class="bg-success mt-3">
            Alles was Sie über Bildformate wissen sollen
        </h4>
        <br>
        <div>
            <span>Veröffentlicht am 11/01/2022</span>
            <a href="#">Kommentare</a>
        </div><br>
        <div>
            <p>
                Cum saepe multa, tum memini domi in hemicyclio sedentem, ut solebat, cum et ego essem una et pauci
                admodum
                familiares, in eum sermonem illum incidere qui tum forte multis erat in ore. Meministi enim profecto.
            </p>
            <a href="#">Alles lesen</a>
        </div>
    </div>
    <div>
        <h4 class="bg-success mt-3">
            Alles was Sie über Bildformate wissen sollen
        </h4>
        <br>
        <div>
            <span>Veröffentlicht am 11/01/2022</span>
            <a href="#">Kommentare</a>
        </div><br>
        <div>
            <p>
                Cum saepe multa, tum memini domi in hemicyclio sedentem, ut solebat, cum et ego essem una et pauci
                admodum
                familiares, in eum sermonem illum incidere qui tum forte multis erat in ore. Meministi enim profecto.
            </p>
            <a href="#">Alles lesen</a>
        </div>
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