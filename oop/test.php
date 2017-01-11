<?php
/**
 * Created by PhpStorm.
 * User: Kasutaja
 * Date: 11.01.2017
 * Time: 14:46
 */
// require the object creating and using class
require_once('text.php');
//create an object
$sentence = new text();
//control object output
echo '<pre>';
print_r($sentence);
echo '</pre>';
$sentence->setText('Hello text object');
//control object output
echo '<pre>';
print_r($sentence);
echo '</pre>';
//show object output
$sentence->show();
echo '<hr/>';
//create and object
$sentence2 = new text ('Hello text by contsruct!');
echo '<pre>';
print_r($sentence2);
echo '</pre>';
// show object output
$sentence2->show();
?>