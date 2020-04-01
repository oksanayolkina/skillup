<?php

$arr_en = range( 'a', 'z' );
$len    = count( $arr_en )-1;

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
    echo "Алексеєнко Оксана Олегівна " . $j1 . $j2 . $j3 . "<br>";


//$name = $arr_en[rand(0,$len)] . $arr_en[rand(0,$len)] . $arr_en[rand(0,$len)] . $arr_en[rand(0,$len)]. $arr_en[rand(0,$len)] . $arr_en[rand(0,$len)];
$name = $arr_en[rand(0,$len)] . $arr_en[rand(0,$len)] ;

if ($name === "ok")
{
    echo  "Алексеєнко Оксана Олегівна -" . $name;
}
else
{
    echo $name . " - NO";
}
//Ура
/*$arr_en = range( 'a', 'z' );
$arr_en =['a', 'o' , 'k', 's', 'n'];
$len    = count( $arr_en ) - 1;

print_r( $arr_en );

$found = false;
$arr = ['a', 'o' , 'k', 's', 'n'];
$i=0;
while( !$found )
{
//    $arr = [];
//
//    for( $i = 1; $i < 7; $i++ )
//    {
//        $arr[] = $arr_en[ rand( 0, $len ) ];
//    }
//
//    $found = true;
    echo "try: <br>";
    if ($arr[$i] === 'oks')
    {
        $found = true;
        echo $arr[$i];
    }
    $i++;
}

//print_r( $arr );*/
