<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title>Леонтьев Владимир Алексеевич</title>
</head>
<body>
<p> Леонтьев Владимир Алексеевич Вариант 5
</p>
<?php
  $c = rand(-20,20);
  $d = rand(-20,20);
  $a = rand(-20,20);
 print ('c='.$c . '<br>');
 print ('d='.$d . '<br>');
 print ('a='.$a . '<br>');
 echo("Выражение: (4*c+d-1)/(c-a/2)") . '<br>';
 echo("Выражение: (4*$c+$d-1)/($c-$a/2)" . '<br>');
 $res= (4*$c+$d-1)/($c-$a/2);
 echo('Result = ' . $res . ' - ' . gettype($res));
?>
<p> Леонтьев Владимир Алексеевич Вариант 15
</p>
<?php
  $c = rand(-20,20);
  $d = rand(-20,20);
  $a = rand(-20,20);
 print ('c='.$c . '<br>');
 print ('d='.$d . '<br>');
 print ('a='.$a . '<br>');
 echo("Выражение: ((12/c)+73-d*d) / (a*a-2*a) " . '<br>');
 echo("Выражение: (((12/$c)+73-$d*$d)) / ($a*$a-2*$a)" . '<br>');
 $res=  (((12/$c)+73-$d*$d)) / ($a*$a-2*$a);
 echo('Result = ' . $res . ' - ' . gettype($res));
?>