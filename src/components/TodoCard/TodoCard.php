<?php

namespace App\components\TodoCard;


enum TaskStatus: int{
  case Done = 1;
  case Planned = 0;
  case Pending = -1;
  public function getLabel():string{
    return match ($this){
      self::Done => "Done",
      self::Planned => "Planned",
      self::Pending => "Pending"
    };
  }
}



class TodoCard{

  // title, status, desc, id

  public function __construct(
    private string $title, 
    private string $status, 
    private string $desc, 
    private int $id){
      $statusEnum = TaskStatus::from($this->status);
      $this->status = $statusEnum->getLabel();


    }


  public function createCard(){
    $card = <<<CARD
      <div class='card'>
        <div class='cardHead'>
          <h3>$this->title</h3>
          <small><b>$this->status</b></small>
        </div>
        <div class='cardBody'>
          <p> $this->desc</p>
        </div>
        <div class='cardFooter'>
          <div class='button-grp'>
            <button>Undone</button>
            <button class='btn-done'>Done</button>
          </div>
        </div>
      </div>
    CARD;
    return $card;
  }
}