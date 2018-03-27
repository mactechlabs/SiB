<?php
class InsertDataDemo {
 
require "dbconfig.php";

 private $pdo = null;

 public function insert($table,$data) {
    @$sql = "INSERT INTO ".$table_name."
     (`".implode('`,`', $fields)."`) 
     VALUES
     ('".implode("','", $data)."')";
    return $this->pdo->exec($sql);
}
}