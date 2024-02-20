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
            <h3 class='p-1 rounded my-3'>Adicionar Pessoa</h3>
            <div class='bg-light row justify-content-center align-items-center p-3 rounded'>
                <form action="" method="post">
                    <fieldset>
                        <label for="">Nome</label>
                        <input class="form-control my-3" type="text">
                        <label for="">Cpf</label>
                        <input class="form-control my-3" type="number">
                        <input type="submit" value="edit">
                    </fieldset>
                </form>
            </div>
            <?php require_once(realpath(dirname(__FILE__) . '/../../../') . '/includes/scripts.php')?>
        </div>
    </div>
</div>
<?php require_once(realpath(dirname(__FILE__) . '/../../../') . '/includes/scripts.php')?>
</body>
</html>
