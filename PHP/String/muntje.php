<?php
function nice($a="dIt Is eEn RaRe zin  "){
  $a = strtolower($a);
$a =  ucwords($a);
$a =  ltrim($a," ");
$a =  rtrim($a," ");
echo $a;
}

nice();


 ?>
