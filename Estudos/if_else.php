   <?php 
        $nota1 = $_REQUEST["nota1"];
        $nota2 = $_REQUEST["nota2"];
        $nota3 = $_REQUEST["nota3"];
        $nota4 = $_REQUEST["nota4"];
        $soma = $nota1 + $nota2 + $nota3 + $nota4;
        $media = $soma / 4;

        echo "<div class='media'>Média das notas: <strong>" . number_format($media, 1, ',', '.') . "</strong></div>";

        if ($media >= 6) {
            echo "<p class='resultado aprovado'>Parabéns, você passou de ano! </p>";
        } else { 
            echo "<p class='resultado reprovado'>Infelizmente, você foi reprovado.</p>";
        }
        ?>
