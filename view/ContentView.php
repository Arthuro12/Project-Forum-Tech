<?php $title = "Publikation"; ?>

<?php ob_start() ?>

<body class="container">
    <h2 class="bg-success mt-3">
        Alles was Sie über Bildformate wissen sollen
    </h2><br>
    <div class="mt-4">
        <p>
            Cum saepe multa, tum memini domi in hemicyclio sedentem, ut solebat, cum et ego essem una et pauci admodum
            familiares, in eum sermonem illum incidere qui tum forte multis erat in ore. Meministi enim profecto,
            Attice, et eo magis, quod P. Sulpicio utebare multum, cum is tribunus plebis capitali odio a Q. Pompeio, qui
            tum erat consul, dissideret, quocum coniunctissime et amantissime vixerat, quanta esset hominum vel
            admiratio vel querella.
            Cum saepe multa, tum memini domi in hemicyclio sedentem, ut solebat, cum et ego essem una et pauci admodum
            familiares, in eum sermonem illum incidere qui tum forte multis erat in ore. Meministi enim profecto,
            Attice, et eo magis, quod P. Sulpicio utebare multum, cum is tribunus plebis capitali odio a Q. Pompeio, qui
            tum erat consul, dissideret, quocum coniunctissime et amantissime vixerat, quanta esset hominum vel
            admiratio vel querella.
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