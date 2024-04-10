<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercício 01</title>
</head>

<body>
    <h1>Exercicio 01</h1>
    <?php

    //exercicio a
    echo '<p>Exercício {a}</p>';
    $curso = array("Ads", "cd", "ads", "cd", "cd", "ads");

    // Iniciar a tabela
    echo "<table border='1'><tr>";

    // Loop para adicionar cada elemento como uma coluna na tabela
    foreach ($curso as $elemento) {
        echo "<td>$elemento</td>";
    }

    // Fechar a linha e a tabela
    echo "</tr></table>";

    //exercício b
    echo '<p>Exercício {b}</p>';
    $dados = ["Nome" => "Pedro", "Idade" => 30, "Curso" => "ADS", "Média" => 7];
    echo '<table border = "1">';
    echo '<tr><th>Nome</th><th>Idade</th><th>Curso</th><th>Média</th></tr>';
    echo "<tr>";
    echo "<td> " . $dados["Nome"] . "</td>";
    echo "<td> " . $dados["Idade"] . "</td>";
    echo "<td> " . $dados["Curso"] . "</td>";
    echo "<td> " . $dados["Média"] . "</td>";
    echo "</tr>";
    echo '</table>';
    ?>

    <h1>Exercicio 02</h1>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Curso</th>
            <th>Média</th>
            <th>Situação</th>
        </tr>
        <?php
        //exercício a
        echo '<p>Exercício {a,b}</p>';
        $alunos = array(
            array("nome" => "Maria", "curso" => "ADS", "media" => 7.0),
            array("nome" => "João", "curso" => "CD", "media" => 5),
            array("nome" => "José", "curso" => "CD", "media" => 8.0),
            array("nome" => "Pedro", "curso" => "ADS", "media" => 1.5),
            array("nome" => "Paulo", "curso" => "ADS", "media" => 6.0)
        );

        // Inicializar contadores de situação
        $situacao = array("ADS" => array("Aprovado" => 0, "Exame Final" => 0, "Reprovado" => 0),
                          "CD" => array("Aprovado" => 0, "Exame Final" => 0, "Reprovado" => 0));

        //exercício b  
        foreach ($alunos as $linha) {
            if ($linha["media"] < 2) {
                $linha["situacao"] = "Reprovado";
                $situacao[$linha["curso"]]["Reprovado"]++;
            } elseif ($linha["media"] < 6) {
                $linha["situacao"] = "Exame Final";
                $situacao[$linha["curso"]]["Exame Final"]++;
            } else {
                $linha["situacao"] = "Aprovado";
                $situacao[$linha["curso"]]["Aprovado"]++;
            }
            echo "<tr>";
            echo "<td>".$linha["nome"]."</td>";
            echo "<td>".$linha["curso"]."</td>";
            echo "<td>".$linha["media"]."</td>";
            echo "<td>".$linha["situacao"]."</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <table border="1">
        <tr>
            <th>Curso</th>
            <th>Aprovado</th>
            <th>Exame Final</th>
            <th>Reprovado</th>
        </tr>
        <?php
        //exercício c
        foreach ($situacao as $curso => $contadores) {
            echo "<tr>";
            echo "<td>".$curso."</td>";
            echo "<td>".$contadores["Aprovado"]."</td>";
            echo "<td>".$contadores["Exame Final"]."</td>";
            echo "<td>".$contadores["Reprovado"]."</td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>