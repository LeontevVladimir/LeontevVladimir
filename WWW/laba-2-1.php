<title>Леонтьев Владимир Алексеевич</title>
</head>
<?php
echo "Массив treug <br>";
$treug=[];
 for ($i = 1; $i <= 10; $i++)
 {
 	$treug[$i]=$i*($i+1)/2;
 	echo $treug[$i]." ";
 }
 echo "<br>";
 echo "Массив kvd <br>";
 $kvd=[];
  for ($i = 1; $i <= 10; $i++)
 {
 	$kvd[$i]=$i*$i;
 	echo $kvd[$i]." ";
 }
 echo "<br>";
 echo "Массив rez <br>";
 $rez = array_merge($treug,$kvd);
 for ($i = 1; $i <= count($rez); $i++)
 {
 	echo $rez[$i]." "; 
 }
  echo "<br>";
  echo "Сортировка массива rez <br>";
sort($rez);
print_r($rez);
 echo "<br>";
  echo "Удаление 1 элемента массива rez <br>";
  unset($rez[0]);
  print_r($rez);
  echo "<br>";
  echo "Удаление повторяющихся элементов массива rez <br>";
  $rez1=[];
  $rez1=array_unique($rez);
  print_r($rez1);
?>
