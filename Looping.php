<?php
/**
 * Created by PhpStorm.
 * User: kongu
 * Date: 05-Aug-15
 * Time: 12:38 AM
 */

$a = 0;
$b = 0;

for( $i=0; $i<5; $i++ )
{
    $a += 10;
    $b += 5;
}
echo ("At the end of the loop a=$a and b=$b"."\n" );

while( $b < 30)
{
    $b++;
    $a--;
}
echo ("Loop stopped at a = $a and b = $b"."\n" );


do{
    $a++;
}while( $a < 50 );

echo ("Loop stopped at a = $a"."\n" );

$array = array( 1, 2, 3, 4, 5);
foreach( $array as $value )
{
    echo "Value is $value "."\n";
}
