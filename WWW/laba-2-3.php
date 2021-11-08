<title>Леонтьев Владимир Алексеевич</title>
</head>
<?php
echo "Ассоциативный массив cust: <br>";
$cust = array("cnum" => "2001", "cname" => "Hoffman","city" => "London", "snum" => "1001");
print_r($cust);
echo "<br>";
echo "Добавление ключа rating: <br>";
$cust += ["rating" => "100"];
print_r($cust);
echo "<br>";
echo "Сортировка по значениям: <br>";
arsort($cust);
print_r($cust);
echo "<br>";
echo "Сортировка по ключам: <br>";
ksort($cust);
print_r($cust);
echo "<br>";
echo "Сортировка с помощью функции sort(): <br>";
sort($cust);
print_r($cust);
?>