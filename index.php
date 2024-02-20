<?php
require_once(realpath(dirname(__FILE__) . '/') .'/includes/funcoes.php');
require_once(realpath(dirname(__FILE__) . '/') .'/src/Models/DAO/PessoasDAO.php');

// $pessoasDao = new PessoasDAO();
// $pessoasDao = $pessoasDao->buscarListaDePessoas();

$listaCompleta = new PessoasDAO();
$listaCompleta = $listaCompleta->buscarListaDePessoasETelefones();

//pr($listaCompleta);

// foreach ($listaCompleta as $item) {
   
//     pr("Numero:  {$numeroCompleto}\n");
//     pr("status:  {$item->telefone->ativo}\n");
// }


// pr($pessoasDao->buscarListaDeTelefones());
// die;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once(realpath(dirname(__FILE__) . '/') . '/includes/styles.php')?>
</head>

<body>
    <?php require_once(realpath(dirname(__FILE__) . '/') . '/includes/navbar.php')?>
<div class='container'>
<h3 class='mt-3'>Registros</h3>
    <div class="table-responsive table-card rounded">
        <form action="src/Models/DAO/PessoasDAO.php" method="get">
            <table class="table table-nowrap table align-middle table-light mx-auto m-3">
                <thead class="table-dark">
                    <tr>
                        <th>
                            <div class='d-flex justify-content-center '>
                            <label> ID</label>
                            <a ><i class="bi bi-chevron-expand"></i></a>
                            </div>
                            <input class="form-control" type="number" name="id" >
                        </th>
                        <th>
                        <div class='d-flex justify-content-center '>
                            <label> CPF</label>
                            <a ><i class="bi bi-chevron-expand"></i></a>
                            </div>
                            <input class="form-control" type="number" name="cpf">

                        </th>
                        <th>
                        <div class='d-flex justify-content-center '>
                            <label> Nome</label>
                            <a ><i class="bi bi-chevron-expand"></i></a>
                            </div>
                            <input class="form-control" type="string" name="nome_completo">
                        </th>
                        <th>
                        <div class='d-flex justify-content-center '>
                            <label> Numero</label>
                            <a ><i class="bi bi-chevron-expand"></i></a>
                            </div>
                            <input class="form-control" type="number" name="numero">

                        </th>
                        <th>
                        <div class='d-flex justify-content-center '>
                            <label> Status</label>
                            </div>
                            <select class="form-select" name="ativo" aria-label="Default select example">
                                <option value="">Todos</option>
                                <option value="1">Ativo</option>
                                <option value="0">Inativo</option>
                            </select>

                        </th>
                        <th class="actions">
                            <label>
                                Actions
                            </label>
                            <input class="btn btn-secondary" type="submit" value="Buscar">
                    </tr>

                </thead>
                <tbody>
                    <?php $array = [];//pr($listaCompleta); ?>
                    <?php foreach($listaCompleta as $pessoa):?>
                        <?php $array[] = $pessoa->telefone->pessoa_id; ?>
                        
                        <tr>
                            <td class='align-middle'>
                            <?= $pessoa->id ?>
                            </td>
                            <td class='align-middle'>
                            <?= $pessoa->cpf ?>
                            </td>
                            <td class='align-middle'>
                            <?= $pessoa->nome ?>
                            </td>
                            <?php $numeroCompleto ="+".$pessoa->telefone->ddi." (".$pessoa->telefone->ddd.") ".$pessoa->telefone->numero; ?>
                            <td class='align-middle'>
                            <?= $numeroCompleto ?>
                            </td>
                            <td class='align-middle'>
                            <?= $pessoa->telefone->ativo ? '<p class="badge bg-success">Ativo</p>':'<p class="badge bg-danger">Inativo</p>' ?>
                            </td>
                            <td class='align-middle'>
                            <a class="btn btn-success " href="/src/View/Pessoas/index.php">View</a>
                            </td>
                        </tr>
                    <?php endforeach?>
                    <?php pr(array_count_values($array));
                    ?>
                    

                    
                </tbody>
            </table>
        </form>
    </div>
    <?php require_once(realpath(dirname(__FILE__) . '/') . '/includes/pagination.php')?>

</div>
<?php require_once(realpath(dirname(__FILE__) . '/') . '/includes/scripts.php')?>
</body>

</html>