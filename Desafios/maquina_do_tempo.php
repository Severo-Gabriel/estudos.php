        <?php 
        $idade = $_REQUEST["idade"];
        $anoatual = $_REQUEST ["ano_atual"];
        $anocont = $_REQUEST ["ano_cont"];
        $idade_futura = $idade + ($anocont - $anoatual);

        echo "<h1>Resultado do processamento:</h1>
        Sua idade em $anocont será $idade_futura anos."
        ?>
        <P><a href="Javascript:history.go(-1)">Voltar</a></P>
