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
$menu->set('items', false); // if user is not loged in , then he/she does not see.
$item = new template('menu.item');
//main meny content query
$sql = 'SELECT content_id, title from content where '.
    'parent_id="0" and show_in_menu="1"';
// allowing to show to the user only content what is allowed , if hidden is 1 - then only seeable to admins.
if(ROLE_ID != ROLE_ADMIN) {
    $sql .= ' AND is_hidden = 0';
}
$sql .? ' ORDER BY sort ASC';//get menu data from database

$res = $db->getArray($sql); //create menu items from query result

}


if($res != false){
    foreach ($res as $page){
        //add content to menu item
        $item->set('name',$page['title']);
        $link = $http->getLink(array('page_id'=>$page['content_id']));
        $item->set('link', $link);
        //add item to menu
        $menu->add('items', $item->parse());

    }
}
$tmpl->set('menu', $menu->parse());
?>