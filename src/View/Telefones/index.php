<?php
require_once(realpath(dirname(__FILE__) . '../../../../') .'/includes\funcoes.php');
require_once(realpath(dirname(__FILE__) . '../../../../') .'/src/Models/DAO/PessoasDAO.php');

// $pessoasDao = new PessoasDAO();
// $pessoasDao = $pessoasDao->buscarListaDePessoas();

$ListaTelefones = new PessoasDAO();
$ListaTelefones = $ListaTelefones->buscarListaDeTelefones();

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
    <title>Telefones::table</title>
    <?php require_once(realpath(dirname(__FILE__) . '/../../../') . '/includes/styles.php')?>
</head>

<body>
    <?php require_once(realpath(dirname(__FILE__) . '/../../../') . '/includes/navbar.php')?>
<div class='container'>
    <h3 class='mt-3'>Telefones</h3>
    <div class="table-responsive table-card rounded">
        <form action="src/Models/DAO/PessoasDAO.php" href="/" method="get">
            <table class="table table-nowrap table align-middle table-light mx-auto m-3">
                <thead class="table-dark">
                    <tr>
                        <th>
                            <label> Pessoa_id</label>
                            <input class="form-control" type="number" name="pessoa_id" >
                        </th>
                        <th>
                            <label> ID</label>
                            <input class="form-control" type="number" name="id" >
                        </th>
                        <th>
                            <label >DDI</label>
                            <input class="form-control" type="number" name="ddi">

                        </th>
                        <th>
                            <label >DDD</label>
                            <input class="form-control" type="string" name="ddd">
                        </th>
                        <th>
                            <label >Numero</label>
                            <input class="form-control" type="string" name="numero">
                        </th>
                        <th>
                            <label >Status</label>
                            <select class="form-select" aria-label="Default select example">
                                <option value="0">Todos</option>
                                <option value="1">Ativo</option>
                                <option value="2">Inativo</option>
                            </select>

                        </th>
                            <th>
                            <label>
                                Actions
                            </label>
                            <input class="btn btn-secondary" type="submit" value="Buscar">
                            </th>
                    </tr>

                </thead>
                <tbody>
                    <?php $array = [];//pr($listaCompleta); ?>
                    <?php foreach($ListaTelefones as $telefone):?>
                        <tr>
                            <td class='align-middle'>
                            <?= $telefone->pessoa_id? "<a href='/src/View/Pessoas/index.php'>$telefone->pessoa_id</a>":"" ?>
                            </td>
                            <td class='align-middle'>
                            <?= $telefone->id ?>
                            </td>
                            <td class='align-middle'>
                            <?= $telefone->ddi ?>
                            </td>
                            <td class='align-middle'>
                            <?= $telefone->ddd ?>
                            </td>
                            <td class='align-middle'>
                            <?= $telefone->numero ?>
                            </td>
                            <td class='align-middle'>
                            <?= $telefone->ativo ? '<p class="badge bg-success">Ativo</p>':'<p class="badge bg-danger">Inativo</p>' ?>
                            </td>
                            <td class='align-middle'>
                            <a class="btn btn-success " href="view.php">View</a>
                            </td>
                        </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </form>
    </div>
    <div class="d-flex justify-content-lg-start gap-lg-3">
        <a class="btn btn-info " href="/">Voltar</a>
        <a class="btn btn-success " href="add.php">Adicionar</a>
    </div>
    <?php require_once(realpath(dirname(__FILE__) . '/../../../') . '/includes/pagination.php')?>

</div>
<?php require_once(realpath(dirname(__FILE__) . '/../../../') . '/includes/scripts.php')?>
</body>
</html>