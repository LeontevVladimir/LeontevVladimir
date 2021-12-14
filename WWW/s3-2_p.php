<p> Операция: <p>
<?
$a = $_POST["a"];
$b = $_POST["b"];
switch ($_POST["z"]) {
    case 1:
        echo("Сумма чисел a=$a и b=$b равна" . ($a + $b));
        break;
    case 2:
        echo("Умножение чисел a=$a и b=$b равно " . ($a * $b));
        break;
    case 3:
        echo("Разность чисел a=$a и b=$b равна " . ($a - $b));
        break;
    case 4:
        if ($b == 0) echo("Делить нельзя");
        else echo("Деление чисел a=$a и b=$b равно " . ($a / $b));
        break;
}
?>