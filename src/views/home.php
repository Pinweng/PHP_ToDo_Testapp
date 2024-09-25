<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="src/views/home.css">
  <title>Home View</title>
</head>

<body>
  <h1>
    <?php
    echo $message
    ?>
  </h1>
  
<div class="addtodo">
    <form action="" method="post">
      <input type="text" name="name" id="name" placeholder="Todo Title" required>
      <input type="text" name="descr" id="descr" placeholder="What todo?" required>
      <button class="button">
        Add Todo
      </button>
    </form>
</div>

  <div class="card-container">
    <?php 
    foreach ($cards as $card){
      echo $card;
    }
    ?>
  </div>  

</body>

</html>