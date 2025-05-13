<?php
$cep = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cep'])) {
    $cep = $_POST['cep'];
    $url = "https://viacep.com.br/ws/" . $cep . "/json";
    $response = file_get_contents($url);
    $dados = json_decode($response, true);

    if (isset($dados['logradouro'])) {
        $logradouro = $dados["logradouro"];
        $bairro = $dados["bairro"];
        $localidade = $dados["localidade"];
        $UF = $dados["uf"];
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de CEP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Consulta de CEP</h1>

        <form id="cep-form" method="POST">
            <label for="cep">Digite o CEP:</label>
            <input type="text" id="cep" name="cep" placeholder="Ex: 01001000" value="<?php echo htmlspecialchars($cep); ?>" required>
            <button type="submit">Buscar</button>
        </form>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cep'])): ?>
            <div id="resultado" class="resultado">
                <p><strong>Logradouro:</strong> <?php echo $logradouro; ?></p>
                <p><strong>Bairro:</strong> <?php echo $bairro; ?></p>
                <p><strong>Cidade:</strong> <?php echo $localidade; ?></p>
                <p><strong>Estado:</strong> <?php echo $UF; ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>