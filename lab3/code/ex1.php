<?php

//поиск совпадений
$str = 'ahb acb aeb aeeb adcb axeb';

//выражение для поиска 'abba', 'adca', 'abea'
$pattern = '/a..b/';

//поиск совпадений
preg_match_all($pattern, $str, $matches);

//вывод результатов
echo "Найденные строки:\n";
foreach ($matches[0] as $match) {
    echo $match . "\n";
}

?>