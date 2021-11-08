<title>Леонтьев Владимир Алексеевич</title>
<?php
$x=rand(3,20);
 for ($i = 1; $i <= $x; $i++)
 {
 	$chicla[] = rand(10,99);
 }
 echo "Массив из $x элементов, заполненный случайными числами: <br>";
 print_r($chicla);
  echo "<br>";
  echo "Отсортированный массив с помощью функции sort() <br>";
 sort($chicla);
 print_r($chicla);
   echo "<br>";
  echo "Массив в обратном порядке <br>";
  $chicla1=array_reverse($chicla);
   print_r($chicla1);
   echo "<br>";
  echo "Удален последний элемент массива <br>";
  array_pop($chicla1);
  print_r($chicla1);
  echo "<br>";
  $k=count($chicla1);
  echo "Количество элементов массива: $k <br>";
  $s=array_sum($chicla1);
  echo "Сумма элементов массива: $s <br>";
  echo "Среднее арифметическое:";
  echo $s/$k;
  echo "<br>";
  if (in_array("50", $chicla1)) {
	echo "Есть число 50";
}
else {
	echo "Нет числа 50";
}
echo "<br>";
echo "Массив из уникальных значений: <br>";
   $rez = array_unique($chicla1);
   print_r($rez);
?>