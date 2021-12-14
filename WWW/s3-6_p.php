<?php
//Шифрование вариант 15
if (isset($_POST["First"])) {
$text=$_POST["p"];
$j=0;
$p=0;
$U=preg_split("//u",$text,-1,PREG_SPLIT_NO_EMPTY);
for ($i=0;$i<count($U);$i++){
    if ($i%2==0){$f[$j]=$U[$i];$j++;}
    if ($i%2==1){$t[$p]=$U[$i];$p++;}
}
$Z=array_merge($t,array_reverse($f));
echo ("<P> Результат:<br>". (implode($Z)) . "</textarea>");
}
//Шифрование вариант 20
if (isset($_POST["Second"])){
$text1=$_POST["p2"];
$arr1 = preg_split("//u",$text1,-1,PREG_SPLIT_NO_EMPTY);
for ($i=1;$i<count($arr1);$i++){
    if ($i>0 and $i<count($arr1)-3){
        $k=$i+2;
            $arr2[$k] = $arr1[$i];
    }
    if ($i>=count($arr1)-3) {
        $k=$i-count($arr1)+3;
            $arr2[$k] = $arr1[$i];
    }
}
ksort($arr2);
       echo ("<P> Результат:<br>". (implode($arr2)) . "</textarea>");
    }
    // Удаление слова вариант 1
if (isset($_POST["Third"])){
  $text = str_replace($_POST["word"], "", $_POST["text"]);
        echo $text;
}
?>