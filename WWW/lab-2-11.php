<HTML>
<TITLE> Леонтьев Владимир Алексеевич Вариант 7 </TITLE>
<BODY>
<TABLE border=1>
<?php
 $n = rand(1,500);
 print "n = $n <br>";
 $S = 0;
 for ($a=1; $a*$a <$n; $a++){
 	for ($b=$a; $b*$b < $n; $b++){
 		for ($c=$b; $c*$c<$n; $c++){
 			if ($a*$a+$b*$b+$c*$c == $n){
 				print ("$a*$a+$b*$b+$c*$c = $n <br>");
 $S++;
 			}
 		}
 }
 }
 if ($S==0) print ("Невозможно представить в виде суммы квадратов трех натуральных чисел")
?>
</TABLE>
</BODY>
</HTML>