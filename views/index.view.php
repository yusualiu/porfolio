
<?php require 'partials/head.view.php';?>

<header>

<h1>My Tasks</h1>
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

<?php require 'partials/footer.view.php';?>
