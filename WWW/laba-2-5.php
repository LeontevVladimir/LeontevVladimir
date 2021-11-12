<title>Леонтьев Владимир Алексеевич</title>
<p> Леонтьев В.А. Вариант 15 </p>
<?php
$a=rand(-5,5);
$b=rand(-5,5);
echo "a:" . $a;
echo "<br>b:" . $b;
$z = (sin(first($a,$b))**2)+first(log(abs($a-$b)),$b);
function first($u,$t) {
      if (($u*$u)>abs(4*$u*$t))
      {
      	$r = log($u+$t);
      }
      elseif (($u*$u)<abs(4*$u*$t))
      {
      	$r=tan(1/$u*$t);
      }
      elseif (($u*$u) == (abs(4*$u*$t)))
      {
      	$r = exp(($u*$t)+sqrt(sin($u)));
      }
      return $r;
}
echo "<br>Z=" . $z;
?>
<p> Леонтьев В.А. Вариант 4 </p>
<?php
$a=rand(-5,5);
$b=rand(-5,5);
echo "a:" . $a;
echo "<br>b:" . $b;
$z = second($a-$b*$b,$b-$a)+second($a,$b-$a*$a);
function second($u,$t) {
      if (($u>=0) and ($t>=0))
      {
      	$r = $u;
      }
      elseif (($u<0) and ($t>=0))
      {
      	$r=$t;
      }
      elseif (($u>=0) and ($t<0))
      {
      	$r=$u-2*$t;
      }
      elseif (($u<0) and ($t<0))
      {
      	$r=$u*$t+3*$t;
      }
      return $r;
}
echo "<br>Z=" . $z;
?>