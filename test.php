<?php
$fruits = [ 'apple', 'peach', 'lemon', 'melon' ];

$str = file_put_contents( "/var/www/super-oksana.com.ua/html/fruits", $fruits );

echo $str;
