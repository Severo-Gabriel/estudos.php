            <?php 
            // Núemro inserido pelo usuário:
            $result = $_REQUEST ["segundos"];
            $total = $result;
            //semanas:
            $semana = (int)($total / 604_800);
            $resto = $total % 604_800;
            //dias: 
            $dias = (int)($total / 86_400);
            $resto = $total % 86_400;
            //horas: 
            $horas = (int)($total / 3_600);
            $resto = $total % 3_600;
            
            echo "<p>Com base no valor inserido de $result segundos.</p> O resultado é $semana semanas, $dias dias e $horas horas.";
            
