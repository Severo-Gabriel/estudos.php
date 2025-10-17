<?php 
        // Cotação do dolar valor = R$ 5,44. Data 17/10.
        $real = $_REQUEST["valreal"];
        $cotacao = 5.44;
        $dolar = $real / $cotacao;

        //echo "Valor escolhido: <strong>$real <br>";
        //echo "<br>Valor da cotação $cotacao";
        //echo "<br><br>O resultado da conversão é US$ $dolar!";

        echo "Valor escolhido: <strong>R$ $real</strong><br>
        <br>Valor da cotação: R$ $cotacao
        <br><br>O resultado da conversão é <strong>US$ $dolar</strong>!";
        ?>
