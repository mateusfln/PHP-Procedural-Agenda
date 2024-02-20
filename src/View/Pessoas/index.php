<?php
require_once(realpath(dirname(__FILE__) . '../../../../') .'/includes\funcoes.php');
require_once(realpath(dirname(__FILE__) . '../../../../') .'/src/Models/DAO/PessoasDAO.php');

// $pessoasDao = new PessoasDAO();
// $pessoasDao = $pessoasDao->buscarListaDePessoas();

$ListaPessoas = new PessoasDAO();
$ListaPessoas = $ListaPessoas->buscarListaDePessoas();

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
    <?php require_once(realpath(dirname(__FILE__) . '/../../../') . '/includes/styles.php')?>
</head>

<body>
    <?php require_once(realpath(dirname(__FILE__) . '/../../../') . '/includes/navbar.php')?>
<div class='container'>
<h3 class='mt-3'>Pessoas</h3>
    <div class="table-responsive table-card rounded">
        <form action="src/Models/DAO/PessoasDAO.php" href="/" method="get">
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
                            <input class="form-control" type="number" name="id" >
                        </th>
                        <th>
                            <div class='d-flex justify-content-center '>
                            <label> Nome</label>
                            <a ><i class="bi bi-chevron-expand"></i></a>
                            </div>
                            <input class="form-control" type="number" name="id" >
                        </th>
                        <th class="actions">
                            <div class="d-flex flex-column align-items- ">
                            <label>
                                Actions
                            </label>
                            <input class="btn btn-secondary" type="submit" value="Buscar">
                            </div>
                    </tr>

                </thead>
                <tbody>
                    <?php $array = [];//pr($listaCompleta); ?>
                    <?php foreach($ListaPessoas as $pessoa):?>
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