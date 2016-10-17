<?php

class Meal
{
  private $table;
  private $items = array();

  function __construct($name)
  {
    $this->table = $name;
  }

  function getTableName()
  {
    return $this->table;
  }

  function getItems()
  {
    return $this->$items;
  }



}



?>
