<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    header{
      background: brown;
      text-align: center;
      padding:2em;
      
    }
    ul{
      list-style: none;
    }
  </style>
</head>
<body>
<header>


  <ul>
    <?php foreach($tasks as $task):?>
      <li>
      <?php if($task->completed):?>
        <del><?=  $task->description;  ?></del>

      <?php else:?>
        <?=  $task->description;  ?>
      <?php endif?>
      </li>
    <?php endforeach?>
</ul>
</header>

  
  
</body>
</html>