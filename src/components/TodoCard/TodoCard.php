<?php

namespace App\components\TodoCard;


enum TaskStatus: int
{
  case Done = 1;
  case Planned = 0;
  case Pending = -1;
  public function getLabel(): string
  {
    return match ($this) {
      self::Done => "Done",
      self::Planned => "Planned",
      self::Pending => "Pending"
    };
  }
}



class TodoCard
{

  // title, status, desc, id

  public function __construct(
    private string $name,
    private string $status,
    private string $descr,
    private int $id
  ) {
    $statusEnum = TaskStatus::from($this->status);
    $this->status = $statusEnum->getLabel();

    $this->name = htmlspecialchars($this->name);
    $this->descr = htmlspecialchars($this->descr);
    $this->status = htmlspecialchars($this->status);
    $this->id = htmlspecialchars($this->id);
  }


  public function createCard()
  {
    $card = <<<CARD
      <div class='card'>
        <div class='cardHead'>
          <h3>$this->name</h3>
          <small><b>$this->status</b></small>
        </div>
        <div class='cardBody'>
          <p> $this->descr</p>
        </div>
        <div class='cardFooter'>
          <div class='button-grp'>
            <form action = '' method = 'post' >
              <button type = 'submit' name = 'pending' value ='$this->id'>Pending</button>
            </form>
            <form action = '' method = 'post'>
            <button type = 'submit' name = 'done' class='btn-done' value ='$this->id'>Done</button>
            </form>
          </div>
        </div>
      </div>
    CARD;
    return $card;
  }
}
