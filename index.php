<?php

$string = 'text';
$integer = 11;
$float = 11.0;
$boolean = false;
$null = null;

var_dump($null == 0); //true
var_dump($null === 0); //false

var_dump($boolean == ''); //true
var_dump($boolean === ''); //false

var_dump($float == $integer); //true
var_dump($float === $integer); //false

var_dump(11 == '11'); //true
var_dump(11 === '11'); //false

var_dump($string == ''); //false
var_dump($string == '122'); //false

var_dump($string == $integer); //false
var_dump($string == $boolean); //false

echo "приведення типів \n";

var_dump($boolean == boolval('false')); //false
var_dump($boolean === boolval('false')); //false

var_dump($boolean == boolval(''));//true
var_dump($boolean === boolval(''));//true

var_dump($integer == intval($float)); //true
var_dump($integer === intval($float)); //true
var_dump($integer === intval('11')); //true

var_dump($boolean == strval(false)); //true
var_dump($boolean === strval(false)); //false

var_dump(11.0 == floatval(11));//true
var_dump(11.0 === floatval(11));//true
var_dump(11 == (int)11.0); //true

var_dump( '3' + 3 == 6); //true
