<!doctype html>
<html lang="en">
<head>
    <?php   require_once __DIR__ . '/autoload.php';?>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form>

<div>

    <?php
    $objLead = new TeamLead();
    $objJun = new Junior();
    $objList = new Listener();
    ?>
    <p> Настроение было: <?php  print_r($objLead->getMoodLead()); ?></p>
    <p> Состояние джуна: <?php  print_r($objJun->getWorkJun()); ?></p>
    <p> Настроение стало: <?php  print_r($objLead->setStateLead()); ?></p>
    <p> Что сказал Лид: <?php  print_r($objLead->getEmotionsLead()); ?></p>
    <p> Менеджер смотрит: <?php  print_r($objList->setStateCounting()); ?></p>

</div>
</form>


</body>
</html>
