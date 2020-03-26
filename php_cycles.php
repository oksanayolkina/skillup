<?php

$arr_en = range( 'a', 'z' );
$len    = count( $arr_en );

print_r( $arr_en );

foreach ($arr_en as $v)
{
    if ($v ==='a')
    {
       $j1 = 'a';
    }
    else if ($v === 'o')
    {
        $j2 = 'o';
    }
    else if ($v === 'b')  // вказую "b", тому що не знаю як зробити ще раз букву "о"
    {
        $j3 = 'b';
    }
    continue;
}
    echo "Алексеєнко Оксана Олегівна " . $j1 . $j2 . $j3;

