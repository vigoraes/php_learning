<!DOCTYPE html>

<html lang="pt_BR">
<head>
    <meta charset="UTF-8">

    <title> Titulo </title>

</head>

<body>
    <nav>
        <ul>
            <li><a href="views/aboutUs.view.php">About page</a></li>
            <li><a href="views/contact.view.php">Contact page</a></li>
        </ul>
    </nav>

    <h1>Minhas Tarefas</h1>
    <?php foreach ($tasks as $task): ?>
        <li>
            <?php if($task->completeta): ?>
                <strike> <?= $task->descrição ?> </strike>
            <?php else: ?>
                <?= $task->descrição ?>
            <?php endif ?>
        </li>
    <?php endforeach ?>

</body>
</html>