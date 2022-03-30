<?php 
include_once ('cep.php')
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucar endereço</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">
        <p>Digite o CEP abaixo:</p>
        <input type="text" placeholder="Digite um cep..." name="cep" value= "<?php echo $endereco->cep ?? '' ?>">
        <button type="submit">Pesquisar</button>
        <input type="text" placeholder="rua" name="rua" value= "<?php echo $endereco->logradouro ?? '' ?>" >
        <input type="text" placeholder="bairro" name="bairro" value= "<?php echo $endereco->bairro ?? '' ?>">
        <input type="text" placeholder="cidade" name="cidade" value= "<?php echo $endereco->localidade ?? '' ?>">
        <input type="text" placeholder="estado" name="estado" value= "<?php echo $endereco->uf ?? '' ?>"> 
    </form>
</body>
</html> 