<?php

  interface ICRUD {
    function create();
    function read();
    function readAll($from_record_num, $records_per_page);
    public function countAll();
    function readOne();
    function update();
    function delete();
  }

?>
