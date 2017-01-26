<?php
/**
 * Created by PhpStorm.
 * User: Kasutaja
 * Date: 18.01.2017
 * Time: 10:34
 */
// menu.php - create page menu
// create menu and item objects
//for menu and menu items
$menu = new template('menu.menu'); //in menu directory is file menu.html menu/menu.html
$item = new template('menu.item');
//main meny content query
$sql = 'SELECT content_id, title from content where'.
    'parent_id = "0" and show_in_menu = "1"';
$sql = $sql.'order by sort asc';
//get menu data from database
$res = $db ->getArray($sql);
//create menu items from query result
if($res != false){
    foreach ( $res as $page){
        //add content to menu item
        $item->set('name',$page['title']);
        $link = $http->getLink(array('page_id'=>$page ['content_id']));
        $item->set('link', $link);
        //add item to menu
        $menu->add('items', $item->parse());

    }
}
$tmpl->set('menu', $menu->parse());
?>