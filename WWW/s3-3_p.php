<p> Получаем: <p>
<?
$c = array();
$a = ($_POST['a']);
$b = ($_POST['b']);
printf("Диапазон значений [1,$a]: <br>");
switch ($b) {
    case 1: 
        for ($i = 2; $i <= $a; $i += 2) {
            if (($a % $i) == 0)
                echo $i . "<br>";
        }
        break;
    case 2: 
        for ($i = 1; $i <= $a; $i += 2) {
            if (($a % $i) == 0) echo $i . "<br>";
        }
        break;
    case 3: 
        for ($i = 1; $i <= $a; $i += 1) {
            if (($a % $i) == 0)
                if (usl($i))
                    echo $i . "<br>";
        }
        break;
    case 4: 
        for ($i = 2; $i <= $a; $i += 1) {
            if (($a % $i) == 0)
                if (!usl($i))
                    echo $i . "<br>";
        }
        break;
}
function usl($a)
{
    for ($x = 2; $x <= sqrt($a); $x++) {
        if ($a % $x == 0)
            return false;
    }
    return true;
}
?>