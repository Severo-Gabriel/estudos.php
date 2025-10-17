  <?php 
        $num = $_REQUEST["num"];
        $ant = $num - 1;
        $suc = $num + 1;

        echo "
        <p>O número escolhido foi <strong>$num</strong></p>
        <p>O antecessor é <strong>$ant</strong></p>
        <p>O sucessor é <strong>$suc</strong></p>
        ";
        ?>
        <p><a href="Javascript:history.go(-1)">Voltar para a página anterior</a></p>
