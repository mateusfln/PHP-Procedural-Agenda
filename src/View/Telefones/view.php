<?php
require_once(realpath(dirname(__FILE__) . '../../../../') .'/includes\funcoes.php');
require_once(realpath(dirname(__FILE__) . '../../../../') .'/src/Models/DAO/PessoasDAO.php');


/**
 * @var src\Models\Entity\Pessoas $pessoa
 */
// $pessoasDao = new PessoasDAO();
// $pessoasDao = $pessoasDao->buscarListaDePessoas();

$ListaPessoas = new PessoasDAO();
$ListaPessoas = $ListaPessoas->buscarListaDePessoasETelefones();
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

<div class="row">
    <div class="column column-80">
        <div class="pessoas view content">
            <h3><?= $pessoa->nome ?></h3>
            <table class="table table-light mx-auto m-3">
            <thead class="table-dark">
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>ID</th>
                        <th class="actions">Actions</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?= $pessoa->nome ?></td>
                    <td><?= $pessoa->cpf ?></td>
                    <td><?= $pessoa->id ?></td>
                    <td class="actions d-flex justify-content-evenly">
                    </td>
                </tr>
                </tbody>
            
            </table>
            <!-- Telefones Relacionados -->
            <div class="related">
                <h3>Telefones Relacionados</h3>
                <?php if (!empty($pessoa->telefone)) : ?>
                <div class="table-responsive">
                    <table class="table table-light mx-auto m-3">
                        
                        <thead class="table-dark">
                            <tr>
                                <th>Id</th>
                                <th>Pessoa_id</th>
                                <th>DDD</th>
                                <th>DDI</th>
                                <th>Numero</th>
                                <th>Status</th>
                                <th class="actions">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($pessoa->telefone as $telefone) : ?>
                        <tr>
                            <td><?= $telefone->id ?></td>
                            <td><?= $telefone->pessoa_id ?></td>
                            <td><?= $telefone->ddd ?></td>
                            <td><?= $telefone->ddi ?></td>
                            <td><?= $telefone->numero ?></td>
                            <td>
                            <?php if ($telefone->ativo == true || $telefone->ativo == 1): ?>
                            <p class="badge bg-success">Ativo</p>
                            <?php else: ?>
                            <p class="badge bg-danger">Inativo</p>
                                
                            <?php endif; ?>
                            </td>
                                
                            <td class="actions d-flex">
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?php else: ?>
                <h5 class='text-decoration-underline fw-lighter'>Essa Pessoa não possui telefones cadastrados.</h5>
                <?php endif; ?>
            </div>
        </div>
        <?php require_once(realpath(dirname(__FILE__) . '/../../../') . '/includes/scripts.php')?>

    </div>
</div>
<?php require_once(realpath(dirname(__FILE__) . '/../../../') . '/includes/scripts.php')?>

</body>
</html>
