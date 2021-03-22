

<?php require 'partials/head.php'; ?>        
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
<?php require 'partials/footer.php'; ?>