<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="src/views/home.css">
  <title>Home View</title>
</head>

<body>
  <h1>My Todo-List</h1>

  <div class="addtodo">
    <form action="" method="post">
      <div class="insert_todo">
        <input type="text" name="name" id="name" placeholder="Todo Title" required>
      </div>
      <div class="insert_descr">
        <input type="text" name="descr" id="descr" placeholder="What todo?" required>
      </div>

      <button class="button" name="create">
        Add Todo
      </button>
    </form>
  </div>

  <div class="card-container">
    <?php
    foreach ($cards as $card) {
      echo $card;
    }
    ?>
  </div>

</body>

</html>