<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="./public/css/style1.css">
</head>
<body>

<h1>API : <?=$api?></h1>
<p><a href=<?=$api.'/users'?>>Consumir api?</a></p>
<p><a href='./sign_up'>Criar novo usuário?</a></p>

<ul>
    <?php foreach ($users['users'] as $key => $value): ?>
        <li><?= $value['name']?></li>
        <li><a href=<?=$api.'/apagar_conta?id='.$value['id'].'&redirect=http://localhost/php_projects/front-end/users'?>>Apagar conta</a></li>
        <img src=<?=$api.'/assets/img/users/'.$value['photo']?> alt="<?=$value['photo']?>">
    <?php endforeach;?>
</ul>
