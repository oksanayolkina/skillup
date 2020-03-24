<?php

$action = $_GET['action'];
$brand  = $_POST['brand'];
$price  = $_POST['price'];
$count  = $_POST['count'];

if( !empty( $brand ) && !empty( $price ) && !empty( $count ) )
{
    echo "Додано авто в кількості " . $count . " шт";
}
else
{
    echo "Щось трапилось";
}
