<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <div class="min_container">
    <div class="wrapper">
        <div><?//$_SESSION['register_msg'];$_SESSION['register_msg'] = ''?></div>
    </div>
    <div class="wrapper">
    <div class="msg">
    <div class="success_msg">Criando conta</div>
    </div>
    <form action=<?=$api."/sign_up"?> class="control" method="Post" enctype="multipart/form-data">
    <input type="hidden" name="redirect" value="http://localhost/php_projects/front-end/users">
        <div class="form-control">
            <div class="input-box">
                <input type="file" name="photo" accept="image/*" required>
            </div>
            <div class="input-box">
                <input type="text" name="name" placeholder="Nome" required>
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-box">
                <input type="tel" name="phone" placeholder="Telefone" required>
            </div>
            <div class="input-box">
                <input type="text" name="birth" placeholder="Data de nascimento" required>
            </div>
            <div class="input-box">
                <select name="sex" required>
                    <option value="">Selecione o sexo</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Senha" required>
            </div>
            <div class="input-box">
                <input type="submit" name="sign_up" value="cadastrar" class="btn" id="sign_up">
            </div>
        </div>
    </form>
</div>
</div>

</body>
</html>
