<?php
//$arr_en = range( 'a', 'z' );
$str = "aoo";
$arr_en = [ 'a', 'o', 'k', 's', 'n' ];
$len    = count( $arr_en ) - 1;

$count = 0;

do
{
    $count++;
    $name = $arr_en[ rand( 0, $len) ] . $arr_en[ rand( 0, $len) ] . $arr_en[ rand( 0, $len) ];
}
while( $name != $str );

echo "FOUND $name - $count";
