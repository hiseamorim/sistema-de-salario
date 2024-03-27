<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container">
        <h1>Resultado</h1>
        <?php
            // Recebe os dados do formulário
            $nome = $_POST["nome"];
            $meta_semanal = $_POST["meta_semanal"];
            $meta_mensal = $_POST["meta_mensal"];
 
            // Calcula o salário
            $pagamento_semanal = $metasemanal * 200;
            $pagamento_mensal = ($metamensal >= $metasemanal * 4) ? 1500 : 0;
            $pagamento_final = $pagamento_mensal + $pagamento_semanal;
 
            // Exibe o resultado
            echo "<p>O salário é de $nome  R$" . number_format($pagamento_final, 2, ",", ".") . "</p>";
        ?>
    </div>
</body>
</html>