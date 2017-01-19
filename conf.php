<?php
/**
 * Created by PhpStorm.
 * User: Kasutaja
 * Date: 19.01.2017
 * Time: 12:19
 */
//framework configuration
//create and template objects
$tmpl->set('Menu', $menu->parse());
$tmpl->set('title', 'Tiitel');
$tmpl->set('Nav-bar', 'Minu navigatsioon');
$tmpl->set('Lang-bar', 'Minu keeleriba');
$tmpl->set('Content', 'Minu sisu');õ


require_once CLASSES_DIR.'template.php';
//import http class
require_once CLASSES_DIR.'http.php';
//import
require_once CLASSES_DIR.'linkobject.php';

//create and output http object from linkobject class
$http = new linkobject();
//create database object

$db = new mysql('localhost','user','parool','dbname');
?>