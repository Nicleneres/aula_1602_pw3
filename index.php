<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão</title>
</head>
<body>
    <?php
        $nome = 'Nilcle';
        echo 'Nome: $nome';
        echo "Nome: $nome";
    ?>
    <?php
        $nome = 'Nilcle';
        $idade = 16;
        $salario = 10000.00;
        
        $user = [
            'nome'=> $nome, 
            'idade'=> $idade,
            'salario'=> $salario
        ];
        var_dump(
            $nome,
            $idade,
            $salario,
            $user
        );
    ?>
</body>
</html>