<?php
  $i = 5;
  
  function foo(&$j)
  {
     echo($j>2)?"大于2"："小于2";
  }
?>  