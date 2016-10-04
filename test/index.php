<?php
/**
 * Created by PhpStorm.
 * User: manel
 * Date: 4/10/16
 * Time: 16:08
 */

require '../vendor/autoload.php';
//require '../src/Hello.php';

use Manel\Hello;

$hello = new Hello();

echo $hello->say();