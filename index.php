<?php
/**
 * Created by PhpStorm.
 * User: Kasutaja
 * Date: 12.01.2017
 * Time: 12:58
 */
//import comnfiguration
require_once 'conf.php';
//create and template object
define('CLASSES_DIR', 'classes/'); //classes path
define('TMPL_DIR', 'tmpl/'); // templates path
define('STYLE_DIR','css/'); // styles path
define('ACTS_DIR', 'acts/'); // acts path
define('DEFAULT_ACT','default');//default act file name
//require_once CLASSES_DIR.'template.php';
//and use it
//create an empty template object
$tmpl = new template('main');
//add pairs of template element names and real values

//import http class
//require_once CLASSES_DIR.'http.php';
//import
//require_once CLASSES_DIR.'linkobject.php';
//create andoutput http object
//$http = new linkobject();
//control menu
//import menu file
require_once 'menu.php';// int this file
/*$tmpl->set('Menu', $menu->parse());
$tmpl->set('title', 'Tiitel');
$tmpl->set('Nav-bar', 'Minu navigatsioon');
$tmpl->set('Lang-bar', 'Minu keeleriba');
$tmpl->set('Content', 'Minu sisu');*/


//set upthe file name for template
//control the content of template object
//echo '<pre>';
//print_r($tmpl);
//echo '</pre>';

//output template content set up with real values
echo $tmpl->parse();
//import http class
//require_once CLASSES_DIR.'http.php';
//import
//require_once CLASSES_DIR.'linkobject.php';
//create andoutput http object
//$http = new linkobject();
//control http object output - KONTROLL
//echo '<pre>';
//print_r($http);
//echo '</pre>';
//controll http constants
/*echo REMOTE_ADDR.'<br />';
echo PHP_SELF.'<br />';
echo SCRIPT_NAME.'<br />';
echo HTTP_HOST.'<br />';
echo '<hr />';*/
//create http data pairs and set up to $http->vars array
//$http->set('kasutaja','sander');
//$http->set('tund','php programmeerimisvahendid');
//control http-> vars object output
//echo '<pre>';
//print_r($http->vars);
//echo '</pre>';

//control link creation
//$link = $http->getLink(array('kasutaja'=>'anna','parool'=>'qwerty'));
//echo $link;
//control menu
//import menu file
//require_once 'menu.php';
// control http output
/*echo '<pre>';
print_r($http);
echo '</pre>';
//control element by value
echo $http->get('act');*/
require_once  'act.php';
//control database object
//crate connection
$db->connect();
echo '<pre>';
print_r($db);
echo '</pre>';

?>