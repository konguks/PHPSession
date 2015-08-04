<?php
/**
 * Created by PhpStorm.
 * User: kongu
 * Date: 04-Aug-15
 * Time: 11:28 PM
 */
$x = 5;

function test(){
    $x = 10;

    echo "LOCAL VAR : ".$x."\n";
    global $x;
    echo "GLOBAL VAR : ".$x."\n";
}
test();

function statictest(){
    static $y = 0;
    $z = 0;
    $y++;
    $z++;
    echo "Y : ".$y."\n";
    echo "Z : ".$z."\n";
}
statictest();
statictest();
statictest();
