<?php
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
        <div class="container">
            <h3 class='p-1 rounded my-3'>Adicionar Telefone</h3>
            <div class='bg-light row justify-content-center align-items-center p-3 rounded'>
                <form action="" method="post">
                    <fieldset>
                        <div class="form-group col-md-4">
                        <label for="inputState">Pessoa</label>
                        <select id="inputState" class="form-control">
                            <option selected></option>
                            <option>Pessoa1</option>
                            <option>Pessoa2</option>
                            <option>Pessoa3</option>
                        </select>
                        </div>
                        <label for="">DDI</label>
                        <input class="form-control my-3" type="number">
                        <label for="">DDD</label>
                        <input class="form-control my-3" type="number">
                        <label for="">Numero</label>
                        <input class="form-control my-3" type="number">
                        <div class="d-flex gap-1 my-3">
                        <label for="">Ativo</label>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1"></label>
                        </div>
                        </div>
                        <input type="submit" value="Adicionar" class="btn bg-success my-3">
                    </fieldset>
                </form>
            </div>
            <div class="side-nav">
                <a href="index.php" class='side-nav-item btn btn-default bg-info my-5'>Voltar</a>
            </div>
        </div>
        <?php require_once(realpath(dirname(__FILE__) . '/../../../') . '/includes/scripts.php')?>
    </div>
</div>
<?php require_once(realpath(dirname(__FILE__) . '/../../../') . '/includes/scripts.php')?>
</body>
</html>
