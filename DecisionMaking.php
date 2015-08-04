<?php
/**
 * Created by PhpStorm.
 * User: kongu
 * Date: 05-Aug-15
 * Time: 12:16 AM
 */
date_default_timezone_set("America/New_York");
$d=date("D");

if ($d=="Fri")
    echo "Have a nice weekend!"."\n";
else
    echo "Have a nice day!"."\n";

switch ($d)
{
    case "Mon":
        echo "Today is Monday"."\n";
        break;
    case "Tue":
        echo "Today is Tuesday"."\n";
        break;
    case "Wed":
        echo "Today is Wednesday"."\n";
        break;
    case "Thu":
        echo "Today is Thursday"."\n";
        break;
    case "Fri":
        echo "Today is Friday"."\n";
        break;
    case "Sat":
        echo "Today is Saturday"."\n";
        break;
    case "Sun":
        echo "Today is Sunday"."\n";
        break;
    default:
        echo "Wonder which day is this ?"."\n";
}