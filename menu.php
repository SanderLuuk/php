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
//menu item creation - begin
//add pairs  of item template element names and real values
$item->set('name', 'Esimene leht');
//make link element
$link = $http->getLink(array('act'=>'first'));
$item->set('link',$link);
//control created item output
//echo '<pre>';
//print_r($item);
//echo '</pre>';
//add menu item top menu
$menu->set('items',$item->parse()); //v2ljatrykki v6imaldab parse
//menu item creation - begin
//
//menu item creation - begin
//add pairs  of item template element names and real values
$item->set('name', 'Teine leht');
//make link element
$link = $http->getLink(array('act'=>'second'));
$item->set('link',$link);
//control created item output
//echo '<pre>';
//print_r($item);
//echo '</pre>';
//add menu item top menu
$menu->add('items',$item->parse()); // add another item to menu!
//control created menu outputs
/*echo '<pre>';
print_r($menu);
echo '</pre>';*/
//output $menu->parse();
//echo $menu->parse();

?>