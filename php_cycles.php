<?php
//$arr_en = range( 'a', 'z' );
$arr_en = [ 'a', 'o', 'k', 's', 'n' ];
$len    = count( $arr_en ) - 1;

//print_r( $arr_en );

//$name = $arr_en[rand(0,$len)] . $arr_en[rand(0,$len)] . $arr_en[rand(0,$len)];

while( ( $name = $arr_en[ rand( 0, $len ) ] . $arr_en[ rand( 0, $len ) ] . $arr_en[ rand( 0, $len ) ] ) !== "aoo" )
{
    echo "$name is Not aoo <br>";
}
echo "FOUND $name";

die();