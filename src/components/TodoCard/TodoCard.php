<?php

namespace App\components\TodoCard;

class TodoCard{
  public function createCard(){
    return " <div class='card'>
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
  </div>";
  }
}