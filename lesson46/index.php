<?php

abstract class Pages {
  //...
  abstract public function getAll();
}

class AllSearch extends Pages {
  public function getAll() {
    echo 'Text';
  }
}

$obj = new AllSearch();
$obj->getAll();

// echo $obj instanceof AllSearch;

var_dump($obj instanceof AllSearch);