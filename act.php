<?php
/**
 * Created by PhpStorm.
 * User: Kasutaja
 * Date: 18.01.2017
 * Time: 14:25
 */
//get act element value from url
$act = $http->get('act');
echo 'act value = '.$act.'<br />';
//define act file path according to the act element value
$fn =
?>