<title>Леонтьев Владимир Алексеевич</title>
<p> Леонтьев В.А. Вариант 15 </p>
<?php
function first() {
	echo("Просуммировать элементы двумерного массива, сумма индексов которых равна заданной константе:");
}
function second() {
      for ($i=0;$i<5;$i++){
            for ($ik=0;$ik<5;$ik++){
                  $mas[$i][$ik]=rand(1,9);
            }
      }
      return $mas;
}
function third($u) {
      for ($i=0;$i<5;$i++){
            echo ('<br>');
            for ($ik=0;$ik<5;$ik++){
                  echo ($u[$i][$ik] . ' ');
            }
      }
}
function four($u) {
	$sum = 0;
      for ($i=0;$i<5;$i++){
            for ($ik=0;$ik<5;$ik++){
            	if (($i + $ik) == constanta) {
            		$sum = $sum + $u[$i][$ik];
            	}
            }
      }
      return $sum;
}
$a=second();
const constanta = 1;
first();
second();
echo ("<br>Массив:");
third($a);
echo ("<br>Сумма:");
$b=four($a);
echo ("<br>$b");
?>
<p> Леонтьев В.А. Вариант 4 </p>
<?php
function first2() {
	echo("<br>Дана матрица А(m,n). Найти вектор В(n), каждый элемент которого равен сумме элементов соответствующего столбца матрицы А. Исходный и скорректированный массивы вывести на экран");
}
function second2($u,$t) {
      for ($i=0;$i<=$u;$i++){
            for ($ik=0;$ik<=$t;$ik++){
                  $a[$i][$ik]=rand(1,9);
            }
      }
      return $a;
}
function third2($u) {
      for ($i=0;$i<=5;$i++){
            echo ('<br>');
            for ($ik=0;$ik<=5;$ik++){
                  echo ($u[$i][$ik] . ' ');
            }
      }
}
function four2($u,$t,$k) {
	$sum = 0;
	$B = [];
           for ($i=0;$i<=$u;$i++){
            for ($ik=0;$ik<=$t;$ik++){
                  if ($ik == $t) {
                  	$sum = $sum + $k[$i][$t];
                  }
            }
      }
       for ($i=0;$i<=$t;$i++){
            $b[$i] = $sum;
      }
      return $b;
}
function five($t,$k) {
	 for ($i=0;$i<=$t;$i++){
	 	echo "<br>";
	 	echo "$k[$i]";
	 }
}
$m = rand(1,5);
$n = rand(2,5);
$a=second2($m,$n);
first2();
echo ("<br> Исходный массив:");
third2($a);
$B = four2($m,$n,$a);
echo ("<br> Вектор:");
five($m,$B);
?>