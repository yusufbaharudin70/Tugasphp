<?php
$var1=$_POST['yusuf1'];
$var2=$_POST['operator'];
$var3=$_POST['yusuf2'];
if($var2 == "+")
{
  echo "$var1 + $var3 = ",$var1+$var3;
}

else if($var2 == "-")
{
  echo "$var1 - $var3 = ",$var1-$var3;
}

else if($var2 == "%")
{
  echo "$var1 % $var3 = ",$var1%$var3;
}

else if($var2 == "*")
{
  echo "$var1 * $var3 = ",$var1*$var3;
}

else if($var2 == "/")
{
  echo "$var1 / $var3 = ",$var1/$var3;
}

?>
