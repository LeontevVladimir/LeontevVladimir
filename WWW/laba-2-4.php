<title>Леонтьев Владимир Алексеевич</title>
<p> СР№1 Леонтьев В.А. Вариант 15 </p>
<?php
$n=rand(3,10);
 for ($i = 0; $i <= $n; $i++)
 {
 	$a[] = rand(-5,5);
 }
 echo "Исходный массив: <br>";
print_r($a);
  for ($i = 0; $i <= $n; $i++){
  	if ($a[$i] < -2) {
  		$ch = 1;
  	}
  }
 if ($ch == 1) {
 	for ($i = 0; $i <= $n; $i++)
 { 
 	if ($a[$i] < 0) {
 		$a[$i] = $a[$i]*$a[$i];
 	}
 }
 }
 echo "<br>";
  echo "Скорректированный массив: <br>";
  print_r($a);
?>
<p> СР№1 Леонтьев В.А. Вариант 4 </p>
<?php
?>