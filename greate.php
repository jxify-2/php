<?php
$a=100;
$b=200;
$c=99;
if($a>$b&&$b>$c)
{
    echo"<br>The greatest number is:".$a;
}
elseif($b>$c)
{
    echo"The greatest number is:".$b;
}
else{
  echo"The greatest number is:".$c;
}
?>