<?
$a = "Здравствуйте, ";
switch ($_POST["b"]) {
    case "Vladimir":
        $c = "Леонтьев Владимир Алексеевич";
        break;
    case "Football":
        $c = "Аршавин Андрей Сергеевич";
        break;
    case "hockey":
        $c = "Мозякин Сергей Валерьевич";
        break;
    case "root":
        $c = "Уважаемый пользователь";
        break;
    default:
        $c = "Вы незарегистрированный пользователь!";
        $a = "";
}
echo($a . $c);
?>