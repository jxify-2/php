<?php

$FN=$_POST['FN'];
$SN=$_POST['SN'];
$TN=$_POST['TN'];

echo"<br> First number is:".$FN;
echo"<br> Second number is:".$SN;
echo"<br> Third number is:".$TN;

if($FN>$SN && $SN>$TN)
{ echo"<br>The biggest number is :".$FN;

}

else if($SN>$TN)
{
    echo"<br>The biggest number is:".$SN;
}
else
{
    echo"<br>The biggest number is:".$TN;
}


?>