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

$status = TaskStatus::from(-1);
echo $status->getLabel();


class TodoCard{

  public function __construct(private string $title, private string $status, private string $descr, private int $id){
    $statusEnum = TaskStatus::from($this->status);
    $this->status = $statusEnum->getLabel();
  }
  
    
  

  public function createCard(){

    $card = <<<CARD
      <div class='card'>
      <div class='align'>
        <span class='red'></span>
        <span class='yellow'></span>
        <span class='green'></span>
    </div>
    <div class='cardHead'>
      <h3>$this->title</h3>
      <small><b>$this->status</b></small>
    </div>
    <div class='cardBody'>
      <p>$this->descr</p>
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
