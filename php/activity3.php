<?php
/**
 * Created by PhpStorm.
 * User: 1516734
 * Date: 08/03/2016
 * Time: 10:08
 */
$wantedgood = "mugs";

switch ($wantedgood) {
    case "specs":
        echo "You have to be 16 to buy specs";
        break;
    case "mugs":
        echo "You have to be 18 to buy mugs";
        break;
    case "sausage rolls":
        echo "You have to be 21 to buy sausage rolls";
        break;
    default:
        echo "You haven't selected a thing to buy";
}

?>