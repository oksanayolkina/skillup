<?php
$action = $_GET['action'] ?? 'view';

switch ($action)
{
    case "create":
        $brand = $_POST['brand'];
        $price = $_POST['price'];
        $count = (int)( $_POST['count']);

        if( empty( $brand ) && empty( $price ) && empty( $count ) )
        {
            die( "Не додано" );
        }

        createEntity( $brand, $price, $count );
        break;

    case "view":
    default:
        echo getTable();
}

function createEntity( string $brand, string $price, int $count )
{
    file_put_contents( "cars.txt", "name=$brand,price=$price,count=$count;", FILE_APPEND );
    echo getTable();
}

function getTable(): string
{
    $html  =
        '<form action="cars.php?action=create" method="post">
            <input id="brand" type="text" name="brand" placeholder="Brand car">
            <input id="price" type="text" name="price" placeholder="Price">
            <input id="count" type="number" name="count" placeholder="Count">
            <input type="submit" value="SEND">
        </form>';

    $html .= "<table border='1'>
        <thead>
            <th>Brand</th>
            <th>Price</th>
            <th>Count</th>
        </thead>
        <tbody>";

    foreach (getData() as $field => $value)
    {
        $html .=
            "<tr>".
                "<td>{$value['brand']}</td>".
                "<td>{$value['price']}</td>".
                "<td>{$value['count']}</td>".
            "</tr>";
    }

    $html .= "</tbody></table>";

    return $html;
}

function getData(): array
{
    $cars = [];

    $carStr = file_get_contents( "cars.txt" );

    if( !$carStr )
    {
        return $cars;
    }

    $carStr = explode( ";", $carStr );

    foreach( $carStr as $row )
    {
        if( !$row )
        {
            continue;
        }

        $tmp = explode( ",", $row );

        $r = [];
        foreach( $tmp as $t )
        {
            [ $key, $value ] = explode( "=", $t );
            $r[ $key ] = $value;
        }
        $cars[] = $r;
    }

    return $cars;
}