<?php

$action = $_GET['action'];
$brand  = $_POST['brand'];
$price  = $_POST['price'];
$count  = $_POST['count'];

if( !empty( $brand ) && !empty( $price ) && !empty( $count ) )
{
    echo "Додано авто в кількості " . $count . " шт";
}
elseif( empty( $_POST['brand'] ) || empty( $_POST['price'] ) || empty( $_POST['count'] )  )
{
    echo "Запис не додано";
}
else
{
    echo "Щось трапилось";
}
