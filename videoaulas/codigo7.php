<?php
$aluno = $_POST['nome'];
$p1 = $_POST['p1'];
$p2 = $_POST['ps2'];
$f = $_POST['falta'];
function calcularmedia($prova1,$prova2){
    return ($prova1+$prova2)/2;
    }
    $resultado = calcularmedia($p1,$p2);
    if ($resultado>= 7.0 && $resultado<=10 && $f<=32){
        echo 'Aluno aprovado com nota '. $resultado;
    }
    elseif ($resultado<7.0 && $resultado>= 0.1 && $f<=32) {
        echo 'Aluno em recuperação com nota '. $resultado;
        }
        elseif ($resultado == 0 || $f>32) {
            echo 'aluno reprovado';
        }
        else{ echo 'Preencha novamente o formulário';
        }
        
        ?>
        
        
