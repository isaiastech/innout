<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/comum.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>In 'n Out</title>
</head>
<body>
    <form class="form-login" action="#" method="post">
        <div class=" login-card card">
            <div class="card-header">
                <i class="icofont-travelling mr-2"></i>
                <span class="font-weight-light">In</span>
                <span class="font-weight-bold mx-2">N'</span>
                <span class="font-weight-light">Out</span>
                <i class="icofont-runner-alt-1 ml-2"></i>
            </div>
            <div class="card-body">
                <?php include(TEMPLATE_PATH . '/messages.php');?>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email"
                     class="form-control<?= $erros['email']? 'is-invalid' : ''?>"
                    value="<?= $email?>"
                    placeholder="Informe o e-mail" autofocus>
                </div>
                <div class="invalid-feedback">
                <?= $erros['email'] ?>
                </div>
                <div class="form-group <?= $erros['password'] ? 'is-invalid' : '' ?>">
                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password" class="form-control"
                    placeholder="Informe a Senha" autofocus>
                </div>
                <div class="invalid-feedback">
                <?= $erros['password'] ?>
                </div>

            </div>
            
        </div>
        <div class="card-footer">
            <button class="btn btn-lg btn-primary">Entrar</button>
        </div>
    </form>
</body>
</html>