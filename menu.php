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
echo '<pre>';
print_r($menu);
print_r($item);
echo '</pre>';