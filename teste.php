<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
    print_r();
    $cpf = $_GET['cpf']; 
    $nome = $_GET['nome_completo']; 
    $numero = $_GET['numero']; 
    $id = $_GET['id'];

    $sql = "SELECT p.id, cpf, nome_completo, numero
            FROM pessoas p
            INNER JOIN telefones t ON p.id = t.pessoa_id
            WHERE (p.id LIKE '%$id%' OR cpf LIKE '%$cpf%')
            AND nome_completo LIKE '%$nome%'
            AND numero LIKE '%$numero%'";
    ?>
</body>
</html>