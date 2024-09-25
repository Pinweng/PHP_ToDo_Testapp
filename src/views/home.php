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

  <div class='card'>
    <div class='cardHead'>
      <h3>Todo Title</h3>
      <small><b>Done</b></small>
    </div>
    <div class='cardBody'>
      <p>Lorem ipsum dolor sit amet,
        consectetur adipisicing elit.
        Consequuntur saepe repudiandae non?
        Nostrum perferendis magnam excepturi
        hic perspiciatis. Quo, mollitia?</p>
    </div>
    <div class='cardFooter'>
      
      
      <div class='button-grp'>
      <button>Undone</button>
      <button class='btn-done'>Done</button>
      
      </div>
      
    </div>
  </div>
</body>

</html>