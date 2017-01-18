<?php
/**
 * Created by PhpStorm.
 * User: Kasutaja
 * Date: 12.01.2017
 * Time: 12:58
 */
//create and template object
define('CLASSES_DIR', 'classes/');
define('TMPL_DIR', 'tmpl/');
define('STYLE_DIR','css/');
require_once CLASSES_DIR.'template.php';
//and use it
//create an empty template object
$tmpl = new template('main');
//add pairs of template element names and real values
$tmpl->set('Menu', 'Minu Menüü');
$tmpl->set('title', 'Tiitel');
$tmpl->set('Nav-bar', 'Minu navigatsioon');
$tmpl->set('Lang-bar', 'Minu keeleriba');
$tmpl->set('Content', 'Minu sisu');


//set upthe file name for template
//control the content of template object
//echo '<pre>';
//print_r($tmpl);
//echo '</pre>';

//output template content set up with real values
echo $tmpl->parse();
//import http class
require_once CLASSES_DIR.'http.php';
//import
require_once CLASSES_DIR.'linkobject.php';
//create andoutput http object
$http = new linkobject();
//control http object output - KONTROLL
echo '<pre>';
print_r($http);
echo '</pre>';
//controll http constants
echo REMOTE_ADDR.'<br />';
echo PHP_SELF.'<br />';
echo SCRIPT_NAME.'<br />';
echo HTTP_HOST.'<br />';
echo '<hr />';
//create http data pairs and set up to $http->vars array
$http->set('kasutaja','sander');
$http->set('tund','php programmeerimisvahendid');
//control http-> vars object output
echo '<pre>';
print_r($http->vars);
echo '</pre>';

//control link creation
$link = $http->getLink(array('kasutaja'=>'anna','parool'=>'qwerty'));
echo $link;
//control menu
//import menu file
require_once 'menu.php';

?>