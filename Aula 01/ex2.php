<?php
  $dadosFuncionarios = array(
    array('nome'=> 'João', 'idade'=> 23, 'cidade'=> 'Nova Friburgo'),
    array('nome'=> 'José', 'idade'=> 25, 'cidade'=> 'Nova Friburgo'),
    array('nome'=> 'Maria', 'idade'=> 22, 'cidade'=> 'Bom Jardim'),
  )
?>
<html>
    <head>
    </head>
    <body>
    <?php
/*$soma = function(int $a,int $b):int {
    return $a+$b;
};*/
$montaTabela = function ($dados): string {
    $retorno = "<table><tr><th>Nome</th><th>Idade</th><th>Cidade</th></tr>";
    for ($i = 0; $i < count($dados); $i++){
        $retorno .= "<tr><td>".$dados[$i]['nome']. "</td>".
                    "<td>".$dados[$i]['idade']."</td>".
                    "<td>".$dados[$i]['cidade']."</td></tr>";
    }
    $retorno .= "</table>";
    return $retorno;
};
echo $montaTabela($dadosFuncionarios);
?>
    </body>
</html>
