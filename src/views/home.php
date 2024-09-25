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

  <form action="" method="post">
    <input type="text" name="title" id="title" placeholder="Todo Title">
    <input type="text" name="descr" id="descr" placeholder="What todo?">
<button class="bookmarkBtn">
  <span class="IconContainer">
    <svg viewBox="0 0 384 512" height="0.9em" class="icon">
      <path
        d="M0 48V487.7C0 501.1 10.9 512 24.3 512c5 0 9.9-1.5 14-4.4L192 400 345.7 507.6c4.1 2.9 9 4.4 14 4.4c13.4 0 24.3-10.9 24.3-24.3V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48z"
      ></path>
    </svg>
  </span>
  <p class="text">Save</p>
</button>

  </form>

  <div class="card-container">
    <?php 
    foreach ($cards as $card){
      echo $card;
    }
    ?>
  </div>  

</body>

</html>