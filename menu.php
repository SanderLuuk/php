<?php
/**
 * Created by PhpStorm.
 * User: Kasutaja
 * Date: 18.01.2017
 * Time: 10:34
 */
// menu.php - create page menu
// create menu template objects
//for menu and menu items
$menu =new template('menu.menu'); //in menu directory is file menu.html menu/menu.html
$item =new template('menu.item');
//add pairs  of item template element names and real values
$item->set('name', 'Esimene leht');
//make link element
$link = $http->getLink(array('page'=>'first'));
$item->set('link',$link);
//control created item output
echo '<pre>';
print_r($item);
echo '</pre>';
echo $item->parse(); //v2ljatrykki v6imaldab parse

?>