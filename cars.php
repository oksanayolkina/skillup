<?php

if( $_GET['action'] === 'car' && $_POST['count'] < 5 )
{
    echo "Додано авто в кількості до 5 шт";
}
elseif( $_GET['action'] === 'car' && $_POST['count'] < 10 )
{
    echo "Додано авто в кількості до 10 шт";
}
else
{
    echo "Запис не додано";
}
