<?php

//if( $_GET['action'] === 'car' && $_POST['count'] < 5 )
//{
//    echo "Додано авто в кількості до 5 шт";
//}
//elseif( $_GET['action'] === 'car' && $_POST['count'] < 10 )
//{
//    echo "Додано авто в кількості до 10 шт";
//}
//else
//{
//    echo "Запис не додано";
//}


$action = $_GET['action'];
$brand  = $_POST['brand'];
$price  = $_POST['price'];
$count  = $_POST['count'];

switch($count)
{
    case ( $action === 'car' && $count < 5 ):
        echo "Додано авто в кількості до 5 шт";
        break;

    case ( $action === 'car' && $count < 10 ):
        echo "Додано авто в кількості до 10 шт";
        break;

    case ( !isset($brand) && !isset($price) && !isset($count) ):
        echo "Запис не додано";
        break;
}