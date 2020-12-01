
<?php require 'partials/head.view.php';?>

<h1>All Users</h1>
<ul>
<?php foreach ($users as $user) :?>

  <li>
  
  <form  method="POST" action="/users/delete">
  <?= $user->name?>
    <div class="container">  
    <input name="id" type="hidden" value="<?=$user->id?>">
        <button type="submit" class="red">Delete</button>      
    </div>
  </form>
  
  
  </li>

<?php endforeach?>

</ul>
<h1>Submit Your Name</h1>

<form method="POST" action="/users">
  <input name="name" type="text"/>
  <button type="submit">Submit</button>


</form>

<?php require 'partials/footer.view.php';?>
